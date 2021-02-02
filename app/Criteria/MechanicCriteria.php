<?php
/**
 * Created by PhpStorm.
 * User: mohsinahmad
 * Date: 17-Jul-18
 * Time: 3:06 PM
 */

namespace App\Criteria;


use Illuminate\Http\Request;
use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

class MechanicCriteria implements CriteriaInterface
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function apply($model, RepositoryInterface $repository)
    {
        $model = $model->whereHas('company', function ($company) {
            return $company->orderBy('avg_rating');
        })->limit(20);

        $parent_id = $this->request->get('service_id', -1);

        if ($parent_id > 0) {
            $model = $model->whereHas('services', function ($services) use ($parent_id) {
                return $services->where('parent_id', $parent_id);
            });

//            $model = $model->orWhereHas('quotations', function ($quotations) {
//                return $quotations->whereHas('reviews', function ($reviews){
//                    $reviews->where('quotation_id', 3);
//                });
//            });

        }
//        var_dump($model->toSql());
//        exit();

        return $model;
    }
}