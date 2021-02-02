<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Laracasts\Flash\Flash;

class VerifyPasswordController extends Controller
{
    /**
     * VerifyPasswordController constructor.
     */
    public function __construct()
    {
        return $this->middleware('guest');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showLinkVerifyForm()
    {
        return view('admin.auth.passwords.verify');
    }

    public function checkVerifyCode(Request $request){
        $code = DB::table('password_resets')->where('code', $request->code)->first();

        if (!empty($code)) {
            return redirect(route('admin.password.reset',$request->code));
        }else{
            Flash::error('Verification code is not found');
        }
        return redirect(route('admin.password.verify'));
    }
}
