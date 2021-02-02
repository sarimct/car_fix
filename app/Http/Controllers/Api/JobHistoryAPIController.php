<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\CreateJobHistoryAPIRequest;
use App\Http\Requests\Api\UpdateJobHistoryAPIRequest;
use App\Models\JobHistory;
use App\Repositories\Admin\JobHistoryRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Response;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;

/**
 * Class JobHistoryController
 * @package App\Http\Controllers\Api
 */

class JobHistoryAPIController extends AppBaseController
{
    /** @var  JobHistoryRepository */
    private $jobHistoryRepository;

    public function __construct(JobHistoryRepository $jobHistoryRepo)
    {
        $this->jobHistoryRepository = $jobHistoryRepo;
    }

    /**
     * @param Request $request
     * @return mixed
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     *
     * //@SWG\Get(
     *      path="/jobHistories",
     *      summary="Get a listing of the JobHistories.",
     *      tags={"JobHistory"},
     *      description="Get all JobHistories",
     *      produces={"application/json"},
     *      //@SWG\Parameter(
     *          name="limit",
     *          description="Change the Default Record Count. If not found, Returns All Records in DB.",
     *          type="integer",
     *          required=false,
     *          in="query"
     *      ),
     *     //@SWG\Parameter(
     *          name="offset",
     *          description="Change the Default Offset of the Query. If not found, 0 will be used.",
     *          type="integer",
     *          required=false,
     *          in="query"
     *      ),
     *      //@SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          //@SWG\Schema(
     *              type="object",
     *              //@SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              //@SWG\Property(
     *                  property="data",
     *                  type="array",
     *                  //@SWG\Items(ref="#/definitions/JobHistory")
     *              ),
     *              //@SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function index(Request $request)
    {
        $this->jobHistoryRepository->pushCriteria(new RequestCriteria($request));
        $this->jobHistoryRepository->pushCriteria(new LimitOffsetCriteria($request));
        $jobHistories = $this->jobHistoryRepository->all();

        return $this->sendResponse($jobHistories->toArray(), 'Job Histories retrieved successfully');
    }

    /**
     * @param CreateJobHistoryAPIRequest $request
     * @return Response
     *
     * //@SWG\Post(
     *      path="/jobHistories",
     *      summary="Store a newly created JobHistory in storage",
     *      tags={"JobHistory"},
     *      description="Store JobHistory",
     *      produces={"application/json"},
     *      //@SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="JobHistory that should be stored",
     *          required=false,
     *          //@SWG\Schema(ref="#/definitions/JobHistory")
     *      ),
     *      //@SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          //@SWG\Schema(
     *              type="object",
     *              //@SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              //@SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/JobHistory"
     *              ),
     *              //@SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateJobHistoryAPIRequest $request)
    {
        $input = $request->all();

        $jobHistories = $this->jobHistoryRepository->create($input);

        return $this->sendResponse($jobHistories->toArray(), 'Job History saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * //@SWG\Get(
     *      path="/jobHistories/{id}",
     *      summary="Display the specified JobHistory",
     *      tags={"JobHistory"},
     *      description="Get JobHistory",
     *      produces={"application/json"},
     *      //@SWG\Parameter(
     *          name="id",
     *          description="id of JobHistory",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      //@SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          //@SWG\Schema(
     *              type="object",
     *              //@SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              //@SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/JobHistory"
     *              ),
     *              //@SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function show($id)
    {
        /** @var JobHistory $jobHistory */
        $jobHistory = $this->jobHistoryRepository->findWithoutFail($id);

        if (empty($jobHistory)) {
            return $this->sendErrorWithData('Job History not found');
        }

        return $this->sendResponse($jobHistory->toArray(), 'Job History retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdateJobHistoryAPIRequest $request
     * @return Response
     *
     * //@SWG\Put(
     *      path="/jobHistories/{id}",
     *      summary="Update the specified JobHistory in storage",
     *      tags={"JobHistory"},
     *      description="Update JobHistory",
     *      produces={"application/json"},
     *      //@SWG\Parameter(
     *          name="id",
     *          description="id of JobHistory",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      //@SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="JobHistory that should be updated",
     *          required=false,
     *          //@SWG\Schema(ref="#/definitions/JobHistory")
     *      ),
     *      //@SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          //@SWG\Schema(
     *              type="object",
     *              //@SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              //@SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/JobHistory"
     *              ),
     *              //@SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateJobHistoryAPIRequest $request)
    {
        $input = $request->all();

        /** @var JobHistory $jobHistory */
        $jobHistory = $this->jobHistoryRepository->findWithoutFail($id);

        if (empty($jobHistory)) {
            return $this->sendErrorWithData('Job History not found');
        }

        $jobHistory = $this->jobHistoryRepository->update($input, $id);

        return $this->sendResponse($jobHistory->toArray(), 'JobHistory updated successfully');
    }

    /**
     * @param $id
     * @return mixed
     * @throws \Exception
     *
     * //@SWG\Delete(
     *      path="/jobHistories/{id}",
     *      summary="Remove the specified JobHistory from storage",
     *      tags={"JobHistory"},
     *      description="Delete JobHistory",
     *      produces={"application/json"},
     *      //@SWG\Parameter(
     *          name="id",
     *          description="id of JobHistory",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      //@SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          //@SWG\Schema(
     *              type="object",
     *              //@SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              //@SWG\Property(
     *                  property="data",
     *                  type="string"
     *              ),
     *              //@SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function destroy($id)
    {
        /** @var JobHistory $jobHistory */
        $jobHistory = $this->jobHistoryRepository->findWithoutFail($id);

        if (empty($jobHistory)) {
            return $this->sendErrorWithData('Job History not found');
        }

        $jobHistory->delete();

        return $this->sendResponse($id, 'Job History deleted successfully');
    }
}
