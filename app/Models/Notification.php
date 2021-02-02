<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property integer id
 * @property integer sender_id
 * @property integer ref_id
 * @property string action_type
 * @property string url
 * @property string message
 * @property integer status
 * @property string created_at
 * @property string updated_at
 * @property string deleted_at
 *
 * @property string users_csv
 * @property User users
 *
 * @SWG\Definition(
 *      definition="Notification",
 *      required={"sender_id", "url", "action_type", "ref_id", "message", "status"},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="sender_id",
 *          description="sender_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="url",
 *          description="url",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="action_type",
 *          description="action_type",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="ref_id",
 *          description="ref_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="message",
 *          description="message",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="status",
 *          description="status",
 *          type="boolean"
 *      )
 * )
 */
class Notification extends Model
{
    use SoftDeletes;

    public $table = 'notifications';
    protected $dates = ['deleted_at'];

    const ACTION_TYPE_NEW_JOB = 10;                     //receive by mechanic
    const ACTION_TYPE_QUOTATION_NEW = 20;               //receive by driver
    const ACTION_TYPE_QUOTATION_ACCEPTED = 30;          //receive by mechanic
    const ACTION_TYPE_QUOTATION_REJECTED = 40;          //receive by mechanic
    const ACTION_TYPE_JOB_COMPLETE = 50;                //receive by driver
    const ACTION_TYPE_NEW_REVIEW = 60;                  //receive by mechanic
    const ACTION_TYPE_NEW_MESSAGE = 70;                 //receive by both

    public static $ACTION_TYPE_MESSAGE = [
        self::ACTION_TYPE_NEW_JOB            => 'You have a new job.',
        self::ACTION_TYPE_QUOTATION_NEW      => 'You have a new quotation.',
        self::ACTION_TYPE_QUOTATION_ACCEPTED => 'Your quotation has been approved.',
        self::ACTION_TYPE_QUOTATION_REJECTED => 'Your quotation has been rejected.',
        self::ACTION_TYPE_JOB_COMPLETE       => 'Your job has been completed.',
        self::ACTION_TYPE_NEW_REVIEW         => 'You have received a new review.',
        self::ACTION_TYPE_NEW_MESSAGE        => 'You have a new message.'
    ];

    const DELIVERY_STATUS_SENT = 10;
    const DELIVERY_STATUS_DELIVERED = 20;
    const DELIVERY_STATUS_READ = 30;

    public static $DELIVERY_STATUS = [
        self::DELIVERY_STATUS_SENT      => 'Sent',
        self::DELIVERY_STATUS_DELIVERED => 'Delivered',
        self::DELIVERY_STATUS_READ      => 'Read'
    ];
    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 1;

    public static $STATUS = [
        self::STATUS_INACTIVE => 'In Active',
        self::STATUS_ACTIVE   => 'Active'
    ];

    public $fillable = [
        'sender_id',
        'url',
        'action_type',
        'ref_id',
        'message',
        'status'
    ];

    /**
     * The attributes that should have default values predefined.
     *
     * @var array
     */
    protected $attributes = [
        'status' => self::STATUS_ACTIVE,
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'url'         => 'string',
        'action_type' => 'string',
        'message'     => 'string',
        'status'      => 'boolean'
    ];

    /**
     * The objects that should be append to toArray.
     *
     * @var array
     */
    protected $with = [];

    /**
     * The attributes that should be append to toArray.
     *
     * @var array
     */
    protected $appends = [];

    /**
     * The attributes that should be visible in toArray.
     *
     * @var array
     */
    protected $visible = [];

    /**
     * Validation create rules
     *
     * @var array
     */
    public static $rules = [
        'action_type' => 'required',
        'message'     => 'required',
    ];

    /**
     * Validation update rules
     *
     * @var array
     */
    public static $update_rules = [
        'action_type' => 'required',
        'message'     => 'required',
    ];

    /**
     * Validation api rules
     *
     * @var array
     */
    public static $api_rules = [
        'action_type' => 'required',
        'message'     => 'required'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'notification_users')->withPivot('status');
    }

    public function getUsersCsvAttribute()
    {
        return implode(",", $this->users->pluck('name')->all());
    }
}
