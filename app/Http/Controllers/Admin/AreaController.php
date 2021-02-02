<?php

namespace App\Http\Controllers\Admin;

use App\Helper\BreadcrumbsRegister;
use App\DataTables\Admin\AreaDataTable;
use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreateAreaRequest;
use App\Http\Requests\Admin\UpdateAreaRequest;
//use App\Models\City;
use App\Repositories\Admin\AreaRepository;
use App\Repositories\Admin\AreaTranslationRepository;
use App\Repositories\Admin\CityRepository;
use App\Repositories\Admin\LanguageRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class AreaController extends AppBaseController
{
    /** ModelName */
    private $ModelName;

    /** BreadCrumbName */
    private $BreadCrumbName;

    /** @var  AreaRepository */
    private $areaRepository;
    private $cityRepository;
    private $languageRepository;
    private $areaTranslationRepository;

    public function __construct(AreaRepository $areaRepo, CityRepository $cityRepo, LanguageRepository $languageRepo, AreaTranslationRepository $areaTranslationRepo)
    {
        $this->areaRepository = $areaRepo;
        $this->cityRepository = $cityRepo;
        $this->languageRepository = $languageRepo;
        $this->areaTranslationRepository = $areaTranslationRepo;

        $this->ModelName = 'areas';
        $this->BreadCrumbName = 'Area';
    }

    /**
     * Display a listing of the Area.
     *
     * @param AreaDataTable $areaDataTable
     * @return Response
     */
    public function index(AreaDataTable $areaDataTable)
    {
        BreadcrumbsRegister::Register($this->ModelName, $this->BreadCrumbName);
        return $areaDataTable->render('admin.areas.index');
    }

    /**
     * Show the form for creating a new Area.
     *
     * @return Response
     */
    public function create()
    {
        $cities = $this->cityRepository->all()->pluck('name', 'id');

        BreadcrumbsRegister::Register($this->ModelName, $this->BreadCrumbName);
        return view('admin.areas.create')->with(['cities' => $cities]);
    }

    /**
     * Store a newly created Area in storage.
     *
     * @param CreateAreaRequest $request
     *
     * @return Response
     */
    public function store(CreateAreaRequest $request)
    {
        $input = $request->all();
        $area = $this->areaRepository->create($input);
        Flash::success('Area saved successfully.');
        return redirect(route('admin.areas.index'));
    }

    /**
     * Display the specified Area.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $area = $this->areaRepository->findWithoutFail($id);

        if (empty($area)) {
            Flash::error('Area not found');

            return redirect(route('admin.areas.index'));
        }

        BreadcrumbsRegister::Register($this->ModelName, $this->BreadCrumbName, $area);
        return view('admin.areas.show')->with('area', $area);
    }

    /**
     * Show the form for editing the specified Area.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $area = $this->areaRepository->findWithoutFail($id);

        if (empty($area)) {
            Flash::error('Area not found');

            return redirect(route('admin.areas.index'));
        }
        $cities = $this->cityRepository->all()->pluck('name', 'id');
        $locales = $this->languageRepository->findWhere(['status' => 1])->all();

        BreadcrumbsRegister::Register($this->ModelName, $this->BreadCrumbName, $area);
        return view('admin.areas.edit')->with([
            'area'    => $area,
            'cities'  => $cities,
            'locales' => $locales
        ]);
    }

    /**
     * Update the specified Area in storage.
     *
     * @param  int $id
     * @param UpdateAreaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAreaRequest $request)
    {
        $area = $this->areaRepository->findWithoutFail($id);

        if (empty($area)) {
            Flash::error('Area not found');
            return redirect(route('admin.areas.index'));
        }

        $localeList = [];
        foreach ($area->translations as $translation) {
            $localeList[$translation->id] = $translation->locale;
        }

        foreach ($request->name as $key => $name) {
            if ($name != '') {
                $locale = $this->languageRepository->find($key)->code;
                $update_data['area_id'] = $area->id;
                $update_data['locale'] = $locale;
                $update_data['name'] = $name;

                if (array_search($locale, $localeList)) {
                    $translation_id = array_search($locale, $localeList);
                    $this->areaTranslationRepository->update($update_data, $translation_id);
                } else {
                    $this->areaTranslationRepository->create($update_data);
                }
            }
        }

        $input['city_id'] = $request->city_id;
        $area = $this->areaRepository->update($input, $id);

        Flash::success('Area updated successfully.');
        return redirect(route('admin.areas.index'));
    }

    /**
     * Remove the specified Area from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $area = $this->areaRepository->findWithoutFail($id);

        if (empty($area)) {
            Flash::error('Area not found');

            return redirect(route('admin.areas.index'));
        }

        $this->areaRepository->delete($id);

        Flash::success('Area deleted successfully.');

        return redirect(route('admin.areas.index'));
    }
}
