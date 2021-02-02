<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property integer id
 * @property integer car_id
 * @property integer area_id
 * @property integer quotation_count
 * @property integer service_id
 * @property integer with_in_time
 * @property integer status
 * @property string created_at
 * @property string updated_at
 * @property string deleted_at
 *
 * @property string status_css
 * @property string status_text
 *
 * @property MyCar car
 * @property Area area
 * @property Service service
 * @property RequestForQuotationMedia media
 * @property Quotation quotations
 * @property User pendingQuotationUsers
 * @property RequestForQuotationPending pendingQuotation
 *
 * @SWG\Definition(
 *      definition="RequestForQuotation",
 *      required={"car_id", "area_id", "service_id", "with_in_time"},
 *      @SWG\Property(
 *          property="car_id",
 *          description="car_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="area_id",
 *          description="area_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="service_id",
 *          description="service_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="notes",
 *          description="notes to mechanic",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="images",
 *          description="Images",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="with_in_time",
 *          description="with_in_time, 10=Urgent, 20=This Week, 30=Two Week",
 *          type="integer",
 *          default=10
 *      )
 * )
 */
class RequestForQuotation extends Model
{
    use SoftDeletes;

    public $table = 'quotation_requests';
    protected $dates = ['deleted_at'];

    /**
     * Status Enum
     */
    const DURATION_URGENT = 10;
    const DURATION_THIS_WEEK = 20;
    const DURATION_TWO_WEEK = 30;

    public static $DURATIONS = [
        self::DURATION_URGENT    => 'Urgent',
        self::DURATION_THIS_WEEK => 'This Week',
        self::DURATION_TWO_WEEK  => 'Two Week'
    ];

    const STATUS_NEW = 0;
    const STATUS_PENDING = 10;
    const STATUS_PROGRESS = 20;
    const STATUS_COMPLETE = 30;

    public static $STATUS_TEXT = [
        self::STATUS_NEW      => 'New',
        self::STATUS_PENDING  => 'Pending',
        self::STATUS_PROGRESS => 'In Progress',
        self::STATUS_COMPLETE => 'Complete',
    ];
    public static $STATUS_CSS = [
        self::STATUS_NEW      => 'primary',
        self::STATUS_PENDING  => 'warning',
        self::STATUS_PROGRESS => 'info',
        self::STATUS_COMPLETE => 'success',
    ];

    public $fillable = [
        'car_id',
        'area_id',
        'service_id',
        'notes',
        'with_in_time',
        'media',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'with_in_time' => 'integer'
    ];

    /**
     * The attributes that should have default values predefined.
     *
     * @var array
     */
    protected $attributes = [
        'status' => self::STATUS_PENDING,
    ];

    /**
     * The objects that should be append to toArray.
     *
     * @var array
     */
    protected $with = [
        'car',
//        'car_withTrashed',
        'service',
        'area',
        'media',
        'quotations'
    ];

    /**
     * The attributes that should be append to toArray.
     *
     * @var array
     */
    protected $appends = [
        'quotation_count',
        'rfq_id',
        'status_text',
        'duration'
    ];

    /**
     * The attributes that should be visible in toArray.
     *
     * @var array
     */
    protected $visible = [
        'id',
        'rfq_id',
        'car',
//        'car_withTrashed',
        'notes',
        'service',
        'quotation_count',
        'status',
        'status_text',
        'duration',
        'quotations',
        'area',
        'media',
        'created_at'
    ];

    /**
     * Validation create rules
     *
     * @var array
     */
    public static $rules = [
        'car_id'       => 'required|exists:driver_cars,id',
        'area_id'      => 'required|exists:areas,id',
        'service_id'   => 'required|exists:services,id',
        'with_in_time' => 'required|in:10,20,30'
    ];

    /**
     * Validation update rules
     *
     * @var array
     */
    public static $update_rules = [
        'car_id'       => 'required|exists:driver_cars,id',
        'area_id'      => 'required|exists:areas,id',
        'service_id'   => 'required|exists:services,id',
        'with_in_time' => 'required|in:10,20,30'
    ];

    /**
     * Validation api rules
     *
     * @var array
     */
    public static $api_rules = [
        'car_id'       => 'required|exists:driver_cars,id',
        'area_id'      => 'required|exists:areas,id',
        'service_id'   => 'required|exists:services,id',
        'with_in_time' => 'required|in:10,20,30'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
//    public function car()
//    {
//        return $this->belongsTo(MyCar::class,'car_id');
//    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function car()
    {
        return $this->belongsTo(MyCar::class,'car_id')->withTrashed();
    }



    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function media()
    {
        return $this->hasMany(RequestForQuotationMedia::class, 'quotation_request_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function quotations()
    {
        return $this->hasMany(Quotation::class, 'quotation_request_id')->orderBy('status', 'asc');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function pendingQuotation()
    {
        return $this->hasMany(RequestForQuotationPending::class, 'quotation_request_id');
        //return $this->belongsToMany(User::class, 'quotation_request_pending', 'quotation_request_id', 'mechanic_id');
    }

    /**
     * @return string
     */
    public function getRfqIdAttribute()
    {
        // convert white spaces & underscore in dashes
        $app_name = preg_replace("/[\s_]/", "-", config('app.name'));
        return $app_name . "-" . config('constants.id.rfq') . "-" . $this->id;
    }

    /**
     * @return mixed
     */
    public function getDurationAttribute()
    {
        return self::$DURATIONS[$this->with_in_time];
    }

    /**
     * @return mixed
     */
    public function getStatusTextAttribute()
    {
        return self::$STATUS_TEXT[$this->status];
    }

    /**
     * @return mixed
     */
    public function getStatusCssAttribute()
    {
        return self::$STATUS_CSS[$this->status];
    }

    /**
     * @return mixed
     */
    public function getQuotationCountAttribute()
    {
        return $this->quotations->count();
    }
}