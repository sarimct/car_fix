<?php

namespace App\Http\Controllers\Admin;

use App\Helper\BreadcrumbsRegister;
use App\DataTables\Admin\QuotationDataTable;
use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreateQuotationRequest;
use App\Http\Requests\Admin\UpdateQuotationRequest;
use App\Repositories\Admin\NotificationRepository;
use App\Repositories\Admin\QuotationRepository;
use App\Repositories\Admin\RequestForQuotationRepository;
use App\Repositories\Admin\MyCarRepository;
use Flash;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Response;

class QuotationController extends AppBaseController
{
    /** ModelName */
    private $ModelName;

    /** BreadCrumbName */
    private $BreadCrumbName;

    /** @var  QuotationRepository */
    private $quotationRepository;
    private $myCarRepository;
    private $requestForQuotationRepository;
    private $notificationRepository;

    public function __construct(QuotationRepository $quotationRepo, MyCarRepository $myCarRepo, RequestForQuotationRepository $requestForQuotationRepo, NotificationRepository $notificationRepo)
    {
        $this->quotationRepository = $quotationRepo;
        $this->myCarRepository = $myCarRepo;
        $this->requestForQuotationRepository = $requestForQuotationRepo;
        $this->notificationRepository = $notificationRepo;

        $this->ModelName = 'quotations';
        $this->BreadCrumbName = 'Quotation';
    }

    /**
     * Display a listing of the Quotation.
     *
     * @param QuotationDataTable $quotationDataTable
     * @return Response
     */
    public function index(QuotationDataTable $quotationDataTable)
    {
        BreadcrumbsRegister::Register($this->ModelName, $this->BreadCrumbName);
        return $quotationDataTable->render('admin.quotations.index');
    }

    /**
     * Show the form for creating a new Quotation.
     *
     * @return Response
     */
    public function create()
    {
        $cars = $this->requestForQuotationRepository->findWhere(['status' => 10]);

        BreadcrumbsRegister::Register($this->ModelName, $this->BreadCrumbName);
        return view('admin.quotations.create')->with([
            'cars' => $cars,
        ]);
    }

    /**
     * Store a newly created Quotation in storage.
     *
     * @param CreateQuotationRequest $request
     *
     * @return Response
     */
    public function store(CreateQuotationRequest $request)
    {
        $this->quotationRepository->store($request);
        Flash::success('Quotation Sent successfully.');
        return redirect(route('admin.requestForQuotations.index'));
//        return redirect(route('admin.quotations.index'));
    }

    /**
     * Display the specified Quotation.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $quotation = $this->quotationRepository->findWithoutFail($id);

        if (empty($quotation)) {
            Flash::error('Quotation not found');
            return redirect(route('admin.quotations.index'));
        }

        BreadcrumbsRegister::Register($this->ModelName, $this->BreadCrumbName, $quotation);
        return view('admin.quotations.show')->with('quotation', $quotation);
    }

    /**
     * Show the form for editing the specified Quotation.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $quotation = $this->quotationRepository->findWithoutFail($id);

        if (empty($quotation)) {
            Flash::error('Quotation not found');
            return redirect(route('admin.quotations.index'));
        }

        $cars = $this->requestForQuotationRepository->findWhere(['status' => 10]);

//        dd($quotation->quotation_request->id);

        BreadcrumbsRegister::Register($this->ModelName, $this->BreadCrumbName, $quotation);
        return view('admin.quotations.edit')->with([
            'quotation' => $quotation,
            'cars'      => $cars
        ]);
    }

    /**
     * Update the specified Quotation in storage.
     *
     * @param  int $id
     * @param UpdateQuotationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateQuotationRequest $request)
    {
        $quotation = $this->quotationRepository->findWithoutFail($id);

        if (empty($quotation)) {
            Flash::error('Quotation not found');

            return redirect(route('admin.quotations.index'));
        }

        $quotation = $this->quotationRepository->update($request->all(), $id);

        Flash::success('Quotation updated successfully.');

        return redirect(route('admin.quotations.index'));
    }

    /**
     * Remove the specified Quotation from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $quotation = $this->quotationRepository->findWithoutFail($id);

        if (empty($quotation)) {
            Flash::error('Quotation not found');

            return redirect(route('admin.quotations.index'));
        }

        $this->quotationRepository->delete($id);

        Flash::success('Quotation deleted successfully.');

        return redirect(route('admin.quotations.index'));
    }

    public function confirmComplete($id)
    {
        $requestForQuotation = $this->requestForQuotationRepository->findWithoutFail($id);
        if (empty($quotation)) {
            Flash::error('Menu not found');
            return redirect(route('admin.quotations.index'));
        }

        $status_data['status'] = 30;
        $this->requestForQuotationRepository->update($status_data, $id);

        Flash::success('Status Updated.');
        return response('Success');
    }

    public function confirmAcceptQuotation($id)
    {
        $quotation = $this->quotationRepository->findWithoutFail($id);
        if (empty($quotation)) {
            Flash::error('Quotation not found');
            return redirect(route('admin.requestForQuotations.index'));
        }

        $this->quotationRepository->acceptMechanicQuotation($quotation, $this->requestForQuotationRepository, $this->notificationRepository);

        Flash::success('Status Updated.');
        return response('Success');
    }
}
