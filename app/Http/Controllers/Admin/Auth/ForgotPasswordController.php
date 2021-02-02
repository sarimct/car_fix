<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use App\Repositories\Admin\UdeviceRepository;
use App\Repositories\Admin\UserdetailRepository;
use App\Repositories\Admin\UserRepository;
use Laracasts\Flash\Flash;


class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    /**
     * @var UserRepository
     */
    protected $userRepository;

    /**
     * @var UserdetailRepository
     */
    protected $userDetailRepository;

    /**
     * @var UdeviceRepository
     */
    protected $uDevice;

    use SendsPasswordResetEmails;

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
     * Display the form to request a password reset link.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLinkRequestForm()
    {
        return view('admin.auth.passwords.email');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function sendResetLinkEmail(Request $request)
    {
        $user = DB::table('users')->where('email', $request->email)->first();

        if (!$user) {
            Flash::error('User not found');
            return redirect(route('admin.password.request'));
        }

        $code = rand(1111, 9999);

        $subject = "Forgot Password Verification Code";
        try {
            $email = $user->email;
            $name = $user->name;

            $check = DB::table('password_resets')->where('email', $email)->first();
            if ($check) {
                DB::table('password_resets')->where('email', $email)->delete();
            }

            DB::table('password_resets')->insert(['email' => $email, 'code' => $code, 'created_at' => Carbon::now()]);
            Mail::send('email.verify', ['name' => $user->name, 'verification_code' => $code],
                function ($mail) use ($email, $name, $subject) {
                    $mail->from(getenv('MAIL_FROM_ADDRESS'), getenv('APP_NAME'));
                    $mail->to($email, $name);
                    $mail->subject($subject);
                });
        } catch (\Exception $e) {
            return redirect(route('admin.password.request'));
        }
        return redirect(route('admin.password.verify'));

    /*    $this->validateEmail($request);
        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $response = $this->broker()->sendResetLink(
            $request->only('email')
        );

        return $response == Password::RESET_LINK_SENT
            ? $this->sendResetLinkResponse($response)
            : $this->sendResetLinkFailedResponse($request, $response);
    */
    }


}
