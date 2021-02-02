<?php

namespace App\Http\Controllers\Api;

use App\Criteria\CityCriteria;
use App\Http\Requests\Api\CreateCityAPIRequest;
use App\Http\Requests\Api\UpdateCityAPIRequest;
use App\Models\City;
use App\Repositories\Admin\CityRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Response;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;

/**
 * Class CityController
 * @package App\Http\Controllers\Api
 */
class CityAPIController extends AppBaseController
{
    /** @var  CityRepository */
    private $cityRepository;

    public function __construct(CityRepository $cityRepo)
    {
        $this->cityRepository = $cityRepo;
    }

    /**
     * @param Request $request
     * @return mixed
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     *
     * @SWG\Get(
     *      path="/cities",
     *      summary="Get a listing of the Cities.",
     *      tags={"City"},
     *      description="Get all Cities",
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
     *      @SWG\Parameter(
     *          name="offset",
     *          description="Change the Default Offset of the Query. If not found, 0 will be used.",
     *          type="integer",
     *          required=false,
     *          in="query"
     *      ),
     *      @SWG\Parameter(
     *          name="country_id",
     *          description="Id of country, cities list.",
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
     *                  @SWG\Items(ref="#/definitions/City")
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
        $this->cityRepository->pushCriteria(new RequestCriteria($request));
        $this->cityRepository->pushCriteria(new LimitOffsetCriteria($request));
        $this->cityRepository->pushCriteria(new CityCriteria($request));
        $cities = $this->cityRepository->all();

        return $this->sendResponse($cities->toArray(), 'Cities retrieved successfully');
    }

    /**
     * @param CreateCityAPIRequest $request
     * @return Response
     *
     * //@SWG\Post(
     *      path="/cities",
     *      summary="Store a newly created City in storage",
     *      tags={"City"},
     *      description="Store City",
     *      produces={"application/json"},
     *      //@SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="City that should be stored",
     *          required=false,
     *          //@SWG\Schema(ref="#/definitions/City")
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
     *                  ref="#/definitions/City"
     *              ),
     *              //@SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateCityAPIRequest $request)
    {
        $input = $request->all();

        $cities = $this->cityRepository->create($input);

        return $this->sendResponse($cities->toArray(), 'City saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/cities/{id}",
     *      summary="Display the specified City",
     *      tags={"City"},
     *      description="Get City",
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
     *          description="id of City",
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
     *                  ref="#/definitions/City"
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
        /** @var City $city */
        $city = $this->cityRepository->findWithoutFail($id);

        if (empty($city)) {
            return $this->sendErrorWithData('City not found');
        }

        return $this->sendResponse($city->toArray(), 'City retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdateCityAPIRequest $request
     * @return Response
     *
     * //@SWG\Put(
     *      path="/cities/{id}",
     *      summary="Update the specified City in storage",
     *      tags={"City"},
     *      description="Update City",
     *      produces={"application/json"},
     *      //@SWG\Parameter(
     *          name="id",
     *          description="id of City",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      //@SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="City that should be updated",
     *          required=false,
     *          //@SWG\Schema(ref="#/definitions/City")
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
     *                  ref="#/definitions/City"
     *              ),
     *              //@SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateCityAPIRequest $request)
    {
        $input = $request->all();

        /** @var City $city */
        $city = $this->cityRepository->findWithoutFail($id);

        if (empty($city)) {
            return $this->sendErrorWithData('City not found');
        }

        $city = $this->cityRepository->update($input, $id);

        return $this->sendResponse($city->toArray(), 'City updated successfully');
    }

    /**
     * @param $id
     * @return mixed
     * @throws \Exception
     *
     * //@SWG\Delete(
     *      path="/cities/{id}",
     *      summary="Remove the specified City from storage",
     *      tags={"City"},
     *      description="Delete City",
     *      produces={"application/json"},
     *      //@SWG\Parameter(
     *          name="id",
     *          description="id of City",
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
        /** @var City $city */
        $city = $this->cityRepository->findWithoutFail($id);

        if (empty($city)) {
            return $this->sendErrorWithData('City not found');
        }

        $city->delete();

        return $this->sendResponse($id, 'City deleted successfully');
    }
}
