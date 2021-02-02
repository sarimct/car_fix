<?php

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


// Images Resize Route
Route::get('/resize/{img}', function ($img) {

    ob_end_clean();
    try {
        $w = request()->get('w');
        $h = request()->get('h');
        if ($h && $w) {
            // Image Handler lib
            return Image::make(asset("storage/app/$img"))->resize($h, $w, function ($c) {
                $c->aspectRatio();
                $c->upsize();
            })->response('png');
        } else {
            return response(file_get_contents(storage_path("/app/$img")))
                ->header('Content-Type', 'image/png');
        }

    } catch (\Exception $e) {
//        dd($e->getMessage());
        return abort(404, $e->getMessage());
    }
})->name('resize')->where('img', '(.*)');


/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/

## No Token Required
Route::post('v1/login', 'AuthAPIController@login')->name('login');
Route::post('v1/register', 'AuthAPIController@register')->name('register');

Route::get('v1/forget-password', 'AuthAPIController@getForgetPasswordCode')->name('forget-password');
//Route::post('v1/resend-code', 'AuthAPIController@resendCode');
Route::post('v1/verify-reset-code', 'AuthAPIController@verifyCode')->name('verify-code');
Route::post('v1/reset-password', 'AuthAPIController@updatePassword')->name('reset-password');

Route::middleware('auth:api')->group(function () {
    ## Token Required to below APIs
    Route::post('v1/logout', 'AuthAPIController@logout');
    Route::post('v1/refresh', 'AuthAPIController@refresh');
    Route::post('v1/me', 'AuthAPIController@me');
    Route::resource('v1/roles', 'RoleAPIController');
    Route::resource('v1/permissions', 'PermissionAPIController');

    Route::resource('v1/languages', 'LanguageAPIController');

    Route::resource('v1/contactus', 'ContactUsAPIController');

    Route::resource('v1/notifications', 'NotificationAPIController');

    Route::resource('v1/carMakers', 'CarMakerAPIController');

    Route::resource('v1/carModels', 'CarModelAPIController');

    Route::resource('v1/reviews', 'ReviewAPIController');

    Route::resource('v1/quotations', 'QuotationAPIController');

    Route::get('v1/acceptQuotation/{id}', 'QuotationAPIController@acceptQuotation');

    Route::get('v1/confirmComplete/{id}', 'RequestForQuotationAPIController@jobComplete');

    Route::resource('v1/messages', 'MessageAPIController');

    Route::resource('v1/myCars', 'MyCarAPIController');

    Route::resource('v1/request_for_quotations', 'RequestForQuotationAPIController');

    Route::post('v1/user-update', 'UserAPIController@user_update');
});

Route::resource('v1/pages', 'PageAPIController');

Route::resource('v1/services', 'ServiceAPIController');

Route::resource('v1/carMakers', 'CarMakerAPIController');

Route::resource('v1/carModels', 'CarModelAPIController');

Route::resource('v1/countries', 'CountryAPIController');

Route::resource('v1/cities', 'CityAPIController');

Route::resource('v1/areas', 'AreaAPIController');

Route::resource('v1/job_histories', 'JobHistoryAPIController');

Route::resource('v1/find_garages', 'FindGarageAPIController');

Route::resource('v1/users', 'UserAPIController');


Route::get('v1/checkMyCar', 'MyCarAPIController@checkMyCarRegistration')->name('checkMyCar');
//Route::get('v1/forget-password', 'AuthAPIController@getForgetPasswordCode')->name('forget-password');

Route::resource('admin/mechanics', 'MechanicAPIController');

Route::resource('admin/drivers', 'DriverAPIController');