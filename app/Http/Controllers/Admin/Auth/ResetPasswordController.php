<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Repositories\Admin\UserRepository;
use Laracasts\Flash\Flash;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */
    /**
     * @var UserRepository
     */
    protected $userRepository;

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/admin/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Display the password reset view for the given token.
     *
     * If no token is present, display the link request form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string|null  $token
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showResetForm(Request $request, $code = null)
    {
        return view('admin.auth.passwords.reset')->with(
            ['code' => $code, 'email' => $request->email]
        );
//        return view('admin.auth.passwords.reset');
    }

    public function resetPassword(Request $request){

        $input = $request->all();
//        dd($input);

        $code = $input['code'];

        $check = DB::table('password_resets')->where(['code' => $code, 'email' => $request->email])->first();
//        dd($check);
        if (!empty($check)) {
            $postData['password'] = bcrypt($input['password']);

            try {

                $data = DB::table('users')->where(['email' => $input['email']])->first();
                $user = DB::table('users')->where(['email' => $input['email']])->update($postData, $data->id);

                DB::table('password_resets')->where(['code' => $code, 'email' => $request->email])->delete();

                return redirect(route('admin.login'));
            } catch (\Exception $e) {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }


    }

}
