<?php

namespace App\Repositories\Admin;

use App\Events\CompleteJobEvent;
use App\Jobs\SendPushNotification;
use App\Models\Notification;
use App\Models\RequestForQuotation;
use App\Models\RequestForQuotationMedia;
use App\Models\RequestForQuotationPending;
use App\Models\User;
use Gregwar\Image\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class RequestForQuotationRepository
 * @package App\Repositories\Admin
 * @version July 16, 2018, 7:08 am UTC
 *
 * @method RequestForQuotation findWithoutFail($id, $columns = ['*'])
 * @method RequestForQuotation find($id, $columns = ['*'])
 * @method RequestForQuotation first($columns = ['*'])
 */
class RequestForQuotationRepository extends BaseRepository
{
    protected $serviceRepository;
    protected $mechanicServiceRepository;
    protected $notificationRepository;

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'car_id',
        'area_id',
        'service_id',
        'with_in_time'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return RequestForQuotation::class;
    }

    public function saveRecord($request, $serviceRepository, $mechanicServiceRepo, $notificationRepo)
    {
        $this->serviceRepository = $serviceRepository;
        $this->mechanicServiceRepository = $mechanicServiceRepo;
        $this->notificationRepository = $notificationRepo;

        $data = $request->only(['car_id', 'area_id', 'service_id', 'notes', 'with_in_time']);
        $requestForQuotation = $this->create($data);

        $pendingQuotationUsers = User::whereHas('details', function ($query) use ($requestForQuotation) {
            return $query->where('area_id', $requestForQuotation->area_id);
        })->whereHas('services', function ($query) use ($requestForQuotation) {
            return $query->where('service_id', $requestForQuotation->service_id);
        })->whereHas('mechanicMakers', function ($mechanicMakers) use ($requestForQuotation) {
            return $mechanicMakers->where('maker_id', $requestForQuotation->car->carModel->car_maker_id);
        })->get();

//        var_dump($pendingQuotationUsers);
//        exit;

        $user = Auth::user();

        if (!empty($user)) {
            $notification = $this->notificationRepository->saveRecord([
                'url'         => 'admin/requestForQuotations/' . $requestForQuotation->id,
                'ref_id'      => $requestForQuotation->id,
                'message'     => Notification::$ACTION_TYPE_MESSAGE[Notification::ACTION_TYPE_NEW_JOB],
                'action_type' => Notification::ACTION_TYPE_NEW_JOB
            ]);
        }

        if (isset($requestForQuotation)) {

            foreach ($pendingQuotationUsers as $user) {

                // TODO: Bulk insert does not trigger observers.

                $notification->users()->attach($user->id, ['status' => Notification::DELIVERY_STATUS_DELIVERED]);


                // Bulk insert does not trigger observers.
                RequestForQuotationPending::create([
                    'quotation_request_id' => $requestForQuotation->id,
                    'mechanic_id'          => $user->id
                ]);
            }
        }

        if (isset($request->images)) {
            $files = $request->file('images');
            foreach ($files as $file) {
                /**
                 *
                 */
                $photo = $file;
                $rand = time();
                $filename = $rand . '.jpg';

                $path = implode(DIRECTORY_SEPARATOR, ['storage', 'app', 'rfqImages']);
                $basePath = base_path() . DIRECTORY_SEPARATOR . $path;

                $filePath = $path . DIRECTORY_SEPARATOR . $filename;
                $baseFilePath = base_path() . DIRECTORY_SEPARATOR . $filePath;

                $photo->move($basePath, $photo->getClientOriginalName());

                $image = Image::open($basePath . DIRECTORY_SEPARATOR . $photo->getClientOriginalName())->useFallback(false);
                $image->save($baseFilePath, 'jpg', 100);
                unset($image);
                $image = null;
                unlink($basePath . DIRECTORY_SEPARATOR . $photo->getClientOriginalName());
                /**
                 *
                 */
                RequestForQuotationMedia::create([
                    'quotation_request_id' => $requestForQuotation->id,
                    'type'                 => RequestForQuotationMedia::MEDIA_IMAGE,
                    'name'                 => $file->getClientOriginalName(),
                    'path'                 => 'rfqImages/' . $filename
//                    'path'                 => Storage::putFile('rfqImages', $file),
                ]);
            }
        }

        return $requestForQuotation;
    }

    /**
     * @param $request
     * @param $requestForQuot
     * @return mixed
     * @throws \Exception
     */
    public function updateRecord($request, $requestForQuot)
    {
        $data = $request->only(['car_id', 'area_id', 'service_id', 'notes', 'with_in_time']);
        $requestForQuotation = $this->update($data, $requestForQuot->id);

        if (isset($request->images)) {
            $files = $request->file('images');
            foreach ($files as $file) {

                /**
                 *
                 */
                $photo = $file;
                $rand = time();
                $filename = $rand . '.jpg';

                $path = implode(DIRECTORY_SEPARATOR, ['storage', 'app', 'rfqImages']);
                $basePath = base_path() . DIRECTORY_SEPARATOR . $path;

                $filePath = $path . DIRECTORY_SEPARATOR . $filename;
                $baseFilePath = base_path() . DIRECTORY_SEPARATOR . $filePath;

                $photo->move($basePath, $photo->getClientOriginalName());

                $image = Image::open($basePath . DIRECTORY_SEPARATOR . $photo->getClientOriginalName())->useFallback(false);
                $image->save($baseFilePath, 'jpg', 100);
                unset($image);
                $image = null;
                unlink($basePath . DIRECTORY_SEPARATOR . $photo->getClientOriginalName());
                /**
                 *
                 */

                RequestForQuotationMedia::create([
                    'quotation_request_id' => $requestForQuot->id,
                    'type'                 => RequestForQuotationMedia::MEDIA_IMAGE,
                    'name'                 => $file->getClientOriginalName(),
                    'path'                 => 'rfqImages/' . $filename
//                    'path'                 => Storage::putFile('rfqImages', $file),
                ]);
            }
        }

        $pending_data = [];
        $value = 0;
        if (isset($requestForQuotation)) {
            foreach ($requestForQuotation->service->mechanicServices as $ser) {
                $pending_data[$value]['quotation_request_id'] = $requestForQuotation->id;
                $pending_data[$value]['mechanic_id'] = $ser->mechanic_id;
                $value++;
            }
        }

        #TODO: Manage sync service id to pending quotations
        /*if ($data['service_id'] != $requestForQuot->service_id) {
            if (!empty($pending_data)) {
                $requestForQuotationPending = RequestForQuotationPending::insert($pending_data);
            }
        }*/
        return $requestForQuotation;
    }


    public function jobComplete($requestForQuotation, $notificationRepo)
    {
        $this->notificationRepository = $notificationRepo;

        $job = $this->update(['status' => 30], $requestForQuotation->id);

        $notification = $this->notificationRepository->saveRecord([
            'url'         => 'admin/requestForQuotations/' . $requestForQuotation->id,
            'ref_id'      => $requestForQuotation->id,
            'message'     => Notification::$ACTION_TYPE_MESSAGE[Notification::ACTION_TYPE_JOB_COMPLETE],
            'action_type' => Notification::ACTION_TYPE_JOB_COMPLETE
        ]);
        $notification->users()->attach($requestForQuotation->car->driver->id, ['status' => Notification::DELIVERY_STATUS_DELIVERED]);

//        event(new CompleteJobEvent($requestForQuotation->car->driver->id, $notification));

        $message = $notification->message;
        $deviceData = $requestForQuotation->car->driver->devices->toArray();
//        var_dump($deviceData); exit();

        $email = $requestForQuotation->car->driver->email;
        $name = $requestForQuotation->car->driver->name;
        $subject = "Job Done";

        Mail::send('email.rfqUpdates', ['name' => $name, 'message' => 'Your requested job has been done. <a href="' . url("admin/requestForQuotations/" . $requestForQuotation->id) . '" target="_blank">click here</a>'],
            function ($mail) use ($email, $name, $subject) {
                $mail->from(getenv('MAIL_FROM_ADDRESS'), getenv('APP_NAME'));
                $mail->to($email, $name);
                $mail->subject($subject);
            });

        $rfq = new SendPushNotification($message, $deviceData, '');
        dispatch($rfq);

        return $job;
    }
}