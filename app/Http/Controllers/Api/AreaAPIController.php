<?php

namespace App\Http\Controllers\Api;

use App\Criteria\AreaCriteria;
use App\Http\Requests\Api\CreateAreaAPIRequest;
use App\Http\Requests\Api\UpdateAreaAPIRequest;
use App\Models\Area;
use App\Repositories\Admin\AreaRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Response;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;

/**
 * Class AreaController
 * @package App\Http\Controllers\Api
 */
class AreaAPIController extends AppBaseController
{
    /** @var  AreaRepository */
    private $areaRepository;

    public function __construct(AreaRepository $areaRepo)
    {
        $this->areaRepository = $areaRepo;
    }

    /**
     * @param Request $request
     * @return mixed
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     *
     * @SWG\Get(
     *      path="/areas",
     *      summary="Get a listing of the Areas.",
     *      tags={"Area"},
     *      description="Get all Areas",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="Authorization",
     *          description="User Auth Token{ Bearer ABC123 }",
     *          type="string",
     *          required=false,
     *          default="Bearer ABC123",
     *          in="header"
     *      ),
     *      @SWG\Parameter(
     *          name="locale",
     *          description="Response Locale of this module (Default en)",
     *          type="string",
     *          required=false,
     *          in="query"
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
     *      @SWG\Parameter(
     *          name="city_id",
     *          description="Id of city, areas list.",
     *          type="integer",
     *          required=true,
     *          default=1,
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
     *                  @SWG\Items(ref="#/definitions/Area")
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
        App::setLocale($request->get('locale', 'en'));

        $this->areaRepository->pushCriteria(new RequestCriteria($request));
        $this->areaRepository->pushCriteria(new LimitOffsetCriteria($request));
        $this->areaRepository->pushCriteria(new AreaCriteria($request));
        $areas = $this->areaRepository->all();

        return $this->sendResponse($areas->toArray(), 'Areas retrieved successfully');
    }

    /**
     * @param CreateAreaAPIRequest $request
     * @return Response
     *
     * //@SWG\Post(
     *      path="/areas",
     *      summary="Store a newly created Area in storage",
     *      tags={"Area"},
     *      description="Store Area",
     *      produces={"application/json"},
     *      //@SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Area that should be stored",
     *          required=false,
     *          //@SWG\Schema(ref="#/definitions/Area")
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
     *                  ref="#/definitions/Area"
     *              ),
     *              //@SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateAreaAPIRequest $request)
    {
        $input = $request->all();
        $areas = $this->areaRepository->create($input);
        return $this->sendResponse($areas->toArray(), 'Area saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/areas/{id}",
     *      summary="Display the specified Area",
     *      tags={"Area"},
     *      description="Get Area",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="Authorization",
     *          description="User Auth Token{ Bearer ABC123 }",
     *          type="string",
     *          required=false,
     *          default="Bearer ABC123",
     *          in="header"
     *      ),
     *      @SWG\Parameter(
     *          name="locale",
     *          description="Response Locale of this module (Default en)",
     *          type="string",
     *          required=false,
     *          in="query"
     *      ),
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Area",
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
     *                  ref="#/definitions/Area"
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
        App::setLocale($request->get('locale', 'en'));
        /** @var Area $area */
        $area = $this->areaRepository->findWithoutFail($id);
        if (empty($area)) {
            return $this->sendErrorWithData('Area not found');
        }
        return $this->sendResponse($area->toArray(), 'Area retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdateAreaAPIRequest $request
     * @return Response
     *
     * //@SWG\Put(
     *      path="/areas/{id}",
     *      summary="Update the specified Area in storage",
     *      tags={"Area"},
     *      description="Update Area",
     *      produces={"application/json"},
     *      //@SWG\Parameter(
     *          name="id",
     *          description="id of Area",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      //@SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Area that should be updated",
     *          required=false,
     *          //@SWG\Schema(ref="#/definitions/Area")
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
     *                  ref="#/definitions/Area"
     *              ),
     *              //@SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateAreaAPIRequest $request)
    {
        $input = $request->all();

        /** @var Area $area */
        $area = $this->areaRepository->findWithoutFail($id);

        if (empty($area)) {
            return $this->sendErrorWithData('Area not found');
        }

        $area = $this->areaRepository->update($input, $id);

        return $this->sendResponse($area->toArray(), 'Area updated successfully');
    }

    /**
     * @param $id
     * @return mixed
     * @throws \Exception
     *
     * //@SWG\Delete(
     *      path="/areas/{id}",
     *      summary="Remove the specified Area from storage",
     *      tags={"Area"},
     *      description="Delete Area",
     *      produces={"application/json"},
     *      //@SWG\Parameter(
     *          name="id",
     *          description="id of Area",
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
        /** @var Area $area */
        $area = $this->areaRepository->findWithoutFail($id);

        if (empty($area)) {
            return $this->sendErrorWithData('Area not found');
        }

        $area->delete();

        return $this->sendResponse($id, 'Area deleted successfully');
    }
}
