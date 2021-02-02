<?php

namespace App\Models;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property integer id
 * @property integer parent_id
 * @property string name
 * @property string created_at
 * @property string updated_at
 * @property string deleted_at
 *
 * @property Service child_services
 * @property Service parent_service
 * @property MechanicService mechanicServices
 * @property RequestForQuotation requests_for_quotation
 *
 * @SWG\Definition(
 *      definition="Service",
 *      required={"parent_id", "name"},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="parent_id",
 *          description="parent_id",
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
class Service extends Model
{
    use SoftDeletes, Translatable;

    public $table = 'services';

    protected $dates = ['deleted_at'];
    public $translatedAttributes = ['name'];

    public $fillable = [
        'parent_id',
        'name'
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
    protected $with = [
        'parentService'
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
        'parent_id',
        'name',
        'parentService'
    ];

    /**
     * Validation create rules
     *
     * @var array
     */
    public static $rules = [
        'parent_id' => 'required',
        'name'      => 'required'
    ];

    /**
     * Validation update rules
     *
     * @var array
     */
    public static $update_rules = [
        'parent_id' => 'required',
        'name'      => 'required'
    ];

    /**
     * Validation api rules
     *
     * @var array
     */
    public static $api_rules = [
        'parent_id' => 'required',
        'name'      => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function childServices()
    {
        return $this->hasMany(Service::class, 'parent_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parentService()
    {
        return $this->belongsTo(Service::class, 'parent_id', 'id');
    }

    public function mechanicServices()
    {
        return $this->hasMany(MechanicService::class); // service.id = mechanic_service.service_id
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function requestsForQuotation()
    {
        return $this->hasMany(RequestForQuotation::class);
    }

    public function mechanics()
    {
        return $this->belongsToMany(User::class, 'mechanic_services', 'service_id', 'mechanic_id');
    }
}