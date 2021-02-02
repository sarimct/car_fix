<?php

namespace App\Models;

use App\Models\Service;
use Iatstuti\Database\Support\CascadeSoftDeletes;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use Tymon\JWTAuth\Contracts\JWTSubject;

/**
 * @property integer id
 * @property string name
 * @property string email
 * @property string password
 * @property string created_at
 * @property string updated_at
 * @property string deleted_at
 *
 * @property Role roles
 * @property UserDetail details
 * @property UserDevice devices
 * @property MechanicCompanyDetail company
 * @property CarModel cars
 * @property Service services
 * @property CarMaker mechanicMakers
 * @property RequestForQuotationPending pendingQuotations
 *
 * @SWG\Definition(
 *      definition="User",
 *      required={"name", "email", "password"},
 *      @SWG\Property(
 *          property="name",
 *          description="user name",
 *          type="string",
 *      ),
 *      @SWG\Property(
 *          property="phone",
 *          description="user phone number",
 *          type="string",
 *      ),
 *      @SWG\Property(
 *          property="address",
 *          description="user address",
 *          type="string",
 *      ),
 *      @SWG\Property(
 *          property="area_id",
 *          description="user area id",
 *          type="string",
 *      ),
 *      @SWG\Property(
 *          property="image",
 *          description="user image",
 *          type="string",
 *      ),
 *      @SWG\Property(
 *          property="password",
 *          description="user password",
 *          type="string",
 *      ),
 *      @SWG\Property(
 *          property="password_confirmation",
 *          description="password confirmation",
 *          type="string",
 *      ),
 *      @SWG\Property(
 *          property="company_name",
 *          description="company name",
 *          type="string",
 *      ),
 *      @SWG\Property(
 *          property="company_phone",
 *          description="company phone",
 *          type="string",
 *      ),
 *      @SWG\Property(
 *          property="company_address",
 *          description="company address",
 *          type="string",
 *      ),
 *      @SWG\Property(
 *          property="company_image",
 *          description="company logo",
 *          type="string",
 *      ),
 *      @SWG\Property(
 *          property="push_notification",
 *          description="push notification",
 *          type="integer",
 *      ),
 *      @SWG\Property(
 *          property="device_token",
 *          description="device token",
 *          type="string",
 *      ),
 *     @SWG\Property(
 *          property="device_type",
 *          description="device type",
 *          type="string",
 *      )
 * )
 */
class User extends Authenticatable implements JWTSubject
{
    use SoftDeletes {
        restore as private restoreA;
    }
    use EntrustUserTrait {
        restore as private restoreB;
    }

    use Notifiable, CascadeSoftDeletes;

    protected $cascadeDeletes = ['details', 'devices', 'company'];

    const USER_ROLE_MECHANIC = 4;
    const USER_ROLE_DRIVER = 5;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static $rules = [
        'name'          =>  'required',
        'phone'         =>  'required',
        'address'       =>  'required',
        'password'      =>  'confirmed|min:6'
    ];

    public static $api_rules = [
        'area_id'               => 'sometimes|exists:areas,id',
        'password'              => 'min:6',
        'password_confirmation' => 'same:password'
    ];

    /**
     * The objects that should be append to toArray.
     *
     * @var array
     */
    protected $with = [
        'details',
        'mechanicMakers',
        'company',
        'devices',
//        'quotations',
        'services'
    ];

    /**
     * The attributes that should be append to toArray.
     *
     * @var array
     */
    protected $appends = [
        'user_type'
    ];

    /**
     * The attributes that should be visible in toArray.
     *
     * @var array
     */
    protected $visible = [
        'id',
        'name',
        'email',
        'user_type',
        'details',
//        'devices',
        'mechanicMakers',
        'company',
//        'quotations',
        'services',
        'created_at',
    ];

    public function restore()
    {
        $this->restoreA();
        $this->restoreB();
    }

    public function getRolesCsvAttribute()
    {
        return implode(",", $this->roles->pluck('display_name')->all());
    }

    public function getUserTypeAttribute()
    {
        return $this->hasRole('mechanic') ? 'Mechanic' : ($this->hasRole('driver') ? 'Driver' : 'Admin');
    }

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function details()
    {
        return $this->hasOne(UserDetail::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany('App\Models\Role');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function devices()
    {
        return $this->hasMany(UserDevice::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function company()
    {
        return $this->hasOne(MechanicCompanyDetail::class, 'mechanic_id');
    }

    public function quotations()
    {
        return $this->hasMany(Quotation::class, 'mechanic_id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'user_id');
    }

    public function requestForQoutations()
    {
        return $this->hasManyThrough(RequestForQuotation::class, MyCar::class, 'driver_id', 'car_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function cars()
    {
        return $this->belongsToMany(CarModel::class, 'driver_cars', 'driver_id', 'model_id')->withPivot('registration_no', 'year');
    }

    public function notifications()
    {
        return $this->belongsToMany(Notification::class, 'notification_users')->withPivot('status')->orderBy('created_at', 'desc');
    }

    public function services()
    {
        return $this->belongsToMany(Service::class, 'mechanic_services', 'mechanic_id');
    }

    public function mechanicMakers()
    {
        return $this->belongsToMany(CarMaker::class, 'mechanic_makers', 'mechanic_id', 'maker_id');
    }

    public function pendingQuotations()
    {
        return $this->hasMany(RequestForQuotationPending::class, 'mechanic_id');
        //return $this->belongsToMany(RequestForQuotation::class, 'quotation_request_pending', 'mechanic_id');
    }

    public function userThreads()
    {
        return $this->hasMany(ThreadUser::class, 'user_id');
    }

}