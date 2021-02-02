<?php

namespace App\Repositories\Admin;

use App\Models\Thread;
use App\Models\ThreadMessageStatus;
use Illuminate\Support\Facades\Auth;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ThreadRepository
 * @package App\Repositories\Admin
 * @version April 2, 2018, 9:11 am UTC
 *
 * @method Thread findWithoutFail($id, $columns = ['*'])
 * @method Thread find($id, $columns = ['*'])
 * @method Thread first($columns = ['*'])
 */
class ThreadRepository extends BaseRepository
{
    protected $threadUserRepository, $threadMessageRepository;

    /**
     * Returns specified model class name.
     *
     * @return string
     */
    public function model()
    {
        return Thread::class;
    }

    public function getThreadId($sender_id, $receiver_id)
    {
        return $this->model
            ->select('threads.id')
            ->join('thread_users', 'threads.id', 'thread_users.thread_id')
            ->whereRaw('(created_by = ' . $sender_id . ' AND thread_users.`user_id` = ' . $receiver_id . ') OR (created_by = ' . $receiver_id . ' AND thread_users.`user_id` = ' . $sender_id . ')')
            ->get()->first();
    }

    public function getThreadsOfUser($user_id)
    {
        return $this->model
            ->select('threads.id', 'last_message_id')
            ->join('thread_users', 'threads.id', 'thread_users.thread_id')
            ->where('thread_users.user_id', $user_id)
            //->whereRaw('(created_by = ' . $sender_id . ' AND thread_users.`user_id` = ' . $receiver_id . ') OR (created_by = ' . $receiver_id . ' AND thread_users.`user_id` = ' . $sender_id . ')')
            ->get();
    }

    public function createRecord($request, $threadUserRepo, $threadMessageRepo)
    {
        $this->threadUserRepository = $threadUserRepo;
        $this->threadMessageRepository = $threadMessageRepo;
        $user = Auth::user();
        $input = $request->all();
        $input['sender_id'] = $user->id;

        if (isset($input['thread_id'])) {
            $threads = $this->findWithoutFail($input['thread_id']);
        } else {
            $threads = $this->getThreadId($input['sender_id'], $input['receiver_id']);
        }

        if (empty($threads)) {
            $new_thread = $this->create([
                'created_by' => $user->id,
                'user_id'    => $user->id,
            ]);
            $this->threadUserRepository->create([
                'user_id'   => $input['sender_id'],
                'thread_id' => $new_thread->id
            ]);
            $this->threadUserRepository->create([
                'user_id'   => $input['receiver_id'],
                'thread_id' => $new_thread->id
            ]);
            $threads = $new_thread;
        }

        $messages = $this->threadMessageRepository->create([
            'thread_id' => $threads->id,
            'sender_id' => $user->id,
            'message'   => $input['message']
        ]);
        $thread_data = $this->update(['last_message_id' => $messages->id], $threads->id);

        ThreadMessageStatus::create([
            'message_id'     => $messages->id,
            'user_id'        => $user->id,
            'message_status' => 20,
            'status'         => 1,
        ]);
//        if ($thread_data->receiver_details->setting->notification) {
        if (1 == 1) {
            $notification_message = [
                'title' => $user->name . ' sends you a new message.',
                'body'  => $input['message']
            ];

            //$user_data = $this->udeviceRepository->findWhere(['user_id' => $input['receiver_id']])->all();
            //NotificationsHelper::sendPushNotifications($notification_message, $user_data);
        }
        return $thread_data;
    }
}
