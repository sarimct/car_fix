<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="JobHistory",
 *      required={"car_id", "area_id", "service_id", "with_in_time", "notes"},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
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
 *          property="with_in_time",
 *          description="with_in_time",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="notes",
 *          description="notes",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="status",
 *          description="status",
 *          type="boolean"
 *      )
 * )
 */
class JobHistory extends Model
{
    use SoftDeletes;

    public $table = 'quotation_requests';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'car_id',
        'area_id',
        'service_id',
        'with_in_time',
        'notes'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'with_in_time' => 'boolean',
        'notes' => 'string',
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
    protected $visible = [];

    /**
     * Validation create rules
     *
     * @var array
     */
    public static $rules = [
        'car_id' => 'required',
        'area_id' => 'required',
        'service_id' => 'required',
        'with_in_time' => 'required',
        'notes' => 'required'
    ];

    /**
     * Validation update rules
     *
     * @var array
     */
    public static $update_rules = [
        'car_id' => 'required',
        'area_id' => 'required',
        'service_id' => 'required',
        'with_in_time' => 'required',
        'notes' => 'required'
    ];

    /**
     * Validation api rules
     *
     * @var array
     */
    public static $api_rules = [
        'car_id' => 'required',
        'area_id' => 'required',
        'service_id' => 'required',
        'with_in_time' => 'required',
        'notes' => 'required'
    ];

    
}
