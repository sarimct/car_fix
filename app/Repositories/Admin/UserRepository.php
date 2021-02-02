<?php

namespace App\Repositories\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class UserRepository
 * @package App\Repositories\Admin
 * @version April 2, 2018, 9:11 am UTC
 *
 * @method User findWithoutFail($id, $columns = ['*'])
 * @method User find($id, $columns = ['*'])
 * @method User first($columns = ['*'])
 */
class UserRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'password',
        'remember_token'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return User::class;
    }

    public function attachRole($userId, $roleId)
    {
        $user = $this->findWithoutFail($userId);
        $user->roles()->attach($roleId);
        $user->save();
    }

    public function detachRole($userId, $roleId)
    {
        $user = $this->findWithoutFail($userId);
        $user->roles()->detach($roleId);
        $user->save();
    }

    public function getUserByEmail($email)
    {
        return $this->model->whereEmail($email)->first();
    }

    public function updateRecord($request, $user)
    {
        $user_data = $request->all();

            $data['name'] = $user_data['name'];

//        unset($user_data['email']);

        if (isset($user_data['password'])) {
            if ($request->has('password') && $request->get('password', null) === null) {
                unset($user_data['password']);
            } else {
                $data['password'] = Hash::make($user_data['password']);
            }
        }

        if(isset($data)){
            $user = $this->update($data, $user->id);
        }

        if (isset($user->mechanicMakers)) {
            $user->mechanicMakers()->sync($request->mechanicMakers);
        }

        if (isset($user->services)) {
            $user->services()->sync($request->services);
        }
//        $user->mechanicMakers()->sync(array_values($request->mechanicMakers));
//        $user->save();
        return $user;
    }
}