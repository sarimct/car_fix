<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ThreadMessage
 * @package App\Models
 *
 *
 * @property integer id
 * @property integer thread_id
 * @property integer sender_id
 * @property string message
 * @property integer status
 * @property string created_at
 * @property string updated_at
 * @property string deleted_at
 *
 * @property Thread thread
 * @property User user
 * @property ThreadMessageStatus messageStatus
 */
class ThreadMessage extends Model
{
    use SoftDeletes;

    public $table = 'thread_messages';

    public $fillable = [
        'thread_id', 'sender_id', 'message', 'type', 'status'
    ];

    protected $visible = [
        'id',
        'sender_id',
        'message',
//        'messageStatus',
        'message_status_text',
        'created_at',
    ];

    protected $appends = [
        'message_status_text',
    ];

    protected $with = [
//        'messageStatus',
    ];

    public function thread()
    {
        return $this->belongsTo(Thread::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

    public function messageStatus()
    {
        return $this->hasOne(ThreadMessageStatus::class, 'message_id');
    }

    public function getMessageStatusTextAttribute()
    {
        return $this->messageStatus ? $this->messageStatus->message_status_text : 'Delivered';
    }
}