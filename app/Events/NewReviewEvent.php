<?php

namespace App\Events;

use App\Models\RequestForQuotation;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class NewReviewEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $userID;
    public $job;
    public $notification;

    /**
     * Create a new event instance.
     *
     * @param $userId
     * @param RequestForQuotation $job
     */
    public function __construct($userId, RequestForQuotation $job, $notification)
    {
        $this->userID = $userId;
        $this->job = $job;
        $this->notification = $notification;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('job-' . $this->userID);
    }


    public function broadcastWith()
    {
        return [
            'data' => [
                'job'          => $this->job,
                'notification' => $this->notification,
//                'url'  => Url::route('view-job'),
//                'text' => __('new_job')
            ]
        ];
    }
}
