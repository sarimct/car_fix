<?php

namespace App\Observers;

use App\Events\NewJobEvent;
use App\Jobs\SendPushNotification;
use App\Models\Notification;
use App\Models\NotificationUser;
use App\Models\RequestForQuotation;
use App\Models\RequestForQuotationPending;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class RequestForQuotationPendingObserver
{
    /**
     * Handle the request for quotation pending "created" event.
     *
     * @param  \App\Models\RequestForQuotationPending $requestForQuotationPending
     * @return void
     */
    public function created(RequestForQuotationPending $requestForQuotationPending)
    {

        $notification = Notification::whereHas('users', function ($users) use ($requestForQuotationPending) {
            return $users->where('ref_id', $requestForQuotationPending->quotation_request_id)->where('notification_users.status', Notification::DELIVERY_STATUS_DELIVERED)->where('notification_users.user_id', $requestForQuotationPending->mechanic_id);
        })->first();

//        $request = RequestForQuotation::where('id', $requestForQuotationPending->quotation_request_id)->first();
//        event(new NewJobEvent($requestForQuotationPending->mechanic_id, $request, $notification));


        $message = $notification->message;
//        $deviceData = $notification->users[0]->devices->toArray();
        $deviceData = [];
        foreach ($notification->users as $user) {
//            $email = $name = $subject = '';
            $email = (isset($user->email) ? $user->email: '');
            $name = (isset($user->name) ? $user->name: 'Dear');

            $subject = "New Job";
            $message = 'You have a new job opportunity. <a href="' . url("admin/requestForQuotations/" . $requestForQuotationPending->quotation_request_id) . '" target="_blank">click here</a>';

            Mail::send('email.rfqUpdates', ['name' => $name, 'message' => $message],
                function ($mail) use ($email, $name, $subject) {
                    $mail->from(getenv('MAIL_FROM_ADDRESS'), getenv('APP_NAME'));
                    $mail->to($email, $name);
                    $mail->subject($subject);
                });

            $deviceData = $user->devices->toArray();
        }
        $rfq = new SendPushNotification($message, $deviceData, '');
        dispatch($rfq);

    }

    /**
     * Handle the request for quotation pending "updated" event.
     *
     * @param  \App\Models\RequestForQuotationPending $requestForQuotationPending
     * @return void
     */
    public function updated(RequestForQuotationPending $requestForQuotationPending)
    {
        //
    }

    /**
     * Handle the request for quotation pending "deleted" event.
     *
     * @param  \App\Models\RequestForQuotationPending $requestForQuotationPending
     * @return void
     */
    public function deleted(RequestForQuotationPending $requestForQuotationPending)
    {
        //
    }

    /**
     * Handle the request for quotation pending "restored" event.
     *
     * @param  \App\Models\RequestForQuotationPending $requestForQuotationPending
     * @return void
     */
    public function restored(RequestForQuotationPending $requestForQuotationPending)
    {
        //
    }

    /**
     * Handle the request for quotation pending "force deleted" event.
     *
     * @param  \App\Models\RequestForQuotationPending $requestForQuotationPending
     * @return void
     */
    public function forceDeleted(RequestForQuotationPending $requestForQuotationPending)
    {
        //
    }
}
