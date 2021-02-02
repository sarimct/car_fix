<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

/**
 * Class NotificationUser
 * @package App\Models
 */
class NotificationUser extends Model
{
    public $table = 'notification_users';
    public $timestamps = false;
    
    public $fillable = [
        'notification_id',
        'user_id',
        'status'
    ];

    const STATUS_SENT = 10;
    const STATUS_DELIVERED = 20;
    const STATUS_READ = 30;

    public static $STATUS_TEXT = [
        self::STATUS_SENT      => 'Sent',
        self::STATUS_DELIVERED => 'Delivered',
        self::STATUS_READ      => 'Read',
    ];

    /**
     * The attributes that should have default values predefined.
     *
     * @var array
     */
    protected $attributes = [
        'status' => self::STATUS_DELIVERED,
    ];
    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [];
}