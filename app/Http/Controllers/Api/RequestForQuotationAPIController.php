<?php

namespace App\Http\Controllers\Api;

use App\Models\Notification;
use App\Criteria\RequestQuotationCriteria;
use App\Http\Requests\Api\CreateRequestForQuotationAPIRequest;
use App\Http\Requests\Api\UpdateRequestForQuotationAPIRequest;
use App\Models\RequestForQuotation;
use App\Repositories\Admin\MechanicServiceRepository;
use App\Repositories\Admin\NotificationRepository;
use App\Repositories\Admin\RequestForQuotationRepository;
use App\Repositories\Admin\ServiceRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;

/**
 * Class RequestForQuotationController
 * @package App\Http\Controllers\Api
 */
class RequestForQuotationAPIController extends AppBaseController
{
    /** @var  RequestForQuotationRepository */
    private $requestForQuotationRepository, $serviceRepository, $mechanicServiceRepository, $notificationRepository;

    public function __construct(RequestForQuotationRepository $requestForQuotationRepo, ServiceRepository $serviceRepo, MechanicServiceRepository $mechanicServiceRepo, NotificationRepository $notificationRepo)
    {
        $this->requestForQuotationRepository = $requestForQuotationRepo;
        $this->serviceRepository = $serviceRepo;
        $this->mechanicServiceRepository = $mechanicServiceRepo;
        $this->notificationRepository = $notificationRepo;
    }

    /**
     * @param Request $request
     * @return mixed
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     *
     * @SWG\Get(
     *      path="/request_for_quotations",
     *      summary="Get a listing of the RequestForQuotations.",
     *      tags={"RequestForQuotation"},
     *      description="Get all RequestForQuotations",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="Authorization",
     *          description="User Auth Token{ Bearer ABC123 }",
     *          type="string",
     *          required=true,
     *          default="Bearer ABC123",
     *          in="header"
     *      ),
     *      @SWG\Parameter(
     *          name="limit",
     *          description="Change the Default Record Count. If not found, Returns All Records in DB.",
     *          type="integer",
     *          required=false,
     *          in="query"
     *      ),
     *      @SWG\Parameter(
     *          name="offset",
     *          description="Change the Default Offset of the Query. If not found, 0 will be used.",
     *          type="integer",
     *          required=false,
     *          in="query"
     *      ),
     *      @SWG\Parameter(
     *          name="job_status",
     *          description="search job by status filter: 10=pending jobs, 20=approved jobs, 30=completed job",
     *          type="integer",
     *          required=false,
     *          in="query"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="array",
     *                  @SWG\Items(ref="#/definitions/RequestForQuotation")
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function index(Request $request)
    {
        $this->requestForQuotationRepository->pushCriteria(new RequestCriteria($request));
        $this->requestForQuotationRepository->pushCriteria(new LimitOffsetCriteria($request));
        $this->requestForQuotationRepository->pushCriteria(new RequestQuotationCriteria($request));
        $requestForQuotations = $this->requestForQuotationRepository->all();

        return $this->sendResponse($requestForQuotations->toArray(), 'Request For Quotations retrieved successfully');
    }

    /**
     * @param CreateRequestForQuotationAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/request_for_quotations",
     *      summary="Store a newly created RequestForQuotation in storage",
     *      tags={"RequestForQuotation"},
     *      description="Store RequestForQuotation",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="Authorization",
     *          description="User Auth Token{ Bearer ABC123 }",
     *          type="string",
     *          required=true,
     *          default="Bearer ABC123",
     *          in="header"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="RequestForQuotation that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/RequestForQuotation")
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/RequestForQuotation"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateRequestForQuotationAPIRequest $request)
    {

        $requestForQuotations = $this->requestForQuotationRepository->saveRecord($request, $this->serviceRepository, $this->mechanicServiceRepository, $this->notificationRepository);
        return $this->sendResponse($requestForQuotations->toArray(), 'Job saved successfully');
    }

    /**
     * @param $id
     * @param Request $request
     * @return mixed
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     *
     * @SWG\Get(
     *      path="/request_for_quotations/{id}",
     *      summary="Display the specified RequestForQuotation",
     *      tags={"RequestForQuotation"},
     *      description="Get RequestForQuotation",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="Authorization",
     *          description="User Auth Token{ Bearer ABC123 }",
     *          type="string",
     *          required=true,
     *          default="Bearer ABC123",
     *          in="header"
     *      ),
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of RequestForQuotation",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/RequestForQuotation"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function show($id, Request $request)
    {
        $this->requestForQuotationRepository->pushCriteria(new RequestQuotationCriteria($request));
        /** @var RequestForQuotation $requestForQuotation */
        $requestForQuotation = $this->requestForQuotationRepository->findWithoutFail($id);

        if (empty($requestForQuotation)) {
            return $this->sendErrorWithData('Job not found');
        }

        return $this->sendResponse($requestForQuotation->toArray(), 'Job retrieved successfully');
    }

    /**
     * @param $id
     * @param Request $request
     * @return mixed
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     *
     * @SWG\Put(
     *      path="/request_for_quotations/{id}",
     *      summary="Update the specified RequestForQuotation in storage",
     *      tags={"RequestForQuotation"},
     *      description="Update RequestForQuotation",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="Authorization",
     *          description="User Auth Token{ Bearer ABC123 }",
     *          type="string",
     *          required=true,
     *          default="Bearer ABC123",
     *          in="header"
     *      ),
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of RequestForQuotation",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="RequestForQuotation that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/RequestForQuotation")
     *      ),
     *      @SWG\Parameter(
     *          name="_method",
     *          description="method spoofing",
     *          type="string",
     *          required=true,
     *          default="PUT",
     *          in="path"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/RequestForQuotation"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, Request $request)
    {
//        return $this->sendResponse($request->hasFile('images'), 'RequestForQuotation updated successfully');
        $this->requestForQuotationRepository->pushCriteria(new RequestQuotationCriteria($request));
        $input = $request->all();

        /** @var RequestForQuotation $requestForQuotation */
        $requestForQuotation = $this->requestForQuotationRepository->findWithoutFail($id);

        if (empty($requestForQuotation)) {
            return $this->sendErrorWithData('Job not found');
        }

        if ($requestForQuotation->quotation_count > 0) {
            return $this->sendErrorWithData('Job cannot be edit');
        }

        $requestForQuotation = $this->requestForQuotationRepository->updateRecord($request, $requestForQuotation);
        return $this->sendResponse($requestForQuotation->toArray(), 'Request for Quotation is updated successfully');
    }

    /**
     * @param $id
     * @return mixed
     * @throws \Exception
     *
     * @SWG\Delete(
     *      path="/request_for_quotations/{id}",
     *      summary="Remove the specified RequestForQuotation from storage",
     *      tags={"RequestForQuotation"},
     *      description="Delete RequestForQuotation",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="Authorization",
     *          description="User Auth Token{ Bearer ABC123 }",
     *          type="string",
     *          required=true,
     *          default="Bearer ABC123",
     *          in="header"
     *      ),
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of RequestForQuotation",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="string"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function destroy($id)
    {
        /** @var RequestForQuotation $requestForQuotation */
        $requestForQuotation = $this->requestForQuotationRepository->findWithoutFail($id);

        if (empty($requestForQuotation)) {
            return $this->sendErrorWithData('Job not found');
        }

        if ($requestForQuotation->quotation_count > 0) {
            return $this->sendErrorWithData('Job cannot be deleted');
        }

        if ($requestForQuotation->quotations()->count() > 0) {
            return $this->sendErrorWithData("Job cannot be edited.");
        }
        $requestForQuotation->delete();

        return $this->sendResponse($id, 'Job deleted successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/confirmComplete/{id}",
     *      summary="Mark Job Complete",
     *      tags={"RequestForQuotation"},
     *      description="Mark Job Complete",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="Authorization",
     *          description="User Auth Token{ Bearer ABC123 }",
     *          type="string",
     *          required=true,
     *          default="Bearer ABC123",
     *          in="header"
     *      ),
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of RequestForQuotation",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/RequestForQuotation"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function jobComplete($id)
    {
        if (!Auth::user()->hasRole('mechanic')) {
            return $this->sendErrorWithData('You are not authorised for this action.');
        }
        $requestForQuotation = $this->requestForQuotationRepository->findWithoutFail($id);

        if (empty($requestForQuotation)) {
            return $this->sendErrorWithData('Job not found');
        }

        $this->requestForQuotationRepository->jobComplete($requestForQuotation, $this->notificationRepository);
        return $this->sendResponse($requestForQuotation->toArray(), 'Job marked complete successfully');
    }
}
