<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class CompleteJobEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $userID;
    public $notification;

    /**
     * Create a new event instance.
     *
     * @param $userId
     * @param $notification
     */
    public function __construct($userId, $notification)
    {
        $this->userID = $userId;
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
                'notification' => $this->notification,
                /*'job'          => $this->job,
                'url'  => Url::route('view-job'),
                'text' => __('new_job')*/
            ]
        ];
    }
}
