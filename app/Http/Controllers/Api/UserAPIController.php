<?php

namespace App\Http\Controllers\Api;

use App\Criteria\MechanicCriteria;
use App\Criteria\MyCarCriteria;
use App\Http\Requests\API\CreateUserApiRequest;
use App\Http\Requests\Api\UpdateUserApiRequest;
use App\Models\User;
use App\Repositories\Admin\MechanicCompanyDetailRepository;
use App\Repositories\Admin\MyCarRepository;
use App\Repositories\Admin\UserdetailRepository;
use App\Repositories\Admin\UserRepository;
use App\Repositories\Admin\ServiceRepository;
use App\Repositories\Admin\UdeviceRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;

/**
 * Class UserController
 * @package App\Http\Controllers\API
 */
class UserAPIController extends AppBaseController
{
    /** @var  UserRepository */
    private $userRepository, $carRepository, $userdetailRepository, $companyDetailRepository, $serviceRepository, $uDeviceRepository;

    public function __construct(UserRepository $userRepo, UserdetailRepository $userdetailRepo, MechanicCompanyDetailRepository $companyDetailRepo, MyCarRepository $carRepository, ServiceRepository $serviceRepo, UdeviceRepository $uDeviceRepo)
    {
        $this->userRepository = $userRepo;
        $this->carRepository = $carRepository;
        $this->userdetailRepository = $userdetailRepo;
        $this->companyDetailRepository = $companyDetailRepo;
        $this->serviceRepository = $serviceRepo;
        $this->uDeviceRepository = $uDeviceRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/users",
     *      summary="Get a listing of the Users.",
     *      tags={"User"},
     *      description="Get all Users",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="limit",
     *          description="Change the Default Record Count. If not found, Returns All Records in DB.",
     *          type="integer",
     *          required=false,
     *          in="query"
     *      ),
     *      @SWG\Parameter(
     *          name="offset",
     *          description="Change the Default Offset of the Query. If not found, 0 will be used.",
     *          type="integer",
     *          required=false,
     *          in="query"
     *      ),
     *     @SWG\Parameter(
     *          name="service_id",
     *          description="Service ID",
     *          type="integer",
     *          required=false,
     *          in="query"
     *      ),
     *     @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="array",
     *                  @SWG\Items(ref="#/definitions/User")
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function index(Request $request)
    {
        $this->userRepository->pushCriteria(new RequestCriteria($request));
        $this->userRepository->pushCriteria(new LimitOffsetCriteria($request));
        $this->userRepository->pushCriteria(new MechanicCriteria($request));
        $users = $this->userRepository->all();

        return $this->sendResponse($users->toArray(), 'Users retrieved successfully');
    }

    /**
     * @param CreateUserAPIRequest $request
     * @return Response
     *
     * //@SWG\Post(
     *      path="/users",
     *      summary="Store a newly created Customer in storage",
     *      tags={"User"},
     *      description="Store User",
     *      produces={"application/json"},
     *      //@SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="User that should be stored",
     *          required=false,
     *          //@SWG\Schema(ref="#/definitions/User")
     *      ),
     *      //@SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          //@SWG\Schema(
     *              type="object",
     *              //@SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              //@SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/User"
     *              ),
     *              //@SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateUserApiRequest $request)
    {
        $input = $request->all();

        $users = $this->userRepository->create($input);

        return $this->sendResponse($users->toArray(), 'User saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/users/{id}",
     *      summary="Display the specified Mechanic",
     *      tags={"User"},
     *      description="Get User",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Mechanic",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/User"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function show($id)
    {
        /** @var User $user */
        $user = $this->userRepository->findWithoutFail($id);
        if (empty($user)) {
            return $this->sendErrorWithData('User not found');
        }
        return $this->sendResponse($user->toArray(), 'User retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdateUserApiRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/users/{id}",
     *      summary="Update the specified User",
     *      tags={"User"},
     *      description="Update User",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="Authorization",
     *          description="User Auth Token{ Bearer ABC123 }",
     *          type="string",
     *          required=true,
     *          default="Bearer ABC123",
     *          in="header"
     *      ),
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of User",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="User that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/User")
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/User"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */

    public function update($id, Request $request)
    {
        /** @var User $user */
        $user = $this->userRepository->findWithoutFail($id);
//        var_dump($user);exit();

        if (empty($user)) {
            return $this->sendErrorWithData('User not found');
        }
        $input = $request->all();
//        var_dump($input);exit();

        if (isset($input['name']) || isset($input['password'])) {
            $this->userRepository->updateRecord($request, $user);
        }

        if (isset($user->details)) {
            $this->userdetailRepository->updateRecord($request, $user);
            if (isset($user->company)) {
                $this->companyDetailRepository->updateRecord($request, $user);
            }
        }

        if (isset($input['push_notification']) || isset($input['device_token'])) {
//          $uDevice = $this->uDeviceRepository->findWhere(['user_id' => $user->id]);
            $this->uDeviceRepository->updateRecord($request, $user);
        }
        $user = $this->userRepository->findWithoutFail($id);
        return $this->sendResponse($user->toArray(), 'Profile successfully updated.');
    }

    /**
     * @param UpdateUserApiRequest $request
     * @return mixed
     *
     * @SWG\Post(
     *      path="/user-update",
     *      summary="Update specific user",
     *      tags={"User"},
     *      description="Get User by token",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="Authorization",
     *          description="User Auth Token{ Bearer ABC123 }",
     *          type="string",
     *          required=true,
     *          default="Bearer ABC123",
     *          in="header"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="User that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/User")
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/User"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function user_update(UpdateUserApiRequest $request)
    {
        /** @var User $user */
        $user = Auth::user();

        if (empty($user)) {
            return $this->sendErrorWithData('User not found');
        }

        $input = $request->all();
//        var_dump($input);exit();

        if (isset($input['name']) || isset($input['password'])) {
            $this->userRepository->updateRecord($request, $user);
        }

        if (isset($user->details)) {
            $this->userdetailRepository->updateRecord($request, $user);
            if (isset($user->company)) {
                $this->companyDetailRepository->updateRecord($request, $user);
            }
        }

        if (isset($input['push_notification']) || isset($input['device_token'])) {
//          $uDevice = $this->uDeviceRepository->findWhere(['user_id' => $user->id]);
            $this->uDeviceRepository->updateRecord($request, $user);
        }
        $user = $this->userRepository->findWithoutFail($user->id);
        return $this->sendResponse($user->toArray(), 'Profile successfully updated.');
    }

    /**
     * @param int $id
     * @return Response
     *
     * //@SWG\Delete(
     *      path="/users/{id}",
     *      summary="Remove the specified User from storage",
     *      tags={"User"},
     *      description="Delete User",
     *      produces={"application/json"},
     *      //@SWG\Parameter(
     *          name="id",
     *          description="id of User",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      //@SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          //@SWG\Schema(
     *              type="object",
     *              //@SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              //@SWG\Property(
     *                  property="data",
     *                  type="string"
     *              ),
     *              //@SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function destroy($id)
    {
        /** @var User $user */
        $user = $this->userRepository->findWithoutFail($id);

        if (empty($user)) {
            return $this->sendErrorWithData('User not found');
        }

        $user->delete();

        return $this->sendResponse($id, 'User deleted successfully');
    }

}