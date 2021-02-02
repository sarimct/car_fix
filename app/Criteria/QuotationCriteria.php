<?php
/**
 * Created by PhpStorm.
 * User: mohsinahmad
 * Date: 17-Jul-18
 * Time: 2:15 PM
 */

namespace App\Criteria;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

class QuotationCriteria implements CriteriaInterface
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function apply($model, RepositoryInterface $repository)
    {
        $user = Auth::user();
        $requestForQuotation_id = $this->request->get('requestForQuotation_id', 0);
        /*$pendingJobs = $this->request->get('pendingJobs', 0);
        $finishedJobs = $this->request->get('finishedJobs', 0);*/
        if ($user->hasRole('mechanic')) {
            $model = $model->where('mechanic_id', $user->id);
        }

        $model = $model->where('quotation_request_id', $requestForQuotation_id);


        /* if ($pendingJobs > 0) {
           $model = $model->whereHas('quotations', function ($quotations) use ($user) {
               return $quotations->where(['mechanic_id' => $user->id, 'status' => 20]);
           })->where('status', 20);
       }

       if ($finishedJobs > 0) {
           $model = $model->whereHas('quotations', function ($quotations) use ($user) {
               return $quotations->where(['mechanic_id' => $user->id, 'status' => 20]);
           })->where('status', 30);
       }*/
        return $model;
    }
}