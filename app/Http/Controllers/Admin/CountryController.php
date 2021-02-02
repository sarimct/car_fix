<?php

namespace App\Http\Controllers\Admin;

use App\Helper\BreadcrumbsRegister;
use App\DataTables\Admin\CountryDataTable;
use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreateCountryRequest;
use App\Http\Requests\Admin\UpdateCountryRequest;
use App\Models\CountryTranslation;
use App\Repositories\Admin\CountryRepository;
use App\Repositories\Admin\CountryTranslationRepository;
use App\Repositories\Admin\LanguageRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class CountryController extends AppBaseController
{
    /** ModelName */
    private $ModelName;

    /** BreadCrumbName */
    private $BreadCrumbName;

    /** @var  CountryRepository */
    private $countryRepository;
    private $languageRepository;
    private $countryTranslationRepository;

    public function __construct(CountryRepository $countryRepo, LanguageRepository $languageRepo, CountryTranslationRepository $countryTranslationRepo)
    {
        $this->countryRepository = $countryRepo;
        $this->languageRepository = $languageRepo;
        $this->countryTranslationRepository = $countryTranslationRepo;

        $this->ModelName = 'countries';
        $this->BreadCrumbName = 'Country';
    }

    /**
     * Display a listing of the Country.
     *
     * @param CountryDataTable $countryDataTable
     * @return Response
     */
    public function index(CountryDataTable $countryDataTable)
    {
        BreadcrumbsRegister::Register($this->ModelName, $this->BreadCrumbName);
        return $countryDataTable->render('admin.countries.index');
    }

    /**
     * Show the form for creating a new Country.
     *
     * @return Response
     */
    public function create()
    {
        BreadcrumbsRegister::Register($this->ModelName, $this->BreadCrumbName);
        return view('admin.countries.create');
    }

    /**
     * Store a newly created Country in storage.
     *
     * @param CreateCountryRequest $request
     *
     * @return Response
     */
    public function store(CreateCountryRequest $request)
    {
        $input = $request->all();

        $country = $this->countryRepository->create($input);
        Flash::success('Country saved successfully.');
        return redirect(route('admin.countries.index'));
    }

    /**
     * Display the specified Country.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $country = $this->countryRepository->findWithoutFail($id);

        if (empty($country)) {
            Flash::error('Country not found');
            return redirect(route('admin.countries.index'));
        }

        BreadcrumbsRegister::Register($this->ModelName, $this->BreadCrumbName, $country);
        return view('admin.countries.show')->with('country', $country);
    }

    /**
     * Show the form for editing the specified Country.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $country = $this->countryRepository->findWithoutFail($id);

        if (empty($country)) {
            Flash::error('Country not found');
            return redirect(route('admin.countries.index'));
        }

        $locales = $this->languageRepository->findWhere(['status' => 1])->all();

        BreadcrumbsRegister::Register($this->ModelName, $this->BreadCrumbName, $country);
        return view('admin.countries.edit')->with([
            'country' => $country,
            'locales' => $locales
        ]);
    }

    /**
     * Update the specified Country in storage.
     *
     * @param  int $id
     * @param UpdateCountryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCountryRequest $request)
    {
        $country = $this->countryRepository->findWithoutFail($id);

        if (empty($country)) {
            Flash::error('Country not found');
            return redirect(route('admin.countries.index'));
        }

        $localeList = [];
        foreach ($country->translations as $translation) {
            $localeList[$translation->id] = $translation->locale;
        }

        foreach ($request->name as $key => $name) {
            if ($name != '') {
                $locale = $this->languageRepository->find($key)->code;
                $update_data['country_id'] = $country->id;
                $update_data['locale'] = $locale;
                $update_data['name'] = $name;

                if (array_search($locale, $localeList)) {
                    $translation_id = array_search($locale, $localeList);
                    $this->countryTranslationRepository->update($update_data, $translation_id);
                } else {
                    $this->countryTranslationRepository->create($update_data);
                }
            }
        }

        $input['country_id'] = $request->country_id;

        $country = $this->countryRepository->update($input, $id);

        Flash::success('Country updated successfully.');

        return redirect(route('admin.countries.index'));
    }

    /**
     * Remove the specified Country from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $country = $this->countryRepository->findWithoutFail($id);

        if (empty($country)) {
            Flash::error('Country not found');

            return redirect(route('admin.countries.index'));
        }

        $this->countryRepository->delete($id);

        Flash::success('Country deleted successfully.');

        return redirect(route('admin.countries.index'));
    }
}
