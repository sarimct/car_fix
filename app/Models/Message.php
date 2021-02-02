<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property integer id
 * @property string created_at
 * @property string updated_at
 * @property string deleted_at
 *
 * @SWG\Definition(
 *      definition="Message",
 *      required={"created_by", "last_message_id", "type", "status"},
 *     @SWG\Property(
 *          property="thread_id",
 *          description="Provide thread id if thread exist",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="receiver_id",
 *          description="Receiver Id -- if thread doestn't exist",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="message",
 *          description="Message",
 *          type="string"
 *      )
 * )
 */
class Message extends Model
{
    use SoftDeletes;

    public $table = 'threads';
    protected $dates = ['deleted_at'];

    public $fillable = [
        'created_by',
        'last_message_id',
        'type',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'type'   => 'boolean',
        'status' => 'boolean'
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
    protected $visible = [

    ];

    /**
     * Validation create rules
     *
     * @var array
     */
    public static $rules = [
        'receiver_id' => 'required',
        'message'     => 'required',
//        'created_by'      => 'required',
//        'last_message_id' => 'required',
//        'type'            => 'required',
//        'status'          => 'required'
    ];

    /**
     * Validation update rules
     *
     * @var array
     */
    public static $update_rules = [
        'created_by'      => 'required',
        'last_message_id' => 'required',
        'type'            => 'required',
        'status'          => 'required'
    ];

    /**
     * Validation api rules
     *
     * @var array
     */
    public static $api_rules = [
        'receiver_id' => 'required',
        'message'     => 'required',
    ];
}
