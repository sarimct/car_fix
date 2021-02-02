<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Facades\Response;
use Illuminate\Validation\ValidationException;
use InfyOm\Generator\Utils\ResponseUtil;

class ApiRequest extends FormRequest
{
    /**
     * @param Validator $validator
     * @throws ValidationException
     */
    protected function failedValidation(Validator $validator)
    {
        $excep = new ValidationException($validator);
        $excep->errorBag($this->errorBag)->redirectTo($this->getRedirectUrl());
        $excep->status = 200;
        $excep->response = Response::json(ResponseUtil::makeError("Validation Error", ['errors' => $excep->errors()]), 200);
        throw $excep;
    }
}