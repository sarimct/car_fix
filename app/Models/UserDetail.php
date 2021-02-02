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
 * @property integer user_id
 * @property string first_name
 * @property string last_name
 * @property string country_code
 * @property string phone
 * @property string address
 * @property string image
 * @property string image_url
 * @property integer area_id
 * @property integer email_updates
 * @property string created_at
 * @property string updated_at
 * @property string deleted_at
 *
 * @property User user
 *
 * )
 */
class UserDetail extends Model
{
    use SoftDeletes;
    public $table = 'user_details';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'first_name', 'last_name', 'country_code', 'phone', 'address', 'image', 'area_id', 'email_updates'
    ];

    public static $rules = [];

    /**
     * Email Updates Enum
     */
    const EMAIL_UPDATES_ACTIVE = 1;
    const EMAIL_UPDATES_INACTIVE = 0;
    public static $EMAIL_UPDATES = [
        self::EMAIL_UPDATES_ACTIVE   => 'Active',
        self::EMAIL_UPDATES_INACTIVE => 'Inactive',
    ];


    /**
     * The objects that should be append to toArray.
     *
     * @var array
     */
    protected $with = [
        'area'
    ];

    /**
     * The attributes that should be append to toArray.
     *
     * @var array
     */
    protected $appends = [
        'image_url',
        'email_updates_text'
    ];

    /**
     * The attributes that should be visible in toArray.
     *
     * @var array
     */
    protected $visible = [
        'id',
//        'first_name',
//        'last_name',
        'country_code',
        'phone',
        'address',
        'image',
        'image_url',
        'area',
        'email_updates_text',
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

    public function area()
    {
        return $this->belongsTo(Area::class);
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

    public function getEmailUpdatesTextAttribute()
    {
        return self::$EMAIL_UPDATES[$this->email_updates];
    }
}
