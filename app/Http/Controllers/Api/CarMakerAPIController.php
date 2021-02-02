<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\CreateCarMakerAPIRequest;
use App\Http\Requests\Api\UpdateCarMakerAPIRequest;
use App\Models\CarMaker;
use App\Repositories\Admin\CarMakerRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\Response;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;

/**
 * Class CarMakerController
 * @package App\Http\Controllers\Api
 */
class CarMakerAPIController extends AppBaseController
{
    /** @var  CarMakerRepository */
    private $carMakerRepository;

    public function __construct(CarMakerRepository $carMakerRepo)
    {
        $this->carMakerRepository = $carMakerRepo;
    }

    /**
     * @param Request $request
     * @return mixed
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     *
     * @SWG\Get(
     *      path="/carMakers",
     *      summary="Get a listing of the CarMakers.",
     *      tags={"CarMaker"},
     *      description="Get all CarMakers",
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
     *                  @SWG\Items(ref="#/definitions/CarMaker")
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
        $this->carMakerRepository->pushCriteria(new RequestCriteria($request));
        $this->carMakerRepository->pushCriteria(new LimitOffsetCriteria($request));
        $carMakers = $this->carMakerRepository->all();

        return $this->sendResponse($carMakers->toArray(), 'Car Makers retrieved successfully');
    }

    /**
     * @param CreateCarMakerAPIRequest $request
     * @return Response
     *
     * //@SWG\Post(
     *      path="/carMakers",
     *      summary="Store a newly created CarMaker in storage",
     *      tags={"CarMaker"},
     *      description="Store CarMaker",
     *      produces={"application/json"},
     *      //@SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="CarMaker that should be stored",
     *          required=false,
     *          //@SWG\Schema(ref="#/definitions/CarMaker")
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
     *                  ref="#/definitions/CarMaker"
     *              ),
     *              //@SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateCarMakerAPIRequest $request)
    {
        $input = $request->all();

        $carMakers = $this->carMakerRepository->create($input);

        return $this->sendResponse($carMakers->toArray(), 'Car Maker saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/carMakers/{id}",
     *      summary="Display the specified CarMaker",
     *      tags={"CarMaker"},
     *      description="Get CarMaker",
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
     *          description="id of CarMaker",
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
     *                  ref="#/definitions/CarMaker"
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
        /** @var CarMaker $carMaker */
        $carMaker = $this->carMakerRepository->findWithoutFail($id);

        if (empty($carMaker)) {
            return $this->sendErrorWithData('Car Maker not found');
        }

        return $this->sendResponse($carMaker->toArray(), 'Car Maker retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdateCarMakerAPIRequest $request
     * @return Response
     *
     * //@SWG\Put(
     *      path="/carMakers/{id}",
     *      summary="Update the specified CarMaker in storage",
     *      tags={"CarMaker"},
     *      description="Update CarMaker",
     *      produces={"application/json"},
     *      //@SWG\Parameter(
     *          name="id",
     *          description="id of CarMaker",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      //@SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="CarMaker that should be updated",
     *          required=false,
     *          //@SWG\Schema(ref="#/definitions/CarMaker")
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
     *                  ref="#/definitions/CarMaker"
     *              ),
     *              //@SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateCarMakerAPIRequest $request)
    {
        $input = $request->all();

        /** @var CarMaker $carMaker */
        $carMaker = $this->carMakerRepository->findWithoutFail($id);

        if (empty($carMaker)) {
            return $this->sendErrorWithData('Car Maker not found');
        }

        $carMaker = $this->carMakerRepository->update($input, $id);

        return $this->sendResponse($carMaker->toArray(), 'CarMaker updated successfully');
    }

    /**
     * @param $id
     * @return mixed
     * @throws \Exception
     *
     * //@SWG\Delete(
     *      path="/carMakers/{id}",
     *      summary="Remove the specified CarMaker from storage",
     *      tags={"CarMaker"},
     *      description="Delete CarMaker",
     *      produces={"application/json"},
     *      //@SWG\Parameter(
     *          name="id",
     *          description="id of CarMaker",
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
        /** @var CarMaker $carMaker */
        $carMaker = $this->carMakerRepository->findWithoutFail($id);

        if (empty($carMaker)) {
            return $this->sendErrorWithData('Car Maker not found');
        }

        $carMaker->delete();

        return $this->sendResponse($id, 'Car Maker deleted successfully');
    }
}
