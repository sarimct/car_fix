<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Config;

/**
 * @property integer id
 * @property integer quotation_request_id
 * @property integer mechanic_id
 * @property number amount
 * @property string message
 * @property string created_at
 * @property string updated_at
 * @property string deleted_at
 *
 * @property RequestForQuotation quotation_request
 * @property User user
 * @property Review reviews
 *
 * @property string status_text
 * @property string quotation_id
 * @property mixed $mechanic
 *
 * @SWG\Definition(
 *      definition="Quotation",
 *      required={"quotation_request_id", "amount", "message"},
 *      @SWG\Property(
 *          property="mechanic_id",
 *          description="mechanic_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="quotation_request_id",
 *          description="quotation_request_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="amount",
 *          description="amount",
 *          type="number",
 *          format="float"
 *      ),
 *      @SWG\Property(
 *          property="message",
 *          description="message",
 *          type="string"
 *      )
 * )
 */
class Quotation extends Model
{
    use SoftDeletes;

    public $table = 'quotations';
    protected $dates = ['deleted_at'];

    const STATUS_PENDING = 10;
    const STATUS_ACCEPTED = 20;
    const STATUS_REJECTED = 30;

    public static $STATUS_TEXT = [
        self::STATUS_PENDING  => 'Pending',
        self::STATUS_ACCEPTED => 'Accepted',
        self::STATUS_REJECTED => 'Rejected',
    ];

    public $fillable = [
        'mechanic_id',
        'quotation_request_id',
        'amount',
        'message',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'amount'  => 'float',
        'message' => 'string'
    ];

    /**
     * The objects that should be append to toArray.
     *
     * @var array
     */
    protected $with = [
        'quotation_request',
        'reviews',
        'mechanic'
    ];

    /**
     * The attributes that should be append to toArray.
     *
     * @var array
     */
    protected $appends = [
//        'mechanic'
    ];

    /**
     * The attributes that should be visible in toArray.
     *
     * @var array
     */
    protected $visible = [
        'id',
        'mechanic_id',
        'quotation_request_id',
        'amount',
        'message',
        'status',
        'reviews',
        'mechanic'
    ];

    /**
     * Validation create rules
     *
     * @var array
     */
    public static $rules = [
        'amount'  => 'required',
        'message' => 'required'
    ];

    /**
     * Validation update rules
     *
     * @var array
     */
    public static $update_rules = [
        'amount'  => 'required',
        'message' => 'required'
    ];

    /**
     * Validation api rules
     *
     * @var array
     */
    public static $api_rules = [
        'request_id' => 'required',
        'amount'     => 'required',
        'message'    => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function quotation_request()
    {
        return $this->belongsTo(RequestForQuotation::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'mechanic_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reviews()
    {
        return $this->hasMany(Review::class, 'quotation_id');
    }

    /**
     * @return mixed
     */
    public function getStatusTextAttribute()
    {
        return self::$STATUS_TEXT[$this->status];
    }

    /**
     * @return string
     */
    public function getQuotationIdAttribute()
    {
        return config('app.name') . "-" . config('constants.id.quote') . "-" . $this->id;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function mechanic()
    {
        return $this->belongsTo(User::class);
    }

}