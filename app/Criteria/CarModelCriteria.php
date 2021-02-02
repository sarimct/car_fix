<?php
/**
 * Created by PhpStorm.
 * User: mohsinahmad
 * Date: 17-Jul-18
 * Time: 2:45 PM
 */

namespace App\Criteria;

use Illuminate\Http\Request;
use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

class CarModelCriteria implements CriteriaInterface
{
    /**
     * @var \Illuminate\Http\Request
     */
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function apply($model, RepositoryInterface $repository)
    {
        // Implement apply() method.
        $car_maker_id = $this->request->get('car_maker_id', -1);

        if ($car_maker_id > 0) {
            $model = $model->where('car_maker_id', $car_maker_id);
        }

        return $model;
    }
}