<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\UserDataTable;
use App\Helper\BreadcrumbsRegister;
use App\Http\Requests\Admin\CreateUserRequest;
use App\Http\Requests\Admin\UpdateUserDetailRequest;
use App\Http\Requests\Admin\UpdateUserRequest;
use App\Models\User;
use App\Models\MechanicService;
use App\Repositories\Admin\AreaRepository;
use App\Repositories\Admin\CityRepository;
use App\Repositories\Admin\CompanyRepository;
use App\Repositories\Admin\CountryRepository;
use App\Repositories\Admin\MechanicCompanyDetailRepository;
use App\Repositories\Admin\RoleRepository;
use App\Repositories\Admin\UserdetailRepository;
use App\Repositories\Admin\UserRepository;
use App\Repositories\Admin\ServiceRepository;
use App\Repositories\Admin\MechanicServiceRepository;
use App\Repositories\Admin\CarMakerRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Response;

class UserController extends AppBaseController
{
    /** @var  UserRepository */
    private $userRepository;

    /** @var  UserdetailRepository */
    private $userdetailRepository;

    /** ModelName */
    private $ModelName;

    /** ModelName */
    private $BreadCrumbName;

    /** @var  MechanicCompanyDetailRepository */
    private $companyDetailRepository;

    /** @var  RoleRepository */
    private $roleRepository;

    /** @var  CountryRepository */
    private $countryRepository;

    /** @var  CityRepository */
    private $cityRepository;

    /** @var  AreaRepository */
    private $areaRepository;

    /** @var  ServiceRepository */
    private $serviceRepository;
    private $mechanicServiceRepository;
    private $carMakerRepository;


    public function __construct(UserRepository $userRepo, UserdetailRepository $userdetailRepo, MechanicCompanyDetailRepository $companyDetailRepo, RoleRepository $roleRepo, CountryRepository $countryRepo, CityRepository $cityRepo, AreaRepository $areaRepo, ServiceRepository $serviceRepo, MechanicServiceRepository $mechanicServiceRepo, CarMakerRepository $carMakerRepo)
    {
        $this->userRepository = $userRepo;
        $this->userdetailRepository = $userdetailRepo;
        $this->companyDetailRepository = $companyDetailRepo;
        $this->roleRepository = $roleRepo;
        $this->countryRepository = $countryRepo;
        $this->cityRepository = $cityRepo;
        $this->areaRepository = $areaRepo;
        $this->serviceRepository = $serviceRepo;
        $this->mechanicServiceRepository = $mechanicServiceRepo;
        $this->carMakerRepository = $carMakerRepo;


        $this->ModelName = 'users';
        $this->BreadCrumbName = 'Users';
    }

    /**
     * Display a listing of the User.
     *
     * @param UserDataTable $userDataTable
     * @return Response
     */
    public function index(UserDataTable $userDataTable)
    {
        BreadcrumbsRegister::Register($this->ModelName, $this->BreadCrumbName);
        return $userDataTable->render('admin.users.index');

    }

    /**
     * Show the form for creating a new User.
     *
     * @return Response
     */
    public function create()
    {
        $roles = $this->roleRepository->all()->where('is_protected', '!=', 1)->pluck('display_name', 'id')->all();

        BreadcrumbsRegister::Register($this->ModelName, $this->BreadCrumbName);
        if (empty($roles)) {
            Flash::success('No roles found in system.');
        }
        return view('admin.users.create')->with('roles', $roles);
    }

    /**
     * Store a newly created User in storage.
     *
     * @param CreateUserRequest $request
     *
     * @return Response
     */
    public function store(CreateUserRequest $request)
    {
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        $user = $this->userRepository->create($input);

        Flash::success('User saved successfully.');
        return redirect(route('admin.users.index'));
    }

    /**
     * Display the specified User.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $user = $this->userRepository->findWithoutFail($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('admin.users.index'));
        }
        BreadcrumbsRegister::Register($this->ModelName, $this->BreadCrumbName, $user);
        return view('admin.users.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified User.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $user = $this->userRepository->findWithoutFail($id);

        if (empty($user)) {
            Flash::error('User not found');
            return redirect(route('admin.users.index'));
        }
        $countries = $this->countryRepository->all()->pluck('name', 'id');
        $cities = $this->cityRepository->all()->pluck('name', 'id');
        $areas = $this->areaRepository->all()->pluck('name', 'id');
        $services = $this->serviceRepository->findWhere(['parent_id' => 0])->pluck('name', 'id');

        $userServices = $user->services->pluck('id')->toArray();
        $mechanicMakers = $user->mechanicMakers->pluck('id')->toArray();

        $nestedServices = [];
        foreach ($services as $key => $service) {
            $nestedServices[$key] = [
                'title'    => $service,
                'children' => $this->serviceRepository->findWhere(['parent_id' => $key])->pluck('name', 'id')
            ];
        }

        $carMaker = $this->carMakerRepository->all()->pluck('title', 'id');

        $sub_services = $this->serviceRepository->all()->pluck('name', 'id');

        $roles = $this->roleRepository->all()->where('id', '!=', '1')->pluck('display_name', 'id')->all();
        BreadcrumbsRegister::Register($this->ModelName, $this->BreadCrumbName, $user);
        return view('admin.users.edit')->with([
            'user'           => $user,
            'countries'      => $countries,
            'cities'         => $cities,
            'areas'          => $areas,
            'services'       => $services,
            'sub_services'   => $sub_services,
            'nestedServices' => $nestedServices,
            'userServices'   => $userServices,
            'carMaker'       => $carMaker,
            'mechanicMakers' => $mechanicMakers
        ]);
    }

    /**
     * Update the specified User in storage.
     *
     * @param  int $id
     * @param UpdateUserRequest $request
     *
     * @return Response
     */

    public function update($id, UpdateUserRequest $request)
    {
        $user = $this->userRepository->findWithoutFail($id);

        if (empty($user)) {
            Flash::error('User not found');
            return redirect(route('admin.users.index'));
        }

//        dd($user->mechanicMakers);

        $this->userRepository->updateRecord($request, $user);

        if (isset($user->details)) {
            $this->userdetailRepository->updateRecord($request, $user);

            if (isset($user->company)) {
                $this->companyDetailRepository->updateRecord($request, $user);
            }

            Flash::success('Profile successfully updated.');
            return redirect()->back();
        }

        Flash::success('User updated successfully.');
        return redirect(route('admin.users.index'));
    }

    /**
     * Remove the specified User from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $user = $this->userRepository->findWithoutFail($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('admin.users.index'));
        }

        $this->userRepository->delete($id);

        Flash::success('User deleted successfully.');

        return redirect(route('admin.users.index'));
    }

    public function profile()
    {
        $user = Auth::user();
        if (empty($user)) {
            Flash::error('User not found');
            return redirect(route('admin.users.index'));
        }

        $countries = $this->countryRepository->all()->pluck('name', 'id');
        $cities = $this->cityRepository->all()->pluck('name', 'id');
        $areas = $this->areaRepository->all()->pluck('name', 'id');

        if ($user->hasRole('mechanic')) {
            $services = $this->serviceRepository->findWhere(['parent_id' => 0])->pluck('name', 'id');

            $userServices = $user->services->pluck('id')->toArray();
            $mechanicMakers = $user->mechanicMakers->pluck('id')->toArray();

            $nestedServices = [];
            foreach ($services as $key => $service) {
                $nestedServices[$key] = [
                    'title'    => $service,
                    'children' => $this->serviceRepository->findWhere(['parent_id' => $key])->pluck('name', 'id')
                ];
            }

            $carMaker = $this->carMakerRepository->all()->pluck('title', 'id');
            $sub_services = $this->serviceRepository->all()->pluck('name', 'id');



        } else {
            $services = [];
            $sub_services = [];
            $nestedServices = [];
            $userServices = [];
            $carMaker = [];
            $mechanicMakers = [];
        }

        $this->BreadCrumbName = 'Profile';
        BreadcrumbsRegister::Register($this->ModelName, $this->BreadCrumbName);
        return view('admin.users.edit')->with([
            'user'           => $user,
            'countries'      => $countries,
            'cities'         => $cities,
            'areas'          => $areas,
            'services'       => $services,
            'sub_services'   => $sub_services,
            'nestedServices' => $nestedServices,
            'userServices'   => $userServices,
            'carMaker'       => $carMaker,
            'mechanicMakers' => $mechanicMakers
        ]);
    }
}