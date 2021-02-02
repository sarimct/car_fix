<?php

namespace App\Http\Controllers\Admin;

use App\Helper\BreadcrumbsRegister;
use App\DataTables\Admin\DriverDataTable;
use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreateDriverRequest;
use App\Http\Requests\Admin\UpdateDriverRequest;
use App\Repositories\Admin\DriverRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class DriverController extends AppBaseController
{
    /** ModelName */
    private $ModelName;

    /** BreadCrumbName */
    private $BreadCrumbName;

    /** @var  DriverRepository */
    private $driverRepository;

    public function __construct(DriverRepository $driverRepo)
    {
        $this->driverRepository = $driverRepo;
        $this->ModelName = 'drivers';
        $this->BreadCrumbName = 'Driver';
    }

    /**
     * Display a listing of the Driver.
     *
     * @param DriverDataTable $driverDataTable
     * @return Response
     */
    public function index(DriverDataTable $driverDataTable)
    {
        BreadcrumbsRegister::Register($this->ModelName,$this->BreadCrumbName);
        return $driverDataTable->render('admin.drivers.index');
    }

    /**
     * Show the form for creating a new Driver.
     *
     * @return Response
     */
    public function create()
    {
        BreadcrumbsRegister::Register($this->ModelName,$this->BreadCrumbName);
        return view('admin.drivers.create');
    }

    /**
     * Store a newly created Driver in storage.
     *
     * @param CreateDriverRequest $request
     *
     * @return Response
     */
    public function store(CreateDriverRequest $request)
    {
        $input = $request->all();

        $driver = $this->driverRepository->create($input);

        Flash::success('Driver saved successfully.');

        return redirect(route('admin.drivers.index'));
    }

    /**
     * Display the specified Driver.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $driver = $this->driverRepository->findWithoutFail($id);

        if (empty($driver)) {
            Flash::error('Driver not found');

            return redirect(route('admin.drivers.index'));
        }

        BreadcrumbsRegister::Register($this->ModelName,$this->BreadCrumbName, $driver);
        return view('admin.drivers.show')->with('driver', $driver);
    }

    /**
     * Show the form for editing the specified Driver.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $driver = $this->driverRepository->findWithoutFail($id);

        if (empty($driver)) {
            Flash::error('Driver not found');

            return redirect(route('admin.drivers.index'));
        }

        BreadcrumbsRegister::Register($this->ModelName,$this->BreadCrumbName, $driver);
        return view('admin.drivers.edit')->with('driver', $driver);
    }

    /**
     * Update the specified Driver in storage.
     *
     * @param  int              $id
     * @param UpdateDriverRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDriverRequest $request)
    {
        $driver = $this->driverRepository->findWithoutFail($id);

        if (empty($driver)) {
            Flash::error('Driver not found');

            return redirect(route('admin.drivers.index'));
        }

        $driver = $this->driverRepository->update($request->all(), $id);

        Flash::success('Driver updated successfully.');

        return redirect(route('admin.drivers.index'));
    }

    /**
     * Remove the specified Driver from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $driver = $this->driverRepository->findWithoutFail($id);

        if (empty($driver)) {
            Flash::error('Driver not found');

            return redirect(route('admin.drivers.index'));
        }

        $this->driverRepository->delete($id);

        Flash::success('Driver deleted successfully.');

        return redirect(route('admin.drivers.index'));
    }
}
