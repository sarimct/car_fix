<?php

namespace App\Http\Controllers\Admin;

use App\Helper\BreadcrumbsRegister;
use App\DataTables\Admin\MechanicDataTable;
use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreateMechanicRequest;
use App\Http\Requests\Admin\UpdateMechanicRequest;
use App\Repositories\Admin\MechanicRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class MechanicController extends AppBaseController
{
    /** ModelName */
    private $ModelName;

    /** BreadCrumbName */
    private $BreadCrumbName;

    /** @var  MechanicRepository */
    private $mechanicRepository;

    public function __construct(MechanicRepository $mechanicRepo)
    {
        $this->mechanicRepository = $mechanicRepo;
        $this->ModelName = 'mechanics';
        $this->BreadCrumbName = 'Mechanic';
    }

    /**
     * Display a listing of the Mechanic.
     *
     * @param MechanicDataTable $mechanicDataTable
     * @return Response
     */
    public function index(MechanicDataTable $mechanicDataTable)
    {
        BreadcrumbsRegister::Register($this->ModelName,$this->BreadCrumbName);
        return $mechanicDataTable->render('admin.mechanics.index');
    }

    /**
     * Show the form for creating a new Mechanic.
     *
     * @return Response
     */
    public function create()
    {
        BreadcrumbsRegister::Register($this->ModelName,$this->BreadCrumbName);
        return view('admin.mechanics.create');
    }

    /**
     * Store a newly created Mechanic in storage.
     *
     * @param CreateMechanicRequest $request
     *
     * @return Response
     */
    public function store(CreateMechanicRequest $request)
    {
        $input = $request->all();

        $mechanic = $this->mechanicRepository->create($input);

        Flash::success('Mechanic saved successfully.');

        return redirect(route('admin.mechanics.index'));
    }

    /**
     * Display the specified Mechanic.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mechanic = $this->mechanicRepository->findWithoutFail($id);

        if (empty($mechanic)) {
            Flash::error('Mechanic not found');

            return redirect(route('admin.mechanics.index'));
        }

        BreadcrumbsRegister::Register($this->ModelName,$this->BreadCrumbName, $mechanic);
        return view('admin.mechanics.show')->with('mechanic', $mechanic);
    }

    /**
     * Show the form for editing the specified Mechanic.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mechanic = $this->mechanicRepository->findWithoutFail($id);

        if (empty($mechanic)) {
            Flash::error('Mechanic not found');

            return redirect(route('admin.mechanics.index'));
        }

        BreadcrumbsRegister::Register($this->ModelName,$this->BreadCrumbName, $mechanic);
        return view('admin.mechanics.edit')->with('mechanic', $mechanic);
    }

    /**
     * Update the specified Mechanic in storage.
     *
     * @param  int              $id
     * @param UpdateMechanicRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMechanicRequest $request)
    {
        $mechanic = $this->mechanicRepository->findWithoutFail($id);

        if (empty($mechanic)) {
            Flash::error('Mechanic not found');

            return redirect(route('admin.mechanics.index'));
        }

        $mechanic = $this->mechanicRepository->update($request->all(), $id);

        Flash::success('Mechanic updated successfully.');

        return redirect(route('admin.mechanics.index'));
    }

    /**
     * Remove the specified Mechanic from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mechanic = $this->mechanicRepository->findWithoutFail($id);

        if (empty($mechanic)) {
            Flash::error('Mechanic not found');

            return redirect(route('admin.mechanics.index'));
        }

        $this->mechanicRepository->delete($id);

        Flash::success('Mechanic deleted successfully.');

        return redirect(route('admin.mechanics.index'));
    }
}
