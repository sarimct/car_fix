<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 *
 * @property integer id
 * @property integer model_id
 * @property string registration_no
 * @property string year
 * @property string created_at
 * @property string updated_at
 * @property string deleted_at
 *
 * @property User driver
 * @property CarModel car_model
 * @property RequestForQuotation requests_for_quotation
 *
 * @SWG\Definition(
 *      definition="MyCar",
 *      required={"model_id", "registration_no", "year"},
 *     @SWG\Property(
 *          property="driver_id",
 *          description="driver_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *     @SWG\Property(
 *          property="model_id",
 *          description="model_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="registration_no",
 *          description="registration_no",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="year",
 *          description="year",
 *          type="string"
 *      )
 * )
 */
class MyCar extends Model
{
    use SoftDeletes;

    public $table = 'driver_cars';
    protected $dates = ['deleted_at'];

    public $fillable = [
        'driver_id',
        'model_id',
        'registration_no',
        'year'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'registration_no' => 'string'
    ];

    /**
     * The objects that should be append to toArray.
     *
     * @var array
     */
    protected $with = [
        'carModel',
        'driver',
    ];

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
        'id',
        'driver_id',
        'model_id',
        'year',
        'registration_no',
        'driver',
        'carModel',
    ];

    /**
     * Validation create rules
     *
     * @var array
     */
    public static $rules = [
        'model_id'        => 'required',
        'registration_no' => 'required|unique:driver_cars,registration_no',
        'year'            => 'required'
    ];

    /**
     * Validation update rules
     *
     * @var array
     */
    public static $update_rules = [
        'model_id' => 'sometimes|integer'
    ];

    /**
     * Validation api rules
     *
     * @var array
     */
    public static $api_rules = [
        'model_id'        => 'required',
        'registration_no' => 'required',
        'year'            => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function driver()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function carModel()
    {
        return $this->belongsTo(CarModel::class, 'model_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function requestsForQuotation()
    {
        return $this->hasMany(RequestForQuotation::class,'car_id');
    }

    
}