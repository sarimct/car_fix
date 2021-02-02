<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class MechanicService
 * @package App\Models
 *
 *
 * @property integer id
 * @property integer mechanic_id
 * @property integer service_id
 * @property integer status
 * @property string deleted_at
 * @property string created_at
 * @property string updated_at
 */
class MechanicService extends Model
{
    use SoftDeletes;
    public $table = 'mechanic_services';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'mechanic_id',
        'service_id',
        'status',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [

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
        'mechanic_id',
        'service_id',
        'status',
    ];

    /**
     * Validation create rules
     *
     * @var array
     */
    public static $rules = [
        'mechanic_id' => 'required',
        'service_id' => 'required'
    ];

    /**
     * Validation update rules
     *
     * @var array
     */
    public static $update_rules = [
        'mechanic_id' => 'required',
        'service_id' => 'required'
    ];

    /**
     * Validation api rules
     *
     * @var array
     */
    public static $api_rules = [
        'mechanic_id' => 'required',
        'service_id' => 'required'
    ];


    public function service(){
        return $this->belongsTo(Service::class);
    }
}
