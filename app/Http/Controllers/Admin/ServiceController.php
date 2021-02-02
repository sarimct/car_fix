<?php

namespace App\Http\Controllers\Admin;

use App\Helper\BreadcrumbsRegister;
use App\DataTables\Admin\ServiceDataTable;
use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreateServiceRequest;
use App\Http\Requests\Admin\UpdateServiceRequest;
use App\Models\ServiceTranslation;
use App\Repositories\Admin\ServiceRepository;
use App\Repositories\Admin\serviceTranslationRepository;
use App\Repositories\Admin\LanguageRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Response;

class ServiceController extends AppBaseController
{
    /** ModelName */
    private $ModelName;

    /** BreadCrumbName */
    private $BreadCrumbName;

    /** @var  ServiceRepository */
    private $serviceRepository;
    private $languageRepository;
    private $serviceTranslationRepository;

    public function __construct(ServiceRepository $serviceRepo, LanguageRepository $languageRepo, serviceTranslationRepository $serviceTranslationRepo)
    {
        $this->serviceRepository = $serviceRepo;
        $this->languageRepository = $languageRepo;
        $this->serviceTranslationRepository = $serviceTranslationRepo;

        $this->ModelName = 'services';
        $this->BreadCrumbName = 'Service';
    }

    /**
     * Display a listing of the Service.
     *
     * @param ServiceDataTable $serviceDataTable
     * @return Response
     */
    public function index(ServiceDataTable $serviceDataTable)
    {
        BreadcrumbsRegister::Register($this->ModelName, $this->BreadCrumbName);
        return $serviceDataTable->render('admin.services.index');
    }

    /**
     * Show the form for creating a new Service.
     *
     * @return Response
     */
    public function create()
    {
        BreadcrumbsRegister::Register($this->ModelName, $this->BreadCrumbName);
        return view('admin.services.create');
    }

    /**
     * Store a newly created Service in storage.
     *
     * @param CreateServiceRequest $request
     *
     * @return Response
     */
    public function store(CreateServiceRequest $request)
    {
        $input = $request->all();

        $service = $this->serviceRepository->create($input);

        Flash::success('Service saved successfully.');

        return redirect(route('admin.services.index'));
    }

    /**
     * Display the specified Service.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {

        $service = $this->serviceRepository->findWithoutFail($id);
        $sub_service = $this->serviceRepository->all()->where('parent_id','=',$id)->pluck('name');

        if (empty($service)) {
            Flash::error('Service not found');
            return redirect(route('admin.services.index'));
        }

        BreadcrumbsRegister::Register($this->ModelName,$this->BreadCrumbName, $service);
        return view('admin.services.show')->with([
            'service'       => $service,
            'sub_service'   => $sub_service
        ]);
    }

    /**
     * Show the form for editing the specified Service.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $service = $this->serviceRepository->findWithoutFail($id);

        if (empty($service)) {
            Flash::error('Service not found');

            return redirect(route('admin.services.index'));
        }

        $locales = $this->languageRepository->findWhere(['status' => 1])->all();

        BreadcrumbsRegister::Register($this->ModelName,$this->BreadCrumbName, $service);
        return view('admin.services.edit')->with([
            'service'=> $service,
            'locales'   => $locales
        ]);
    }

    /**
     * Update the specified Service in storage.
     *
     * @param  int $id
     * @param UpdateServiceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateServiceRequest $request)
    {
        $service = $this->serviceRepository->findWithoutFail($id);

        if (empty($service)) {
            Flash::error('Service not found');

            return redirect(route('admin.services.index'));
        }
        $localeList = [];
        foreach ($service->translations as $translation) {
            $localeList[$translation->id] = $translation->locale;
        }

        foreach ($request->name as $key => $name) {
            if ($name != '') {
                $locale = $this->languageRepository->find($key)->code;
                $update_data['service_id'] = $service->id;
                $update_data['locale'] = $locale;
                $update_data['name'] = $name;

                if (array_search($locale, $localeList)) {
                    $translation_id = array_search($locale, $localeList);
                    $this->serviceTranslationRepository->update($update_data,$translation_id);
                } else {
                    $this->serviceTranslationRepository->create($update_data);
                }
            }
        }

        $input['country_id'] = $request->country_id;

        $service = $this->serviceRepository->update($input, $id);

        Flash::success('Service updated successfully.');

        return redirect(route('admin.services.index'));
    }

    /**
     * Remove the specified Service from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $service = $this->serviceRepository->findWithoutFail($id);

        if (empty($service)) {
            Flash::error('Service not found');

            return redirect(route('admin.services.index'));
        }

        $this->serviceRepository->delete($id);

        Flash::success('Service deleted successfully.');

        return redirect(route('admin.services.index'));
    }
}
