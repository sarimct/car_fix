<?php

namespace App\Http\Requests\Api;

class UpdateForgotPasswordRequest extends ApiRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'verification_code'     => 'required',
            'email'                 => 'required|email',
            'password'              => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6'
        ];
    }
}