<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="CarMaker",
 *      required={"title"},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
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
class CarMaker extends Model
{
    use SoftDeletes;

    public $table = 'car_makers';


    protected $dates = ['deleted_at'];


    public $fillable = [
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

    ];

    /**
     * The attributes that should be append to toArray.
     *
     * @var array
     */
    protected $appends = [

    ];

    /**
     * The attributes that should be visible in toArray.
     *
     * @var array
     */
    protected $visible = [
        'id',
        'title'
    ];

    /**
     * Validation create rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required'
    ];

    /**
     * Validation update rules
     *
     * @var array
     */
    public static $update_rules = [
        'title' => 'required'
    ];

    /**
     * Validation api rules
     *
     * @var array
     */
    public static $api_rules = [
        'title' => 'required'
    ];

    public function models()
    {
        return $this->hasMany(CarModel::class);
    }

    public function mechanics()
    {
        return $this->belongsToMany(User::class, 'mechanic_makers', 'mechanic_id','maker_id');
    }
}
