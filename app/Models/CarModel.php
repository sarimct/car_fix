<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 *
 * @property integer id
 * @property integer car_maker_id
 * @property string title
 * @property string created_at
 * @property string updated_at
 * @property string deleted_at
 *
 * @property CarMaker makers
 *
 * @SWG\Definition(
 *      definition="CarModel",
 *      required={"car_maker_id", "title"},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="car_maker_id",
 *          description="car_maker_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="title",
 *          description="title",
 *          type="string"
 *      )
 * )
 */
class CarModel extends Model
{
    use SoftDeletes;

    public $table = 'car_models';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'car_maker_id',
        'title'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string'
    ];

    /**
     * The objects that should be append to toArray.
     *
     * @var array
     */
    protected $with = [
        'maker'
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
        'title',
        'maker'
    ];

    /**
     * Validation create rules
     *
     * @var array
     */
    public static $rules = [
        'car_maker_id' => 'required',
        'title'        => 'required'
    ];

    /**
     * Validation update rules
     *
     * @var array
     */
    public static $update_rules = [
        'car_maker_id' => 'required',
        'title'        => 'required'
    ];

    /**
     * Validation api rules
     *
     * @var array
     */
    public static $api_rules = [
        'car_maker_id' => 'required',
        'title'        => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function drivers()
    {
        return $this->belongsToMany(User::class, 'driver_cars')->withPivot('registration_no', 'year');
    }

    public function maker()
    {
        return $this->belongsTo(CarMaker::class, 'car_maker_id');
    }

}
