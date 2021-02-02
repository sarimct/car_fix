<?php

namespace App\Http\Controllers\Api;

use App\Criteria\QuotationCriteria;
use App\Http\Requests\Api\CreateQuotationAPIRequest;
use App\Http\Requests\Api\UpdateQuotationAPIRequest;
use App\Models\Quotation;
use App\Models\RequestForQuotation;
use App\Repositories\Admin\NotificationRepository;
use App\Repositories\Admin\QuotationRepository;
use App\Repositories\Admin\RequestForQuotationRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\Auth;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class QuotationController
 * @package App\Http\Controllers\Api
 */
class QuotationAPIController extends AppBaseController
{
    /** @var  QuotationRepository */
    private $quotationRepository;

    /** @var  RequestForQuotationRepository */
    private $requestForQuotationRepository;

    /** @var  NotificationRepository */
    private $notificationRepository;

    public function __construct(QuotationRepository $quotationRepo, RequestForQuotationRepository $requestForQuotationRepo, NotificationRepository $notificationRepo)
    {
        $this->quotationRepository = $quotationRepo;
        $this->requestForQuotationRepository = $requestForQuotationRepo;
        $this->notificationRepository = $notificationRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/quotations",
     *      summary="Get a listing of the Quotations.",
     *      tags={"Quotation"},
     *      description="Get all Quotations",
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
     *          name="requestForQuotation_id",
     *          description="Id of Request Quotation",
     *          type="integer",
     *          required=true,
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
     *                  @SWG\Items(ref="#/definitions/Quotation")
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
        $this->quotationRepository->pushCriteria(new RequestCriteria($request));
        $this->quotationRepository->pushCriteria(new LimitOffsetCriteria($request));
        $this->quotationRepository->pushCriteria(new QuotationCriteria($request));
        $quotations = $this->quotationRepository->all();

        return $this->sendResponse($quotations->toArray(), 'Quotations retrieved successfully');
    }

    /**
     * @param CreateQuotationAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/quotations",
     *      summary="Store a newly created Quotation in storage",
     *      tags={"Quotation"},
     *      description="Store Quotation",
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
     *          description="Quotation that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Quotation")
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
     *                  ref="#/definitions/Quotation"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateQuotationAPIRequest $request)
    {
        if (!Auth::user()->hasRole('mechanic')) {
            return $this->sendErrorWithData('Not authorised for this action');
        }

        $quotation = $this->quotationRepository->findWhere(['quotation_request_id' => $request->quotation_request_id, 'mechanic_id' => Auth::id()]);

        if ($quotation->count() > 0) {
            return $this->sendResponse([], 'Quotation Already Exist');
        }
        $this->quotationRepository->store($request);
        return $this->sendResponse([], 'Quotation saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/quotations/{id}",
     *      summary="Display the specified Quotation",
     *      tags={"Quotation"},
     *      description="Get Quotation",
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
     *          description="id of Quotation",
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
     *                  ref="#/definitions/Quotation"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function show($id)
    {
        /** @var Quotation $quotation */
        $quotation = $this->quotationRepository->findWithoutFail($id);

        if (empty($quotation)) {
            return $this->sendErrorWithData('Quotation not found');
        }

        return $this->sendResponse($quotation->toArray(), 'Quotation retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdateQuotationAPIRequest $request
     * @return Response
     *
     * //@SWG\Put(
     *      path="/quotations/{id}",
     *      summary="Update the specified Quotation in storage",
     *      tags={"Quotation"},
     *      description="Update Quotation",
     *      produces={"application/json"},
     *      //@SWG\Parameter(
     *          name="Authorization",
     *          description="User Auth Token{ Bearer ABC123 }",
     *          type="string",
     *          required=true,
     *          default="Bearer ABC123",
     *          in="header"
     *      ),
     *      //@SWG\Parameter(
     *          name="id",
     *          description="id of Quotation",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      //@SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Quotation that should be updated",
     *          required=false,
     *          //@SWG\Schema(ref="#/definitions/Quotation")
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
     *                  ref="#/definitions/Quotation"
     *              ),
     *              //@SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateQuotationAPIRequest $request)
    {
        $input = $request->all();

        /** @var Quotation $quotation */
        $quotation = $this->quotationRepository->findWithoutFail($id);

        if (empty($quotation)) {
            return $this->sendErrorWithData('Quotation not found');
        }

        $quotation = $this->quotationRepository->update($input, $id);

        return $this->sendResponse($quotation->toArray(), 'Quotation updated successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * //@SWG\Delete(
     *      path="/quotations/{id}",
     *      summary="Remove the specified Quotation from storage",
     *      tags={"Quotation"},
     *      description="Delete Quotation",
     *      produces={"application/json"},
     *      //@SWG\Parameter(
     *          name="Authorization",
     *          description="User Auth Token{ Bearer ABC123 }",
     *          type="string",
     *          required=true,
     *          default="Bearer ABC123",
     *          in="header"
     *      ),
     *      //@SWG\Parameter(
     *          name="id",
     *          description="id of Quotation",
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
        /** @var Quotation $quotation */
        $quotation = $this->quotationRepository->findWithoutFail($id);

        if (empty($quotation)) {
            return $this->sendErrorWithData('Quotation not found');
        }

        $quotation->delete();

        return $this->sendResponse($id, 'Quotation deleted successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/acceptQuotation/{id}",
     *      summary="Approve Quotation",
     *      tags={"Quotation"},
     *      description="Approve Quotation",
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
     *          description="id of Quotation",
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
     *                  ref="#/definitions/Quotation"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function acceptQuotation($id)
    {
        if (!Auth::user()->hasRole('driver')) {
            return $this->sendErrorWithData('You are not authorised for this action.');
        }

        $quotation = $this->quotationRepository->findWithoutFail($id);
        if (empty($quotation)) {
            return $this->sendErrorWithData('Quotation not found');
        }

        $quotation = $this->quotationRepository->acceptMechanicQuotation($quotation, $this->requestForQuotationRepository, $this->notificationRepository);

        return $this->sendResponse($quotation->toArray(), 'Quotation approved successfully');
    }
}
