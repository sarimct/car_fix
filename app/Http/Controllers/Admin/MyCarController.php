<?php

namespace App\Http\Controllers\Admin;

use App\Helper\BreadcrumbsRegister;
use App\DataTables\Admin\MyCarDataTable;
use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreateMyCarRequest;
use App\Http\Requests\Admin\UpdateMyCarRequest;
use App\Repositories\Admin\MyCarRepository;
use App\Repositories\Admin\CarMakerRepository;
use App\Repositories\Admin\CarModelRepository;
use App\Repositories\Admin\RequestForQuotationRepository;
use App\Repositories\Admin\QuotationRepository;
use Illuminate\Support\Facades\Auth;
use Flash;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Response;

class MyCarController extends AppBaseController
{
    /** ModelName */
    private $ModelName;

    /** BreadCrumbName */
    private $BreadCrumbName;

    /** @var  MyCarRepository */
    private $myCarRepository;
    private $carModelRepository;
    private $carMakerRepository;
    private $requestForQuotationRepository;
    private $quotationRepository;

    public function __construct(MyCarRepository $myCarRepo, CarModelRepository $carModelRepo, CarMakerRepository $carMakerRepo, RequestForQuotationRepository $requestForQuotationRepo, QuotationRepository $quotationRepo)
    {
        $this->myCarRepository = $myCarRepo;
        $this->carModelRepository = $carModelRepo;
        $this->carMakerRepository = $carMakerRepo;
        $this->requestForQuotationRepository = $requestForQuotationRepo;
        $this->quotationRepository = $quotationRepo;

        $this->ModelName = 'myCars';
        $this->BreadCrumbName = 'MyCar';
    }

    /**
     * Display a listing of the MyCar.
     *
     * @param MyCarDataTable $myCarDataTable
     * @return Response
     */
    public function index(MyCarDataTable $myCarDataTable)
    {
        BreadcrumbsRegister::Register($this->ModelName, $this->BreadCrumbName);
        return $myCarDataTable->render('admin.my_cars.index');
    }

    /**
     * Show the form for creating a new MyCar.
     *
     * @return Response
     */
    public function create()
    {
        BreadcrumbsRegister::Register($this->ModelName, $this->BreadCrumbName);

        $carMaker = $this->carMakerRepository->pluck('title', 'id')->all();
        $carModel = $this->carModelRepository->pluck('title', 'id')->all();
        return view('admin.my_cars.create')->with([
            'carModel' => $carModel,
            'carMaker' => $carMaker
        ]);
    }

    /**
     * Store a newly created MyCar in storage.
     *
     * @param CreateMyCarRequest $request
     *
     * @return Response
     */
    public function store(CreateMyCarRequest $request)
    {
        $this->myCarRepository->store($request);
        /*$input = $request->all();

        $user = Auth::user();
        $input['driver_id'] = $user->id;
        $data['model_id'] = $input['model_id'];
        $data['registration_no'] = $input['registration_no'];
        $data['year'] = $input['year'];

        $this->myCarRepository->create($input);
        */

        Flash::success('My Car saved successfully.');

        return redirect(route('admin.myCars.index'));
    }

    /**
     * Display the specified MyCar.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $myCar = $this->myCarRepository->findWithoutFail($id);

        if (empty($myCar)) {
            Flash::error('My Car not found');

            return redirect(route('admin.myCars.index'));
        }

        BreadcrumbsRegister::Register($this->ModelName, $this->BreadCrumbName, $myCar);
        return view('admin.my_cars.show')->with('myCar', $myCar);
    }

    /**
     * Show the form for editing the specified MyCar.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $myCar = $this->myCarRepository->findWithoutFail($id);

        if (empty($myCar)) {
            Flash::error('My Car not found');
            return redirect(route('admin.myCars.index'));
        }

        $carMaker = $this->carMakerRepository->all()->pluck('title', 'id');
        $carModel = $this->carModelRepository->all()->pluck('title', 'id');

//        $rfq = $this->requestForQuotationRepository->findWhere(['car_id'=> $id]);
//        dd($rfq[0]->quotations[0]->user->name);

//        dd($myCar->quotationMechanics[0]->user);

        BreadcrumbsRegister::Register($this->ModelName, $this->BreadCrumbName, $myCar);
        return view('admin.my_cars.edit')->with([
            'myCar'    => $myCar,
            'carMaker' => $carMaker,
            'carModel' => $carModel
        ]);
    }

    /**
     * Update the specified MyCar in storage.
     *
     * @param  int $id
     * @param UpdateMyCarRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMyCarRequest $request)
    {
        $myCar = $this->myCarRepository->findWithoutFail($id);

        if (empty($myCar)) {
            Flash::error('My Car not found');

            return redirect(route('admin.myCars.index'));
        }

        $myCar = $this->myCarRepository->update($request->all(), $id);

        Flash::success('My Car updated successfully.');

        return redirect(route('admin.myCars.index'));
    }

    /**
     * Remove the specified MyCar from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $myCar = $this->myCarRepository->findWithoutFail($id);
        if (empty($myCar)) {
            Flash::error('My Car not found');
            return redirect(route('admin.myCars.index'));
        }

        $message = $this->myCarRepository->destroy($id);
        Flash::error($message);
        return redirect(route('admin.myCars.index'));
    }
}
