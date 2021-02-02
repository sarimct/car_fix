<?php

namespace App\Http\Controllers\Admin;

use App\Helper\BreadcrumbsRegister;
use App\Models\Menu;
use App\Models\MyCar;
use App\Models\Role;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Repositories\Admin\RoleRepository;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $roleRepository;

    public function __construct(RoleRepository $roleRepository)
    {
        $this->roleRepository = $roleRepository;
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (App::environment() == 'staging') {
            $menu = Menu::find(5);
            $menu->status = 0;
            $menu->save();
        }
        $user = Auth::user();
        if ($user->hasRole('driver')) {
//          $cars = $user->cars()->onlyTrashed()->get()->count();
            $cars = MyCar::where('driver_id', Auth::user()->id)->get()->count();

            $rfqs = $user->requestForQoutations()->where('quotation_requests.status', '<>', 30)->count();
            $completed = $user->requestForQoutations()->where(['quotation_requests.status' => 30])->count();
            $quotations_pending = $user->requestForQoutations()->whereHas('quotations')->where('status', 10)->count();

            $with = [
                'cars'               => $cars,
                'completed'          => $completed,
                'quotations_pending' => $quotations_pending,
                'rfqs'               => $rfqs
            ];
        } elseif ($user->hasRole('mechanic')) {
            $quotations_approved = $user->quotations()->where('status', 20)->count();
            $quotations_pending = $user->quotations()->where('status', 10)->count();
            $quotations_completed = $user->quotations()->whereHas('quotation_request', function ($requests) {
                return $requests->where('status', 30);
            })->where('status', 20);
            $quotations_new = $user->pendingQuotations()->where('status', 0)->get();

            $with = [
                'quotations_approved'  => $quotations_approved,
                'quotations_pending'   => $quotations_pending,
                'quotations_new'       => $quotations_new,
                'quotations_completed' => $quotations_completed
            ];
        } else {
            $users = User::all()->count();
            $roles = Role::all()->count();

            $with = [
                'users' => $users,
                'roles' => $roles
            ];
        }
        BreadcrumbsRegister::Register();
        return view('admin.home')->with($with);
    }
}