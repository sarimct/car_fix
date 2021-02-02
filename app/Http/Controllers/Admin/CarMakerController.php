<?php

namespace App\Http\Controllers\Admin;

use App\Helper\BreadcrumbsRegister;
use App\DataTables\Admin\CarMakerDataTable;
use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreateCarMakerRequest;
use App\Http\Requests\Admin\UpdateCarMakerRequest;
use App\Repositories\Admin\CarMakerRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class CarMakerController extends AppBaseController
{
    /** ModelName */
    private $ModelName;

    /** BreadCrumbName */
    private $BreadCrumbName;

    /** @var  CarMakerRepository */
    private $carMakerRepository;

    public function __construct(CarMakerRepository $carMakerRepo)
    {
        $this->carMakerRepository = $carMakerRepo;
        $this->ModelName = 'carMakers';
        $this->BreadCrumbName = 'CarMaker';
    }

    /**
     * Display a listing of the CarMaker.
     *
     * @param CarMakerDataTable $carMakerDataTable
     * @return Response
     */
    public function index(CarMakerDataTable $carMakerDataTable)
    {
        BreadcrumbsRegister::Register($this->ModelName,$this->BreadCrumbName);
        return $carMakerDataTable->render('admin.car_makers.index');
    }

    /**
     * Show the form for creating a new CarMaker.
     *
     * @return Response
     */
    public function create()
    {
        BreadcrumbsRegister::Register($this->ModelName,$this->BreadCrumbName);
        return view('admin.car_makers.create');
    }

    /**
     * Store a newly created CarMaker in storage.
     *
     * @param CreateCarMakerRequest $request
     *
     * @return Response
     */
    public function store(CreateCarMakerRequest $request)
    {
        $input = $request->all();

        $carMaker = $this->carMakerRepository->create($input);

        Flash::success('Car Maker saved successfully.');

        return redirect(route('admin.carMakers.index'));
    }

    /**
     * Display the specified CarMaker.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $carMaker = $this->carMakerRepository->findWithoutFail($id);

        if (empty($carMaker)) {
            Flash::error('Car Maker not found');

            return redirect(route('admin.carMakers.index'));
        }

        BreadcrumbsRegister::Register($this->ModelName,$this->BreadCrumbName, $carMaker);
        return view('admin.car_makers.show')->with('carMaker', $carMaker);
    }

    /**
     * Show the form for editing the specified CarMaker.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $carMaker = $this->carMakerRepository->findWithoutFail($id);

        if (empty($carMaker)) {
            Flash::error('Car Maker not found');

            return redirect(route('admin.carMakers.index'));
        }

        BreadcrumbsRegister::Register($this->ModelName,$this->BreadCrumbName, $carMaker);
        return view('admin.car_makers.edit')->with('carMaker', $carMaker);
    }

    /**
     * Update the specified CarMaker in storage.
     *
     * @param  int              $id
     * @param UpdateCarMakerRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCarMakerRequest $request)
    {
        $carMaker = $this->carMakerRepository->findWithoutFail($id);

        if (empty($carMaker)) {
            Flash::error('Car Maker not found');

            return redirect(route('admin.carMakers.index'));
        }

        $carMaker = $this->carMakerRepository->update($request->all(), $id);

        Flash::success('Car Maker updated successfully.');

        return redirect(route('admin.carMakers.index'));
    }

    /**
     * Remove the specified CarMaker from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $carMaker = $this->carMakerRepository->findWithoutFail($id);

        if (empty($carMaker)) {
            Flash::error('Car Maker not found');

            return redirect(route('admin.carMakers.index'));
        }

        $this->carMakerRepository->delete($id);

        Flash::success('Car Maker deleted successfully.');

        return redirect(route('admin.carMakers.index'));
    }
}
