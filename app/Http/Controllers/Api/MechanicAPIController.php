<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\CreateMechanicAPIRequest;
use App\Http\Requests\Api\UpdateMechanicAPIRequest;
use App\Models\Mechanic;
use App\Repositories\Admin\MechanicRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class MechanicController
 * @package App\Http\Controllers\Api
 */

class MechanicAPIController extends AppBaseController
{
    /** @var  MechanicRepository */
    private $mechanicRepository;

    public function __construct(MechanicRepository $mechanicRepo)
    {
        $this->mechanicRepository = $mechanicRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/mechanics",
     *      summary="Get a listing of the Mechanics.",
     *      tags={"Mechanic"},
     *      description="Get all Mechanics",
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
     *                  @SWG\Items(ref="#/definitions/Mechanic")
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
        $this->mechanicRepository->pushCriteria(new RequestCriteria($request));
        $this->mechanicRepository->pushCriteria(new LimitOffsetCriteria($request));
        $mechanics = $this->mechanicRepository->all();

        return $this->sendResponse($mechanics->toArray(), 'Mechanics retrieved successfully');
    }

    /**
     * @param CreateMechanicAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/mechanics",
     *      summary="Store a newly created Mechanic in storage",
     *      tags={"Mechanic"},
     *      description="Store Mechanic",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Mechanic that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Mechanic")
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
     *                  ref="#/definitions/Mechanic"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateMechanicAPIRequest $request)
    {
        $input = $request->all();

        $mechanics = $this->mechanicRepository->create($input);

        return $this->sendResponse($mechanics->toArray(), 'Mechanic saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/mechanics/{id}",
     *      summary="Display the specified Mechanic",
     *      tags={"Mechanic"},
     *      description="Get Mechanic",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Mechanic",
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
     *                  ref="#/definitions/Mechanic"
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
        /** @var Mechanic $mechanic */
        $mechanic = $this->mechanicRepository->findWithoutFail($id);

        if (empty($mechanic)) {
            return $this->sendError('Mechanic not found');
        }

        return $this->sendResponse($mechanic->toArray(), 'Mechanic retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdateMechanicAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/mechanics/{id}",
     *      summary="Update the specified Mechanic in storage",
     *      tags={"Mechanic"},
     *      description="Update Mechanic",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Mechanic",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Mechanic that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Mechanic")
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
     *                  ref="#/definitions/Mechanic"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateMechanicAPIRequest $request)
    {
        $input = $request->all();

        /** @var Mechanic $mechanic */
        $mechanic = $this->mechanicRepository->findWithoutFail($id);

        if (empty($mechanic)) {
            return $this->sendError('Mechanic not found');
        }

        $mechanic = $this->mechanicRepository->update($input, $id);

        return $this->sendResponse($mechanic->toArray(), 'Mechanic updated successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/mechanics/{id}",
     *      summary="Remove the specified Mechanic from storage",
     *      tags={"Mechanic"},
     *      description="Delete Mechanic",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Mechanic",
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
        /** @var Mechanic $mechanic */
        $mechanic = $this->mechanicRepository->findWithoutFail($id);

        if (empty($mechanic)) {
            return $this->sendError('Mechanic not found');
        }

        $mechanic->delete();

        return $this->sendResponse($id, 'Mechanic deleted successfully');
    }
}
