<?php
/**
 * Created by PhpStorm.
 * User: mohsinahmad
 * Date: 17-Jul-18
 * Time: 3:00 PM
 */

namespace App\Criteria;


use Illuminate\Http\Request;
use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

class CityCriteria implements CriteriaInterface
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function apply($model, RepositoryInterface $repository)
    {
        // Implement apply() method.
        $country_id = $this->request->get('country_id', -1);

        if ($country_id > 0) {
            $model = $model->where('country_id', $country_id);
        }

        return $model;
    }
}