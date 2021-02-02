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

class AreaCriteria implements CriteriaInterface
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function apply($model, RepositoryInterface $repository)
    {
        // Implement apply() method.

        $city_id = $this->request->get('city_id', -1);

        if ($city_id > 0) {
            $model = $model->where('city_id', $city_id);
        }

        return $model;
    }
}