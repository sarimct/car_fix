<?php

namespace App\Repositories\Admin;

use App\Models\MechanicCompanyDetail;
use Illuminate\Support\Facades\Storage;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class UserdetailRepository
 * @package App\Repositories\Admin
 * @version April 2, 2018, 9:11 am UTC
 *
 * @method MechanicCompanyDetail findWithoutFail($id, $columns = ['*'])
 * @method MechanicCompanyDetail find($id, $columns = ['*'])
 * @method MechanicCompanyDetail first($columns = ['*'])
 */
class MechanicCompanyDetailRepository extends BaseRepository
{
    /**
     * Configure the Model
     **/
    public function model()
    {
        return MechanicCompanyDetail::class;
    }

    public function updateRecord($request, $user)
    {
        $data = $request->all();

        if(isset($data['company_name'])){
            $mechanic_company['name'] = $data['company_name'];
        }
        if(isset($data['company_phone'])){
            $mechanic_company['phone'] = $data['company_phone'];
        }
        if(isset($data['company_address'])){
            $mechanic_company['address'] = $data['company_address'];
        }

        if (isset($data['company_image'])) {
            $file = $request->file('company_image');
            $mechanic_company['image'] = Storage::putFile('company', $file);
        }

        if(isset($mechanic_company)){
            $user = $this->update($mechanic_company, $user->company->id);
        }

        return $user;
    }
}