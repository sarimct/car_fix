<?php

namespace App\Observers;

use App\Events\NewQuotationEvent;
use App\Jobs\SendPushNotification;
use App\Models\Notification;
use Illuminate\Support\Facades\Mail;
use App\Models\Quotation;
use App\Models\RequestForQuotation;
use App\Repositories\Admin\NotificationRepository;

class QuotationObserver
{
    /**
     * Handle the review "created" event.
     *
     * @param  \App\Models\Quotation $quotation
     * @return void
     */
    public function created(Quotation $quotation)
    {
        $notificationRepository = app()->make(NotificationRepository::class);

        $notification = $notificationRepository->saveRecord([
            'url'         => 'admin/requestForQuotations/' . $quotation->quotation_request_id,
            'ref_id'      => $quotation->quotation_request_id,
            'message'     => Notification::$ACTION_TYPE_MESSAGE[Notification::ACTION_TYPE_QUOTATION_NEW],
            'action_type' => Notification::ACTION_TYPE_QUOTATION_NEW
        ]);
        $notification->users()->attach($quotation->quotation_request->car->driver->id, ['status' => Notification::DELIVERY_STATUS_DELIVERED]);

//        event(new NewQuotationEvent($quotation->quotation_request->car->driver->id, $notification));
//        $message = $quotation->user->notifications->message;

        $email = $quotation->quotation_request->car->driver->email;
        $name = $quotation->quotation_request->car->driver->name;
        $subject = "New quotation";

        Mail::send('email.rfqUpdates',
            [
                'name'    => $name,
                'msg' => 'You have new quotation on your requested job.. <a href="' . url("admin/requestForQuotations/" . $quotation->quotation_request_id) . '" target="_blank">click here</a>'
            ],
            function ($mail) use ($email, $name, $subject) {
                $mail->from(getenv('MAIL_FROM_ADDRESS'), getenv('APP_NAME'));
                $mail->to($email, $name);
                $mail->subject($subject);
            });

        $message = $notification->message;
//        $deviceData = $quotation->user->devices->toArray();
        $deviceData = $quotation->quotation_request->car->driver->devices->toArray();

        $quotation_send = new SendPushNotification($message, $deviceData, '');
        dispatch($quotation_send);

    }

    /**
     * Handle the review "updated" event.
     *
     * @param  \App\Models\Quotation $quotation
     * @return void
     */
    public function updated(Quotation $quotation)
    {
        //
    }

    /**
     * Handle the review "deleted" event.
     *
     * @param  \App\Models\Quotation $quotation
     * @return void
     */
    public function deleted(Quotation $quotation)
    {
        //
    }

    /**
     * Handle the review "restored" event.
     *
     * @param  \App\Models\Quotation $quotation
     * @return void
     */
    public function restored(Quotation $quotation)
    {
        //
    }

    /**
     * Handle the review "force deleted" event.
     *
     * @param  \App\Models\Quotation $quotation
     * @return void
     */
    public function forceDeleted(Quotation $quotation)
    {
        //
    }
}
