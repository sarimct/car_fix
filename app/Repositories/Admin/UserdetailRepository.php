<?php

namespace App\Repositories\Admin;

use App\Models\UserDetail;
use Illuminate\Support\Facades\Storage;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class UserdetailRepository
 * @package App\Repositories\Admin
 * @version April 2, 2018, 9:11 am UTC
 *
 * @method UserDetail findWithoutFail($id, $columns = ['*'])
 * @method UserDetail find($id, $columns = ['*'])
 * @method UserDetail first($columns = ['*'])
 */
class UserdetailRepository extends BaseRepository
{
    /**
     * Configure the Model
     **/
    public function model()
    {
        return UserDetail::class;
    }

    public function updateRecord($request, $user)
    {
        $data = $request->all();
        if(isset($data['phone'])){
            $user_details['phone'] = $data['phone'];
        }
        if(isset($data['address'])){
            $user_details['address'] = $data['address'];
        }
        if(isset($data['area_id'])){
            $user_details['area_id'] = $data['area_id'];
        }
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $user_details['image'] = Storage::putFile('users', $file);
        }

        if(isset($user_details)){
            $user = $this->update($user_details, $user->details->id);
        }
        return $user;
    }
}