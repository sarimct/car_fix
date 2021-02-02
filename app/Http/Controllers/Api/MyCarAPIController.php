<?php

namespace App\Http\Controllers\Api;

use App\Criteria\MyCarCriteria;
use App\Http\Requests\Api\CreateMyCarAPIRequest;
use App\Http\Requests\Api\UpdateMyCarAPIRequest;
use App\Models\MyCar;
use App\Repositories\Admin\MyCarRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\Auth;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class MyCarController
 * @package App\Http\Controllers\Api
 */
class MyCarAPIController extends AppBaseController
{
    /** @var  MyCarRepository */
    private $myCarRepository;

    public function __construct(MyCarRepository $myCarRepo)
    {
        $this->myCarRepository = $myCarRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/myCars",
     *      summary="Get a listing of the MyCars.",
     *      tags={"MyCar"},
     *      description="Get all MyCars",
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
     *     @SWG\Parameter(
     *          name="offset",
     *          description="Change the Default Offset of the Query. If not found, 0 will be used.",
     *          type="integer",
     *          required=false,
     *          in="query"
     *      ),
     *     @SWG\Parameter(
     *          name="reg_id",
     *          description="Registration ID",
     *          type="string",
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
     *                  @SWG\Items(ref="#/definitions/MyCar")
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
        $this->myCarRepository->pushCriteria(new RequestCriteria($request));
        $this->myCarRepository->pushCriteria(new LimitOffsetCriteria($request));
        $this->myCarRepository->pushCriteria(new MyCarCriteria($request));
        $myCars = $this->myCarRepository->all();
        return $this->sendResponse($myCars->toArray(), "Driver's cars retrieved successfully");
    }

    /**
     * @param CreateMyCarAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/myCars",
     *      summary="Store a newly created MyCar in storage",
     *      tags={"MyCar"},
     *      description="Store MyCar",
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
     *          description="MyCar that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/MyCar")
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
     *                  ref="#/definitions/MyCar"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateMyCarAPIRequest $request)
    {
        $myCars = $this->myCarRepository->store($request);
        return $this->sendResponse($myCars, "Your car saved successfully");
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/myCars/{id}",
     *      summary="Display the specified MyCar",
     *      tags={"MyCar"},
     *      description="Get MyCar",
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
     *          description="id of MyCar",
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
     *                  ref="#/definitions/MyCar"
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
        /** @var MyCar $myCar */
        $myCar = $this->myCarRepository->findWithoutFail($id);

        if (empty($myCar)) {
            return $this->sendErrorWithData('My Car not found');
        }

        return $this->sendResponse($myCar->toArray(), 'My Car retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdateMyCarAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/myCars/{id}",
     *      summary="Update the specified MyCar in storage",
     *      tags={"MyCar"},
     *      description="Update MyCar",
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
     *          description="id of MyCar",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="MyCar that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/MyCar")
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
     *                  ref="#/definitions/MyCar"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateMyCarAPIRequest $request)
    {
        $input = $request->all();

        /** @var MyCar $myCar */
        $myCar = $this->myCarRepository->findWithoutFail($id);

        if (empty($myCar)) {
            return $this->sendErrorWithData('My Car not found');
        }

        $myCar = $this->myCarRepository->update($input, $id);

        return $this->sendResponse($myCar->toArray(), 'MyCar updated successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/myCars/{id}",
     *      summary="Remove the specified MyCar from storage",
     *      tags={"MyCar"},
     *      description="Delete MyCar",
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
     *          description="id of MyCar",
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
        /** @var MyCar $myCar */
        $myCar = $this->myCarRepository->findWithoutFail($id);
        if (empty($myCar)) {
            return $this->sendErrorWithData('My Car not found');
        }

        $message = $this->myCarRepository->destroy($id);

        return $this->sendResponse($id, $message);
    }


    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/checkMyCar",
     *      summary="Get a listing of MyCars.",
     *      tags={"MyCar"},
     *      description="Get all MyCars",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="limit",
     *          description="Change the Default Record Count. If not found, Returns All Records in DB.",
     *          type="integer",
     *          required=false,
     *          in="query"
     *      ),
     *     @SWG\Parameter(
     *          name="offset",
     *          description="Change the Default Offset of the Query. If not found, 0 will be used.",
     *          type="integer",
     *          required=false,
     *          in="query"
     *      ),
     *     @SWG\Parameter(
     *          name="reg_id",
     *          description="Registration ID",
     *          type="string",
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
     *                  @SWG\Items(ref="#/definitions/MyCar")
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function checkMyCarRegistration(Request $request)
    {
        $this->myCarRepository->pushCriteria(new RequestCriteria($request));
        $this->myCarRepository->pushCriteria(new LimitOffsetCriteria($request));
        $this->myCarRepository->pushCriteria(new MyCarCriteria($request));
        $myCars = $this->myCarRepository->all();
        return $this->sendResponse($myCars->toArray(), "Driver's cars retrieved successfully");
    }

}
