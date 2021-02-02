<?php
/**
 * Created by PhpStorm.
 * User: mohsinahmad
 * Date: 17-Jul-18
 * Time: 3:14 PM
 */

namespace App\Criteria;

use Illuminate\Http\Request;
use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

class ServiceCriteria implements CriteriaInterface
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function apply($model, RepositoryInterface $repository)
    {
        // Implement apply() method.
        $parent_id = $this->request->get('parent_id', -1);

        if ($parent_id >= 0) {
            $model = $model->where('parent_id', $parent_id);
        }
        return $model;
    }

}