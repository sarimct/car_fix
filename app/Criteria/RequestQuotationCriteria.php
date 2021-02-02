<?php
/**
 * Created by PhpStorm.
 * User: mohsinahmad
 * Date: 17-Jul-18
 * Time: 2:15 PM
 */

namespace App\Criteria;

use App\Models\RequestForQuotation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

class RequestQuotationCriteria implements CriteriaInterface
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function apply($model, RepositoryInterface $repository)
    {
        $user = Auth::user();
        $jobStatus = $this->request->get('job_status', -1);
        /*$pendingJobs = $this->request->get('pendingJobs', 0);
        $finishedJobs = $this->request->get('finishedJobs', 0);*/

        if ($user->hasRole('driver')) {
            $model = $model->whereHas('car', function ($car) use ($user) {
                return $car->where('driver_id', $user->id)->withTrashed();
            })->orderBy('created_at', 'desc');
        } elseif ($user->hasRole('mechanic')) {
            $model = $model->whereHas('pendingQuotation', function ($quotations) use ($user) {
                return $quotations->where('mechanic_id', $user->id);
            })->orderBy('created_at', 'desc');

//            $model = $model->orWhereHas('quotations', function ($quotations) use ($user) {
//                return $quotations->where('mechanic_id', $user->id);
//            })->where('status', '!=', RequestForQuotation::STATUS_COMPLETE)->orderBy('created_at', 'desc');
        }
        if ($jobStatus > 0) {
            $model = $model->where('status', $jobStatus);
        }
//        var_dump($model->toSql());
//        exit();
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