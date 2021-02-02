<?php

namespace App\Http\Requests\Api;

class VerifyCodeRequest extends ApiRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'verification_code' => 'required'
        ];
    }
}