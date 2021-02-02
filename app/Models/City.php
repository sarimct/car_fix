<?php

namespace App\Models;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property integer id
 * @property string created_at
 * @property string updated_at
 * @property string deleted_at
 *
 * @property Country country
 * @property Area areas
 *
 * @SWG\Definition(
 *      definition="City",
 *      required={"country_id", "name"},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="country_id",
 *          description="country_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="name",
 *          description="name",
 *          type="string"
 *      )
 * )
 */
class City extends Model
{
    use SoftDeletes, Translatable;

    public $table = 'cities';

    protected $dates = ['deleted_at'];
    public $translatedAttributes = ['name'];

    public $fillable = [
        'country_id',
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [];

    /**
     * The objects that should be append to toArray.
     *
     * @var array
     */
    protected $with = [
        'country'
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
        'name',
        'country'
    ];

    /**
     * Validation create rules
     *
     * @var array
     */
    public static $rules = [
        'country_id' => 'required',
    ];

    /**
     * Validation update rules
     *
     * @var array
     */
    public static $update_rules = [
        'country_id' => 'required',
    ];

    /**
     * Validation api rules
     *
     * @var array
     */
    public static $api_rules = [
        'country_id' => 'required',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function areas()
    {
        return $this->hasMany(Area::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}