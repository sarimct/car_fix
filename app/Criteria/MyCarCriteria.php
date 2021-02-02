<?php
/**
 * Created by PhpStorm.
 * User: mohsinahmad
 * Date: 18-Jul-18
 * Time: 2:00 PM
 */

namespace App\Criteria;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

class MyCarCriteria implements CriteriaInterface
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function apply($model, RepositoryInterface $repository)
    {
        $user = Auth::user();
        if ($user->hasRole('driver')) {
                return $model->where('driver_id', $user->id);
        }

        $reg_id = $this->request->get('reg_id', -1);

        if($reg_id != -1){
            $model = $model->where('registration_no', $reg_id);
        }

//        'driver_id','=',Auth::id()

//        print_r($model->toSql());exit();

        return $model;
    }

}