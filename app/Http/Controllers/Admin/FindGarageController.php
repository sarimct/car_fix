<?php

namespace App\Http\Controllers\Admin;

use App\Helper\BreadcrumbsRegister;
use App\DataTables\Admin\FindGarageDataTable;
use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreateFindGarageRequest;
use App\Http\Requests\Admin\UpdateFindGarageRequest;
use App\Repositories\Admin\FindGarageRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class FindGarageController extends AppBaseController
{
    /** ModelName */
    private $ModelName;

    /** BreadCrumbName */
    private $BreadCrumbName;

    /** @var  FindGarageRepository */
    private $findGarageRepository;

    public function __construct(FindGarageRepository $findGarageRepo)
    {
        $this->findGarageRepository = $findGarageRepo;
        $this->ModelName = 'findGarages';
        $this->BreadCrumbName = 'FindGarage';
    }

    /**
     * Display a listing of the FindGarage.
     *
     * @param FindGarageDataTable $findGarageDataTable
     * @return Response
     */
    public function index(FindGarageDataTable $findGarageDataTable)
    {
        BreadcrumbsRegister::Register($this->ModelName,$this->BreadCrumbName);
        return $findGarageDataTable->render('admin.find_garages.index');
    }

    /**
     * Show the form for creating a new FindGarage.
     *
     * @return Response
     */
    public function create()
    {
        BreadcrumbsRegister::Register($this->ModelName,$this->BreadCrumbName);
        return view('admin.find_garages.create');
    }

    /**
     * Store a newly created FindGarage in storage.
     *
     * @param CreateFindGarageRequest $request
     *
     * @return Response
     */
    public function store(CreateFindGarageRequest $request)
    {
        $input = $request->all();

        $findGarage = $this->findGarageRepository->create($input);

        Flash::success('Find Garage saved successfully.');

        return redirect(route('admin.findGarages.index'));
    }

    /**
     * Display the specified FindGarage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $findGarage = $this->findGarageRepository->findWithoutFail($id);

        if (empty($findGarage)) {
            Flash::error('Find Garage not found');

            return redirect(route('admin.findGarages.index'));
        }

        BreadcrumbsRegister::Register($this->ModelName,$this->BreadCrumbName, $findGarage);
        return view('admin.find_garages.show')->with('findGarage', $findGarage);
    }

    /**
     * Show the form for editing the specified FindGarage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $findGarage = $this->findGarageRepository->findWithoutFail($id);

        if (empty($findGarage)) {
            Flash::error('Find Garage not found');

            return redirect(route('admin.findGarages.index'));
        }

        BreadcrumbsRegister::Register($this->ModelName,$this->BreadCrumbName, $findGarage);
        return view('admin.find_garages.edit')->with('findGarage', $findGarage);
    }

    /**
     * Update the specified FindGarage in storage.
     *
     * @param  int              $id
     * @param UpdateFindGarageRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFindGarageRequest $request)
    {
        $findGarage = $this->findGarageRepository->findWithoutFail($id);

        if (empty($findGarage)) {
            Flash::error('Find Garage not found');

            return redirect(route('admin.findGarages.index'));
        }

        $findGarage = $this->findGarageRepository->update($request->all(), $id);

        Flash::success('Find Garage updated successfully.');

        return redirect(route('admin.findGarages.index'));
    }

    /**
     * Remove the specified FindGarage from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $findGarage = $this->findGarageRepository->findWithoutFail($id);

        if (empty($findGarage)) {
            Flash::error('Find Garage not found');

            return redirect(route('admin.findGarages.index'));
        }

        $this->findGarageRepository->delete($id);

        Flash::success('Find Garage deleted successfully.');

        return redirect(route('admin.findGarages.index'));
    }
}
