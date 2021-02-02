<?php

namespace App\Http\Controllers\Admin;

use App\Helper\BreadcrumbsRegister;
use App\DataTables\Admin\CarModelDataTable;
use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreateCarModelRequest;
use App\Http\Requests\Admin\UpdateCarModelRequest;
use App\Repositories\Admin\CarModelRepository;
use App\Repositories\Admin\CarMakerRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class CarModelController extends AppBaseController
{
    /** ModelName */
    private $ModelName;

    /** BreadCrumbName */
    private $BreadCrumbName;

    /** @var  CarModelRepository */
    private $carModelRepository;
    private $carMakerRepository;

    public function __construct(CarModelRepository $carModelRepo, CarMakerRepository $carMakerRepo)
    {
        $this->carModelRepository = $carModelRepo;
        $this->carMakerRepository = $carMakerRepo;

        $this->ModelName = 'carModels';
        $this->BreadCrumbName = 'CarModel';
    }

    /**
     * Display a listing of the CarModel.
     *
     * @param CarModelDataTable $carModelDataTable
     * @return Response
     */
    public function index(CarModelDataTable $carModelDataTable)
    {
        BreadcrumbsRegister::Register($this->ModelName,$this->BreadCrumbName);
        return $carModelDataTable->render('admin.car_models.index');
    }

    /**
     * Show the form for creating a new CarModel.
     *
     * @return Response
     */
    public function create()
    {
        $carMaker = $this->carMakerRepository->all()->pluck('title', 'id');
        BreadcrumbsRegister::Register($this->ModelName,$this->BreadCrumbName);
        return view('admin.car_models.create')->with(['carMaker'=>$carMaker]);
    }

    /**
     * Store a newly created CarModel in storage.
     *
     * @param CreateCarModelRequest $request
     *
     * @return Response
     */
    public function store(CreateCarModelRequest $request)
    {
        $input = $request->all();

        $carModel = $this->carModelRepository->create($input);

        Flash::success('Car Model saved successfully.');

        return redirect(route('admin.carModels.index'));
    }

    /**
     * Display the specified CarModel.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $carModel = $this->carModelRepository->findWithoutFail($id);

        if (empty($carModel)) {
            Flash::error('Car Model not found');

            return redirect(route('admin.carModels.index'));
        }

        BreadcrumbsRegister::Register($this->ModelName,$this->BreadCrumbName, $carModel);
        return view('admin.car_models.show')->with('carModel', $carModel);
    }

    /**
     * Show the form for editing the specified CarModel.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $carModel = $this->carModelRepository->findWithoutFail($id);

        if (empty($carModel)) {
            Flash::error('Car Model not found');
            return redirect(route('admin.carModels.index'));
        }

        $carMaker = $this->carMakerRepository->all()->pluck('title', 'id');

        BreadcrumbsRegister::Register($this->ModelName,$this->BreadCrumbName, $carModel);
        return view('admin.car_models.edit')->with('carModel', $carModel)->with(['carMaker'=>$carMaker]);
    }

    /**
     * Update the specified CarModel in storage.
     *
     * @param  int              $id
     * @param UpdateCarModelRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCarModelRequest $request)
    {
        $carModel = $this->carModelRepository->findWithoutFail($id);

        if (empty($carModel)) {
            Flash::error('Car Model not found');

            return redirect(route('admin.carModels.index'));
        }

        $carModel = $this->carModelRepository->update($request->all(), $id);

        Flash::success('Car Model updated successfully.');

        return redirect(route('admin.carModels.index'));
    }

    /**
     * Remove the specified CarModel from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $carModel = $this->carModelRepository->findWithoutFail($id);

        if (empty($carModel)) {
            Flash::error('Car Model not found');

            return redirect(route('admin.carModels.index'));
        }

        $this->carModelRepository->delete($id);

        Flash::success('Car Model deleted successfully.');

        return redirect(route('admin.carModels.index'));
    }
}
