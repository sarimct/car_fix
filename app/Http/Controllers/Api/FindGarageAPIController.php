<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\CreateFindGarageAPIRequest;
use App\Http\Requests\Api\UpdateFindGarageAPIRequest;
use App\Models\FindGarage;
use App\Repositories\Admin\FindGarageRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Response;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;

/**
 * Class FindGarageController
 * @package App\Http\Controllers\Api
 */

class FindGarageAPIController extends AppBaseController
{
    /** @var  FindGarageRepository */
    private $findGarageRepository;

    public function __construct(FindGarageRepository $findGarageRepo)
    {
        $this->findGarageRepository = $findGarageRepo;
    }

    /**
     * @param Request $request
     * @return mixed
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     *
     * @SWG\Get(
     *      path="/findGarages",
     *      summary="Get a listing of the FindGarages.",
     *      tags={"FindGarage"},
     *      description="Get all FindGarages",
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
     *                  @SWG\Items(ref="#/definitions/FindGarage")
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
        $this->findGarageRepository->pushCriteria(new RequestCriteria($request));
        $this->findGarageRepository->pushCriteria(new LimitOffsetCriteria($request));
        $findGarages = $this->findGarageRepository->all();

        return $this->sendResponse($findGarages->toArray(), 'Find Garages retrieved successfully');
    }

    /**
     * @param CreateFindGarageAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/findGarages",
     *      summary="Store a newly created FindGarage in storage",
     *      tags={"FindGarage"},
     *      description="Store FindGarage",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="FindGarage that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/FindGarage")
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
     *                  ref="#/definitions/FindGarage"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateFindGarageAPIRequest $request)
    {
        $input = $request->all();

        $findGarages = $this->findGarageRepository->create($input);

        return $this->sendResponse($findGarages->toArray(), 'Find Garage saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/findGarages/{id}",
     *      summary="Display the specified FindGarage",
     *      tags={"FindGarage"},
     *      description="Get FindGarage",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of FindGarage",
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
     *                  ref="#/definitions/FindGarage"
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
        /** @var FindGarage $findGarage */
        $findGarage = $this->findGarageRepository->findWithoutFail($id);

        if (empty($findGarage)) {
            return $this->sendErrorWithData('Find Garage not found');
        }

        return $this->sendResponse($findGarage->toArray(), 'Find Garage retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdateFindGarageAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/findGarages/{id}",
     *      summary="Update the specified FindGarage in storage",
     *      tags={"FindGarage"},
     *      description="Update FindGarage",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of FindGarage",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="FindGarage that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/FindGarage")
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
     *                  ref="#/definitions/FindGarage"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateFindGarageAPIRequest $request)
    {
        $input = $request->all();

        /** @var FindGarage $findGarage */
        $findGarage = $this->findGarageRepository->findWithoutFail($id);

        if (empty($findGarage)) {
            return $this->sendErrorWithData('Find Garage not found');
        }

        $findGarage = $this->findGarageRepository->update($input, $id);

        return $this->sendResponse($findGarage->toArray(), 'FindGarage updated successfully');
    }

    /**
     * @param $id
     * @return mixed
     * @throws \Exception
     *
     * @SWG\Delete(
     *      path="/findGarages/{id}",
     *      summary="Remove the specified FindGarage from storage",
     *      tags={"FindGarage"},
     *      description="Delete FindGarage",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of FindGarage",
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
        /** @var FindGarage $findGarage */
        $findGarage = $this->findGarageRepository->findWithoutFail($id);

        if (empty($findGarage)) {
            return $this->sendErrorWithData('Find Garage not found');
        }

        $findGarage->delete();

        return $this->sendResponse($id, 'Find Garage deleted successfully');
    }
}
