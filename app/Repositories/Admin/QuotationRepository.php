<?php

namespace App\Repositories\Admin;

use App\Events\AcceptQuotationEvent;
use App\Jobs\SendPushNotification;
use Illuminate\Support\Facades\Mail;
use App\Models\Notification;
use App\Models\Quotation;
use App\Models\RequestForQuotation;
use App\Models\RequestForQuotationPending;
use Illuminate\Support\Facades\Auth;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class QuotationRepository
 * @package App\Repositories\Admin
 * @version July 16, 2018, 7:03 am UTC
 *
 * @method Quotation findWithoutFail($id, $columns = ['*'])
 * @method Quotation find($id, $columns = ['*'])
 * @method Quotation first($columns = ['*'])
 */
class QuotationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'mechanic_id',
        'request_id',
        'amount',
        'message',
        'status'
    ];

    private $requestForQuotationRepository, $notificationRepository;

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Quotation::class;
    }

    public function store($request)
    {
        $user = Auth::user();
        $input = $request->all();

        $data['mechanic_id'] = $user->id;
        $data['quotation_request_id'] = $input['quotation_request_id'];
        $data['amount'] = $input['amount'];
        $data['message'] = $input['message'];

        $quotation = $this->create($data);

        $RequestForQuotationPending = RequestForQuotationPending::where(
            [
                'quotation_request_id' => $input['quotation_request_id'],
                'mechanic_id'          => $user->id
            ])->get()->first();
        $RequestForQuotationPending->status = 1;
        $RequestForQuotationPending->save();
        return $quotation;
    }

    public function acceptMechanicQuotation($quotation, $requestForQuotationRepository, $notificationRepository)
    {
        $this->requestForQuotationRepository = $requestForQuotationRepository;
        $this->notificationRepository = $notificationRepository;
        $quotations = $this->findWhere(['quotation_request_id' => $quotation->quotation_request_id]);
        foreach ($quotations as $item) {
            $item->status = 30;
            $item->save();
        }

        $this->update(['status' => 20], $quotation->id);

        #TODO: request status is not updating
        $this->requestForQuotationRepository->update(['status' => 20], $quotation->quotation_request_id);

        $notification = $this->notificationRepository->saveRecord([
            'url'         => 'admin/requestForQuotations/' . $quotation->quotation_request_id,
            'ref_id'      => $quotation->quotation_request_id,
            'message'     => Notification::$ACTION_TYPE_MESSAGE[Notification::ACTION_TYPE_QUOTATION_ACCEPTED],
            'action_type' => Notification::ACTION_TYPE_QUOTATION_ACCEPTED
        ]);

        $notification->users()->attach($quotation->mechanic_id, ['status' => Notification::DELIVERY_STATUS_DELIVERED]);

        $notification = Notification::whereHas('users', function ($users) use ($quotation) {
            return $users->where('notification_users.status', Notification::DELIVERY_STATUS_DELIVERED)->where('notification_users.user_id', $quotation->mechanic_id);
        })->where('ref_id', $quotation->quotation_request_id)->where('notifications.action_type', Notification::DELIVERY_STATUS_READ)->first();
//->andWhere('notifications.status', Notification::DELIVERY_STATUS_READ)


//        $request = RequestForQuotation::where('id', $quotation->quotation_request_id)->first();
//        event(new AcceptQuotationEvent($quotation->mechanic_id, $request, $notification));

        //        $deviceData = $quotation->user->devices->toArray();
        //        $deviceData = $quotation->quotation_request->car->driver->devices->toArray();

        $email = $quotation->user->email;
        $name = $quotation->user->name;
        $subject = "Quotation accepted";

        Mail::send('email.rfqUpdates', ['name' => $name, 'message' => 'Congrats! Your quote has been accepted. <a href="' . url("admin/requestForQuotations/" . $quotation->quotation_request_id) . '" target="_blank">click here</a>'],
            function ($mail) use ($email, $name, $subject) {
                $mail->from(getenv('MAIL_FROM_ADDRESS'), getenv('APP_NAME'));
                $mail->to($email, $name);
                $mail->subject($subject);
            });

        $message = $notification->message;
        $deviceData = $quotation->user->devices->toArray();
//        var_dump($deviceData);exit();
        $quotation_send = new SendPushNotification($message, $deviceData, '');
        dispatch($quotation_send);

        return $this->findWhere(['quotation_request_id' => $quotation->quotation_request_id]);
    }
}
