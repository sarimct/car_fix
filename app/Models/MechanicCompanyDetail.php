<?php

namespace App\Models;

use Iatstuti\Database\Support\CascadeSoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use Tymon\JWTAuth\Contracts\JWTSubject;

/**
 * @property integer id
 * @property integer mechanic_id
 * @property string name
 * @property string phone
 * @property string address
 * @property string image
 * @property string image_url
 * @property integer email_updates
 * @property string created_at
 * @property string updated_at
 * @property string deleted_at
 *
 * @property User user
 */
class MechanicCompanyDetail extends Model
{
    use SoftDeletes;
    public $table = 'mechanic_company_details';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'mechanic_id', 'name', 'phone', 'address', 'image'
    ];

    public static $rules = [];

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
        'image_url'
    ];

    /**
     * The attributes that should be visible in toArray.
     *
     * @var array
     */
    protected $visible = [
        'id',
        'name',
        'phone',
        'address',
        'image',
        'image_url',
        'avg_rating',
    ];

    /**
     * Relations Start Here
     */
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relations End Here
     *
     * Enumerators Starts Here
     */
    public function getImageUrlAttribute()
    {
        return ($this->image) ? route('api.resize', ['img' => $this->image]) : route('api.resize', ['img' => 'users/user.png']);
    }
}