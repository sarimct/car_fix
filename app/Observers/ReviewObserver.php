<?php

namespace App\Observers;

use App\Events\NewReviewEvent;
use App\Jobs\SendPushNotification;
use Illuminate\Support\Facades\Mail;
use App\Models\MechanicCompanyDetail;
use App\Models\Notification;
use App\Models\Quotation;
use App\Models\RequestForQuotation;
use App\Models\Review;
use App\Repositories\Admin\NotificationRepository;

class ReviewObserver
{
    /**
     * Handle the review "created" event.
     *
     * @param  \App\Models\Review $review
     * @return void
     */
    public function created(Review $review)
    {

        $notificationRepository = app()->make(NotificationRepository::class);
        $quotation = Quotation::where('id', $review->quotation_id)->first();
        $request = RequestForQuotation::where('id', $quotation->quotation_request_id)->first();

        $mechanic = $quotation->user;// Mechanic ID
        $mechanic_quotations = $mechanic->quotations;
        foreach ($mechanic_quotations as $rating) {
            $value = $rating->reviews;
            $avg_rating = $value->avg('rating');
        }

        $avg = MechanicCompanyDetail::where('mechanic_id', $mechanic->id)->first();
        $avg->avg_rating = $avg_rating;
        $avg->save();


        $email = $quotation->user->email;
        $name = $quotation->user->name;
        $subject = "New review";

        Mail::send('email.rfqUpdates',
            [
                'name'    => $name,
                'message' => 'You have new Review. <a href="' . url("admin/requestForQuotations/" . $request->id) . '" target="_blank">click here</a>'
            ],
            function ($mail) use ($email, $name, $subject) {
                $mail->from(getenv('MAIL_FROM_ADDRESS'), getenv('APP_NAME'));
                $mail->to($email, $name);
                $mail->subject($subject);
            });


        $notification = $notificationRepository->saveRecord([
            'url'         => 'admin/requestForQuotations/' . $request->id,
            'ref_id'      => $request->id,
            'message'     => Notification::$ACTION_TYPE_MESSAGE[Notification::ACTION_TYPE_NEW_REVIEW],
            'action_type' => Notification::ACTION_TYPE_NEW_REVIEW
        ]);
        $notification->users()->attach($quotation->mechanic_id, ['status' => Notification::DELIVERY_STATUS_DELIVERED]);

//        event(new NewReviewEvent($quotation->mechanic_id, $request, $notification));

        $message = $notification->message;
        $deviceData = $quotation->user->devices->toArray();
//        var_dump($deviceData);exit();

        $review_send = new SendPushNotification($message, $deviceData, '');
        dispatch($review_send);
    }

    /**
     * Handle the review "updated" event.
     *
     * @param  \App\Models\Review $review
     * @return void
     */
    public function updated(Review $review)
    {
        //
    }

    /**
     * Handle the review "deleted" event.
     *
     * @param  \App\Models\Review $review
     * @return void
     */
    public function deleted(Review $review)
    {
        //
    }

    /**
     * Handle the review "restored" event.
     *
     * @param  \App\Models\Review $review
     * @return void
     */
    public function restored(Review $review)
    {
        //
    }

    /**
     * Handle the review "force deleted" event.
     *
     * @param  \App\Models\Review $review
     * @return void
     */
    public function forceDeleted(Review $review)
    {
        //
    }
}
