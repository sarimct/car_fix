<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\CreateCountryAPIRequest;
use App\Http\Requests\Api\UpdateCountryAPIRequest;
use App\Models\Country;
use App\Repositories\Admin\CountryRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\App;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;

/**
 * Class CountryController
 * @package App\Http\Controllers\Api
 */
class CountryAPIController extends AppBaseController
{
    /** @var  CountryRepository */
    private $countryRepository;

    public function __construct(CountryRepository $countryRepo)
    {
        $this->countryRepository = $countryRepo;
    }

    /**
     * @param Request $request
     * @return mixed
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     *
     * @SWG\Get(
     *      path="/countries",
     *      summary="Get a listing of the Countries.",
     *      tags={"Country"},
     *      description="Get all Countries",
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
     *      ),@SWG\Parameter(
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
     *                  @SWG\Items(ref="#/definitions/Country")
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
        $this->countryRepository->pushCriteria(new RequestCriteria($request));
        $this->countryRepository->pushCriteria(new LimitOffsetCriteria($request));
        $countries = $this->countryRepository->all();

        return $this->sendResponse($countries->toArray(), 'Countries retrieved successfully');
    }

    /**
     * @param CreateCountryAPIRequest $request
     * @return Response
     *
     * //@SWG\Post(
     *      path="/countries",
     *      summary="Store a newly created Country in storage",
     *      tags={"Country"},
     *      description="Store Country",
     *      produces={"application/json"},
     *      //@SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Country that should be stored",
     *          required=false,
     *          //@SWG\Schema(ref="#/definitions/Country")
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
     *                  ref="#/definitions/Country"
     *              ),
     *              //@SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateCountryAPIRequest $request)
    {
        $input = $request->all();

        $countries = $this->countryRepository->create($input);

        return $this->sendResponse($countries->toArray(), 'Country saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/countries/{id}",
     *      summary="Display the specified Country",
     *      tags={"Country"},
     *      description="Get Country",
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
     *          description="id of Country",
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
     *                  ref="#/definitions/Country"
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
        /** @var Country $country */
        $country = $this->countryRepository->findWithoutFail($id);

        if (empty($country)) {
            return $this->sendErrorWithData('Country not found');
        }

        return $this->sendResponse($country->toArray(), 'Country retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdateCountryAPIRequest $request
     * @return Response
     *
     * //@SWG\Put(
     *      path="/countries/{id}",
     *      summary="Update the specified Country in storage",
     *      tags={"Country"},
     *      description="Update Country",
     *      produces={"application/json"},
     *      //@SWG\Parameter(
     *          name="id",
     *          description="id of Country",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      //@SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Country that should be updated",
     *          required=false,
     *          //@SWG\Schema(ref="#/definitions/Country")
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
     *                  ref="#/definitions/Country"
     *              ),
     *              //@SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateCountryAPIRequest $request)
    {
        $input = $request->all();

        /** @var Country $country */
        $country = $this->countryRepository->findWithoutFail($id);

        if (empty($country)) {
            return $this->sendErrorWithData('Country not found');
        }

        $country = $this->countryRepository->update($input, $id);

        return $this->sendResponse($country->toArray(), 'Country updated successfully');
    }

    /**
     * @param $id
     * @return mixed
     * @throws \Exception
     *
     * //@SWG\Delete(
     *      path="/countries/{id}",
     *      summary="Remove the specified Country from storage",
     *      tags={"Country"},
     *      description="Delete Country",
     *      produces={"application/json"},
     *      //@SWG\Parameter(
     *          name="id",
     *          description="id of Country",
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
        /** @var Country $country */
        $country = $this->countryRepository->findWithoutFail($id);

        if (empty($country)) {
            return $this->sendErrorWithData('Country not found');
        }

        $country->delete();

        return $this->sendResponse($id, 'Country deleted successfully');
    }
}
