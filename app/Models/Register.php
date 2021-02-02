<?php

namespace App\Models;

/**
 * @SWG\Definition(
 *      definition="Register",
 *      required={"name", "type", "email", "country_code", "phone", "address", "area_id", "company_name", "image", "password", "password_confirmation", "device_token", "device_type"},
 *      @SWG\Property(
 *          property="name",
 *          description="User First Name",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="company_name",
 *          description="User Company Name",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="type",
 *          description="User type: 10->Driver, 20->Mechanic",
 *          type="integer",
 *          default=10
 *      ),
 *      @SWG\Property(
 *          property="address",
 *          description="User address",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="country_code",
 *          description="Country Code",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="phone",
 *          description="User Phone Name",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="image",
 *          description="User Image",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="area_id",
 *          description="User Area id",
 *          type="integer",
 *          default=1
 *      ),
 *      @SWG\Property(
 *          property="mechanicMakers",
 *          description="Mechanic Maker id - CSV [1,2,3]",
 *          type="array",
 *          @SWG\Items(type="integer")
 *      ),
 *      @SWG\Property(
 *          property="services",
 *          description="User Services id - CSV [1,2,3]",
 *          type="array",
 *          @SWG\Items(type="integer")
 *      ),
 *      @SWG\Property(
 *          property="email",
 *          description="User Email",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="password",
 *          description="Password",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="password_confirmation",
 *          description="Password Confirmation",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="device_token",
 *          description="Device Token",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="device_type",
 *          description="Device Type",
 *          type="string"
 *      )
 * )
 */
class Register
{
    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name'                  => 'required',
        'type'                  => 'required|integer|in:10,20',
        'area_id'               => 'required|exists:areas,id',
        'email'                 => 'required|email|unique:users,email',
        'password'              => 'min:6|required_with:password_confirmation|same:password_confirmation',
        'password_confirmation' => 'min:6'
    ];
}