<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

/**
 * Class Thread
 * @package App\Models
 *
 * @property integer id
 * @property integer last_message_id
 * @property integer type
 * @property integer created_by
 * @property integer status
 * @property string created_at
 * @property string updated_at
 * @property string deleted_at
 *
 * @property User users
 * @property ThreadMessage messages
 */
class Thread extends Model
{
    use SoftDeletes;

    public $table = 'threads';

    public $fillable = [
        'last_message_id', 'type', 'created_by', 'status'
    ];

    protected $visible = [
        'id',
        'last_message',
        /*'last_message_by',
        'last_message_at',
        'last_message_image',*/
        'receiver_details',
//        'messages',
        'thread_messages',
    ];

    protected $appends = [
        /*'last_message_by',
        'last_message_at',
        'last_message_image',*/
        'last_message',
        'receiver_details',
        'messages',
        'thread_messages',
    ];

    protected $with = [
        'messages',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'thread_users');
    }

    public function messages()
    {
        return $this->hasMany(ThreadMessage::class);
    }

    public function getThreadMessagesAttribute()
    {
        return $this->messages()->orderBy('created_at', 'desc')->get();
    }

    public function getReceiverDetailsAttribute()
    {
        $model = $this->users()->where('users.id', '!=', Auth::user()->id)->first();
        return $model ? $model : null;
    }

    public function getLastMessageAttribute()
    {
        return (!empty($this->last_message_id)) ? $this->messages()->where('id', $this->last_message_id)->get()->first()['message'] : '';
    }

    public function getLastMessageAtAttribute()
    {
        return (!empty($this->last_message_id)) ? $this->messages()->where('id', $this->last_message_id)->get()->first()->toArray()['created_at'] : '';
    }

    public function getLastMessageByAttribute()
    {
        if (!empty($this->last_message_id)) {
            $message = $this->messages()->where('id', $this->last_message_id)->get()->first();
            $return = $message->user->name;
        } else {
            $return = '';
        }

        return $return;
    }

    public function getLastMessageImageAttribute()
    {
        if (!empty($this->last_message_id)) {
            $message = $this->messages()->where('id', $this->last_message_id)->get()->first();
            $return = $message->user->details->image_url;
        } else {
            $return = '';
        }

        return $return;
    }
}