<?php

namespace App\Http\Controllers\Admin;

use App\Events\AcceptQuotationEvent;
use App\Events\CompleteJobEvent;
use App\Helper\BreadcrumbsRegister;
use App\DataTables\Admin\RequestForQuotationDataTable;
use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreateRequestForQuotationRequest;
use App\Http\Requests\Admin\UpdateRequestForQuotationRequest;
use App\Jobs\SendPushNotification;
use App\Models\Notification;
use App\Models\NotificationUser;
use App\Models\RequestForQuotation;
use App\Repositories\Admin\NotificationRepository;
use App\Repositories\Admin\RequestForQuotationRepository;
use App\Repositories\Admin\MyCarRepository;
use App\Repositories\Admin\CarModelRepository;
use App\Repositories\Admin\CountryRepository;
use App\Repositories\Admin\CityRepository;
use App\Repositories\Admin\AreaRepository;
use App\Repositories\Admin\ServiceRepository;
use App\Repositories\Admin\UserRepository;
use App\Repositories\Admin\QuotationRepository;
use App\Repositories\Admin\ReviewRepository;
use Gregwar\Image\Image;
use Illuminate\Support\Facades\Auth;
use App\Models\RequestForQuotationMedia;
use App\Models\RequestForQuotationPending;
use App\Repositories\Admin\MechanicServiceRepository;
use App\Repositories\Admin\MessageRepository;
use App\Repositories\Admin\ThreadMessageRepository;
use App\Repositories\Admin\ThreadRepository;
use App\Repositories\Admin\ThreadUserRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Response;
use Config;

class RequestForQuotationController extends AppBaseController
{
    /** ModelName */
    private $ModelName;

    /** BreadCrumbName */
    private $BreadCrumbName;

    /** @var  RequestForQuotationRepository */
    private $requestForQuotationRepository, $myCarRepository, $carModelRepository, $countryRepository, $cityRepository;
    private $areaRepository, $serviceRepository, $quotationRepository, $reviewRepository, $userRepository;
    private $mechanicServiceRepository, $messageRepository, $threadMessageRepository, $threadRepository, $threadUserRepository;
    private $notificationRepository;


    public function __construct(RequestForQuotationRepository $requestForQuotationRepo, MyCarRepository $myCarRepo, CarModelRepository $carModelRepo, CountryRepository $countryRepo, CityRepository $cityRepo, AreaRepository $areaRepo, ServiceRepository $serviceRepo, QuotationRepository $quotationRepo, ReviewRepository $reviewRepo, UserRepository $userRepo, MessageRepository $messageRepo, ThreadMessageRepository $threadMessageRepo, ThreadRepository $threadRepo, ThreadUserRepository $threadUserRepo, MechanicServiceRepository $mechanicServiceRepo, NotificationRepository $notificationRepo)
    {
        $this->requestForQuotationRepository = $requestForQuotationRepo;
        $this->myCarRepository = $myCarRepo;
        $this->carModelRepository = $carModelRepo;
        $this->countryRepository = $countryRepo;
        $this->cityRepository = $cityRepo;
        $this->areaRepository = $areaRepo;
        $this->serviceRepository = $serviceRepo;
        $this->quotationRepository = $quotationRepo;
        $this->reviewRepository = $reviewRepo;
        $this->userRepository = $userRepo;
        $this->mechanicServiceRepository = $mechanicServiceRepo;
        $this->messageRepository = $messageRepo;
        $this->threadMessageRepository = $threadMessageRepo;
        $this->threadRepository = $threadRepo;
        $this->threadUserRepository = $threadUserRepo;
        $this->notificationRepository = $notificationRepo;

        $this->ModelName = 'requestForQuotations';
        $this->BreadCrumbName = 'Jobs';
    }

    /**
     * Display a listing of the RequestForQuotation.
     *
     * @param RequestForQuotationDataTable $requestForQuotationDataTable
     * @return Response
     */
    public function index(RequestForQuotationDataTable $requestForQuotationDataTable)
    {
        BreadcrumbsRegister::Register($this->ModelName, $this->BreadCrumbName);
        return $requestForQuotationDataTable->render('admin.request_for_quotations.index', ['title' => $this->BreadCrumbName]);
    }

    /**
     * Show the form for creating a new RequestForQuotation.
     *
     * @return Response
     */
    public function create()
    {
        $user = Auth::user();
        $driverCars = [];
        $cars = $this->myCarRepository->findWhere(['driver_id' => $user->id]);
        if(isset($cars)){
            foreach ($cars as $car) {
                $driverCars[$car->id] = $car->carModel->maker->title . '/' . $car->carModel->title . '(' . $car->year . ') - ' . $car->registration_no;
            }
        }

        //dd($driverCars);
        $countries = $this->countryRepository->all()->pluck('name', 'id');
        $cities = $this->cityRepository->all()->pluck('name', 'id');
        $areas = $this->areaRepository->all()->pluck('name', 'id');
        $services = $this->serviceRepository->findWhere(['parent_id' => 0]);
        $sub_services = $this->serviceRepository->all()->pluck('name', 'id');

        BreadcrumbsRegister::Register($this->ModelName, $this->BreadCrumbName);
        return view('admin.request_for_quotations.create')->with([
            'driverCars'   => $driverCars,
            'cars'         => $cars,
            'countries'    => $countries,
            'cities'       => $cities,
            'areas'        => $areas,
            'services'     => $services,
            'sub_services' => $sub_services,
            'title'        => $this->BreadCrumbName
        ]);
    }

    /**
     * Store a newly created RequestForQuotation in storage.
     *
     * @param CreateRequestForQuotationRequest $request
     *
     * @return Response
     */
    public function store(CreateRequestForQuotationRequest $request)
    {
        $this->requestForQuotationRepository->saveRecord($request, $this->serviceRepository, $this->mechanicServiceRepository, $this->notificationRepository);
        Flash::success($this->BreadCrumbName . 'saved successfully.');
        return redirect(route('admin.requestForQuotations.index'));
    }

    /**
     * Display the specified RequestForQuotation.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $user = Auth::user();
        $myQoutes = $mechanic = $review = $message = $return = $threads = '';

        $requestForQuotation = $this->requestForQuotationRepository->findWithoutFail($id);
        if (empty($requestForQuotation)) {
            Flash::error('Request For Quotation not found');
            return redirect(route('admin.requestForQuotations.index'));
        }

        $quotation = $this->quotationRepository->findWhere(['quotation_request_id' => $id, 'status' => 20])->first();

        if (!empty($quotation->id)) {
            $review = $this->reviewRepository->findWhere(['quotation_id' => $quotation->id])->pluck('status')->first();
        }
        $myQoutes = $this->quotationRepository->findWhere(['quotation_request_id' => $id, 'mechanic_id' => Auth::id()])->first();

        $threadId = $this->threadRepository->getThreadId($user->id, $requestForQuotation->car->driver->id);

        if (!empty($threadId)) {
            $threads = $this->messageRepository->findWithoutFail($threadId->id);
        } else {
            $threads = [];
        }

        #Update Notification status to read
        $notifications = $user->notifications()->where(['ref_id' => $id])->get();
        if (!empty($notifications)) {
            foreach ($notifications as $notification) {
                $notificationUser = NotificationUser::where(['notification_id' => $notification->id, 'user_id' => $user->id])->first();
                $notificationUser->status = Notification::DELIVERY_STATUS_READ;
                $notificationUser->save();
            }
        }


        BreadcrumbsRegister::Register($this->ModelName, $this->BreadCrumbName, $requestForQuotation);
        if (Auth::user()->hasRole('mechanic')) {
            $return = view('admin.request_for_quotations.mechanic_show_fields')->with([
                'requestForQuotation' => $requestForQuotation,
                'myQoutes'            => $myQoutes,
                'review'              => $review,
                'messages'            => $threads,
                'title'               => $this->BreadCrumbName
            ]);
        } else if (Auth::user()->hasRole('driver')) {
            if (!empty($quotation)) {
                $mechanic = $quotation->user; // receiver
                $threads = $this->threadRepository->getThreadId($user->id, $mechanic->id);
            }

//            dd($mechanic->company->avg_rating);

            $return = view('admin.request_for_quotations.show')->with([
                'requestForQuotation' => $requestForQuotation,
                'review'              => $review,
                'quotation'           => $quotation,
                'mechanic'            => $mechanic,
                'messages'            => $threads,
                'title'               => $this->BreadCrumbName
            ]);
        }
        return $return;
    }

    #TODO: request_id not needed, as we have quotation id, we can get request id from it
    public function confirmAcceptQuotation($quotation_id, $request_id)
    {
        $quotationRepository = $this->quotationRepository->findWithoutFail($quotation_id);
        if (empty($quotationRepository)) {
            Flash::error('Property not found');
            return redirect(route('admin.requestForQuotations.index'));
        }


        $referral = $this->quotationRepository->findWhere(['quotation_request_id' => $request_id]);
        foreach ($referral as $item) {
            $item->status = 30;
            $item->save();
        }

        $accept_data['status'] = 20;
        $quotation = $this->quotationRepository->update($accept_data, $quotation_id);

        #TODO: request status is not updating
        $job = $this->requestForQuotationRepository->update($accept_data, $request_id);

        $notification = $this->notificationRepository->saveRecord([
            'url'         => 'admin/requestForQuotations/' . $request_id,
            'ref_id'      => $request_id,
            'message'     => Notification::$ACTION_TYPE_MESSAGE[Notification::ACTION_TYPE_QUOTATION_ACCEPTED],
            'action_type' => Notification::ACTION_TYPE_QUOTATION_ACCEPTED
        ]);
        $notification->users()->attach($quotationRepository->mechanic_id, ['status' => Notification::DELIVERY_STATUS_DELIVERED]);

        $notification = Notification::whereHas('users', function ($users) use ($quotationRepository) {
            return $users->where('ref_id', $quotationRepository->quotation_request_id)->where('notification_users.status', Notification::DELIVERY_STATUS_DELIVERED)->where('notification_users.user_id', $quotationRepository->mechanic_id);
        })->first();

        $request = RequestForQuotation::where('id', $quotationRepository->quotation_request_id)->first();
//        event(new AcceptQuotationEvent($quotationRepository->mechanic_id, $request, $notification));


        Flash::success('Status Updated.');
        return response('Success');
    }

    /**
     * Show the form for editing the specified RequestForQuotation.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $requestForQuotation = $this->requestForQuotationRepository->findWithoutFail($id);

        if (empty($requestForQuotation)) {
            Flash::error('Request For Quotation not found');
            return redirect(route('admin.requestForQuotations.index'));
        }

        $user = Auth::user();
        $cars = $this->myCarRepository->findWhere(['driver_id' => $user->id]);
        $countries = $this->countryRepository->all()->pluck('name', 'id');
        $cities = $this->cityRepository->all()->pluck('name', 'id');
        $areas = $this->areaRepository->all()->pluck('name', 'id');
        $services = $this->serviceRepository->findWhere(['parent_id' => 0]);
        $sub_services = $this->serviceRepository->all()->pluck('name', 'id');

        BreadcrumbsRegister::Register($this->ModelName, $this->BreadCrumbName, $requestForQuotation);
        return view('admin.request_for_quotations.edit')->with([
            'requestForQuotation' => $requestForQuotation,
            'cars'                => $cars,
            'countries'           => $countries,
            'cities'              => $cities,
            'areas'               => $areas,
            'services'            => $services,
            'sub_services'        => $sub_services,
            'title'               => $this->BreadCrumbName
        ]);
    }

    /**
     * Update the specified RequestForQuotation in storage.
     *
     * @param  int $id
     * @param UpdateRequestForQuotationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRequestForQuotationRequest $request)
    {
        $requestForQuot = $this->requestForQuotationRepository->findWithoutFail($id);

        if (empty($requestForQuot)) {
            Flash::error('Request For Quotation not found');
            return redirect(route('admin.requestForQuotations.index'));
        }

        $requestForQuotation = $this->requestForQuotationRepository->updateRecord($request, $requestForQuot);
        /*$input = $request->all();

        $data['car_id'] = $input['car_id'];
        $data['area_id'] = $input['area_id'];
        $data['service_id'] = $input['sub_service_id'];
        $data['with_in_time'] = $input['with_in_time'];

        $attachments = [];
        $count = 0;
        if (isset($input['images'])) {

            $files = $request->file('images');

            foreach ($files as $file) {
                $attachments[$count]['quotation_request_id'] = $id;
                $attachments[$count]['type'] = '0';
                $attachments[$count]['name'] = $file->getClientOriginalName();
                $attachments[$count]['path'] = Storage::putFile('public', $file);
                $count++;
            }
        }

        if (!empty($attachments)) {
            $media = RequestForQuotationMedia::insert($attachments);
        }

        $requestForQuotation = $this->requestForQuotationRepository->update($data, $id);

        $pending_data = [];
        $value = 0;
        if (isset($requestForQuotation)) {
            foreach ($requestForQuotation->service->mechanicServices as $ser) {
                $pending_data[$value]['quotation_request_id'] = $requestForQuotation->id;
                $pending_data[$value]['mechanic_id'] = $ser->mechanic_id;
                $value++;
            }
        }

        if ($data['service_id'] != $requestForQuot->service_id) {
            if (!empty($pending_data)) {
                $requestForQuotationPending = RequestForQuotationPending::insert($pending_data);
            }
        }*/

        Flash::success($this->BreadCrumbName . ' updated successfully.');
        return redirect(route('admin.requestForQuotations.index'));
    }

    /**
     * Remove the specified RequestForQuotation from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $requestForQuotation = $this->requestForQuotationRepository->findWithoutFail($id);

        if (empty($requestForQuotation)) {
            Flash::error('Request For Quotation not found');

            return redirect(route('admin.requestForQuotations.index'));
        }

        $this->requestForQuotationRepository->delete($id);

        Flash::success($this->BreadCrumbName . ' deleted successfully.');

        return redirect(route('admin.requestForQuotations.index'));
    }

    public function deleteCarImage($id)
    {
        $carMedia = RequestForQuotationMedia::find($id);

        if (empty($carMedia))
            return response('Failed');

        $carMedia->delete($id);
        return response('Success');
    }

    public function send(Request $request)
    {
        $id = $request->get('id');

        $requestForQuotation = $this->requestForQuotationRepository->findWithoutFail($id);
        if (empty($requestForQuotation)) {
            Flash::error('Request For Quotation not found');

            return redirect(route('admin.requestForQuotations.index'));
        }

        BreadcrumbsRegister::Register($this->ModelName, $this->BreadCrumbName, $requestForQuotation);
        return view('admin.request_for_quotations.send');

    }

    public function jobComplete($id)
    {
        $requestForQuotation = $this->requestForQuotationRepository->findWithoutFail($id);

        if (empty($requestForQuotation)) {
            Flash::error('Job not found');
            return response('Job not found');
        }

        $this->requestForQuotationRepository->jobComplete($requestForQuotation, $this->notificationRepository);
        return response('Success');
    }

    public function get_mechanic(Request $request)
    {
        $id = $request->get('qoutation', 0);
        $quotation = $this->quotationRepository->findWithoutFail($id);
        $user = $quotation->user;
        $company_detail = $user->company;

        if (empty($user)) {
            Flash::error('Car not found');
            return redirect(route('admin.requestForQuotations.index'));
        }
        return $this->sendResponse([
            'user'           => $user,
            'quotation'      => $quotation,
            'company_detail' => $company_detail
        ], true);
    }

//    public function newJobs(Request $request)
//    {
//        $this->requestForQuotationRepository->pushCriteria(new RequestQuotationCriteria($request));
//        $newJobs = $this->requestForQuotationRepository->all();
//        return response($newJobs);
//    }
}
