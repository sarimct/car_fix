<?php

namespace App\Http\Requests\Api;

use App\Models\Register;

class RegistrationAPIRequest extends ApiRequest
{
    /**
     * Determine if the user is authorized to make this registration.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function messages()
    {
        return [
            'area_id.exists' => 'Please select valid area',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return Register::$rules;
    }
}
