<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ThreadMessageStatus
 * @package App\Models
 *
 * @property integer id
 * @property integer message_status
 * @property integer status
 * @property string created_at
 * @property string updated_at
 * @property string deleted_at
 *
 * @property ThreadMessage message
 * @property User user
 *
 */
class ThreadMessageStatus extends Model
{
    use SoftDeletes;

    public $table = 'thread_message_status';

    public $fillable = [
        'message_id', 'user_id', 'message_status', 'status'
    ];

    const MESSAGE_PENDING = 10;
    const MESSAGE_DELIVERED = 20;
    const MESSAGE_READ = 30;

    public static $MESSAGE_STATUS_TEXT = [
        self::MESSAGE_PENDING   => 'Pending',
        self::MESSAGE_DELIVERED => 'Delivered',
        self::MESSAGE_READ      => 'Read'
    ];

    protected $visible = [
        'message_status',
        'message_status_text',
    ];

    protected $appends = [
        'message_status_text',
    ];

    public function message()
    {
        return $this->belongsTo(ThreadMessage::class, 'message_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getMessageStatusTextAttribute()
    {
        return self::$MESSAGE_STATUS_TEXT[$this->message_status];
    }
}