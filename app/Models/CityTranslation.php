<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CityTranslation
 * @package App\Models
 *
 *
 * @property integer id
 * @property string deleted_at
 * @property string created_at
 * @property string updated_at
 */
class CityTranslation extends Model
{
    use SoftDeletes;
    public $table = 'city_translations';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'name',
        'locale',
        'city_id',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string'
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
        'id',
        'name',
        'created_at',
    ];

    /**
     * Validation create rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];

    /**
     * Validation update rules
     *
     * @var array
     */
    public static $update_rules = [
        'name' => 'required'
    ];

    /**
     * Validation api rules
     *
     * @var array
     */
    public static $api_rules = [
        'name' => 'required'
    ];

    public function city()
    {
        return $this->belongsTo(City::class,'city_id');
    }
}
