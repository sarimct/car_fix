<?php

namespace App\Http\Controllers\Admin;

use App\Helper\BreadcrumbsRegister;
use App\DataTables\Admin\CityDataTable;
use App\Http\Requests\Admin;
use App\Models\CityTranslation;
use App\Http\Requests\Admin\CreateCityRequest;
use App\Http\Requests\Admin\UpdateCityRequest;
use App\Models\CountryTranslation;
use App\Repositories\Admin\CityRepository;
use App\Repositories\Admin\CountryRepository;
use App\Repositories\Admin\LanguageRepository;
use App\Repositories\Admin\CityTranslationRepository;
use App\Repositories\Admin\CountryTranslationRepository;

use Flash;
use App\Http\Controllers\AppBaseController;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Response;

class CityController extends AppBaseController
{
    /** ModelName */
    private $ModelName;

    /** BreadCrumbName */
    private $BreadCrumbName;

    /** @var  CityRepository */
    private $cityRepository;
    private $countryRepository;
    private $languageRepository;
    private $cityTranslationRepository;
    private $countryTranslationRepository;

    public function __construct(CityRepository $cityRepo, CountryRepository $countryRepo, LanguageRepository $languageRepo, CityTranslationRepository $cityTranslationRepo)
    {
        $this->cityRepository = $cityRepo;
        $this->countryRepository = $countryRepo;
        $this->languageRepository = $languageRepo;
        $this->cityTranslationRepository = $cityTranslationRepo;

        $this->ModelName = 'cities';
        $this->BreadCrumbName = 'City';
    }

    /**
     * Display a listing of the City.
     *
     * @param CityDataTable $cityDataTable
     * @return Response
     */
    public function index(CityDataTable $cityDataTable)
    {
        BreadcrumbsRegister::Register($this->ModelName, $this->BreadCrumbName);
        return $cityDataTable->render('admin.cities.index');
    }

    /**
     * Show the form for creating a new City.
     *
     * @return Response
     */
    public function create()
    {
        $countries = $this->countryRepository->all()->pluck('name', 'id');

        BreadcrumbsRegister::Register($this->ModelName, $this->BreadCrumbName);
        return view('admin.cities.create')->with(['countries' => $countries]);
    }

    /**
     * Store a newly created City in storage.
     *
     * @param CreateCityRequest $request
     *
     * @return Response
     */
    public function store(CreateCityRequest $request)
    {
        $input = $request->all();

        $city = $this->cityRepository->create($input);

        Flash::success('City saved successfully.');

        return redirect(route('admin.cities.index'));
    }

    /**
     * Display the specified City.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $city = $this->cityRepository->findWithoutFail($id);

        if (empty($city)) {
            Flash::error('City not found');
            return redirect(route('admin.cities.index'));
        }

        $country = $this->countryRepository->all()->where('id', '=', $id)->first();
//        $country->getLocale();
//            dd(App::getLocale($country));
//        $country = $this->countryRepository->all()->where('locale', App::getLocale())->first();
//        $country = App::getLocale($country);
//        $c = $country->App::getLocale();

        BreadcrumbsRegister::Register($this->ModelName, $this->BreadCrumbName, $city);
        return view('admin.cities.show')->with([
            'city'    => $city,
            'country' => $country
        ]);
    }

    /**
     * Show the form for editing the specified City.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $city = $this->cityRepository->findWithoutFail($id);

        if (empty($city)) {
            Flash::error('City not found');
            return redirect(route('admin.cities.index'));
        }
        $countries = $this->countryRepository->all()->pluck('name', 'id');
        $locales = $this->languageRepository->findWhere(['status' => 1])->all();

        BreadcrumbsRegister::Register($this->ModelName, $this->BreadCrumbName, $city);
        return view('admin.cities.edit')->with([
            'city'      => $city,
            'countries' => $countries,
            'locales'   => $locales
        ]);
    }

    /**
     * Update the specified City in storage.
     *
     * @param  int $id
     * @param UpdateCityRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCityRequest $request)
    {
        $city = $this->cityRepository->findWithoutFail($id);

        if (empty($city)) {
            Flash::error('City not found');
            return redirect(route('admin.cities.index'));
        }

        $localeList = [];
        foreach ($city->translations as $translation) {
            $localeList[$translation->id] = $translation->locale;
        }

        foreach ($request->name as $key => $name) {
            if ($name != '') {
                $locale = $this->languageRepository->find($key)->code;
                $update_data['city_id'] = $city->id;
                $update_data['locale'] = $locale;
                $update_data['name'] = $name;

                if (array_search($locale, $localeList)) {
                    $translation_id = array_search($locale, $localeList);
                    $this->cityTranslationRepository->update($update_data, $translation_id);
                } else {
                    $this->cityTranslationRepository->create($update_data);
                }
            }
        }

        $input['country_id'] = $request->country_id;

        $city = $this->cityRepository->update($input, $id);

        Flash::success('City updated successfully.');

        return redirect(route('admin.cities.index'));
    }

    /**
     * Remove the specified City from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $city = $this->cityRepository->findWithoutFail($id);

        if (empty($city)) {
            Flash::error('City not found');

            return redirect(route('admin.cities.index'));
        }

        $this->cityRepository->delete($id);

        Flash::success('City deleted successfully.');

        return redirect(route('admin.cities.index'));
    }
}
