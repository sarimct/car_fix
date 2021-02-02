<?php


Auth::routes();

Route::get('/', 'HomeController@index')->name('dashboard');
Route::get('/home', 'HomeController@index')->name('dashboard');
Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::get('about', 'HomeController@index');


// Password Reset Routes...
$this->get('password/forget', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');

$this->get('password/verify', 'Auth\VerifyPasswordController@showLinkVerifyForm')->name('password.verify');
$this->post('password/verifyCheck', 'Auth\VerifyPasswordController@checkVerifyCode')->name('password.check-verify');

$this->get('password/reset/{code}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/resetpass', 'Auth\ResetPasswordController@resetPassword')->name('password.reset-pass');
// Password Reset



Route::resource('roles', 'RoleController');

Route::resource('modules', 'ModuleController');

Route::get('/module/step1/{id?}', 'ModuleController@getStep1')->name('modules.create');
Route::get('/module/step2/{tablename?}', 'ModuleController@getStep2')->name('modules.create');
Route::get('/getJoinFields/{tablename?}', 'ModuleController@getJoinFields');
Route::get('/module/step3/{tablename?}', 'ModuleController@getStep3')->name('modules.create');

Route::post('/step1', 'ModuleController@postStep1');
Route::post('/step2', 'ModuleController@postStep2');
Route::post('/step3', 'ModuleController@postStep3');


Route::resource('users', 'UserController');

Route::resource('permissions', 'PermissionController');

//Route::resource('profile', 'UserController');

Route::get('user/profile', 'UserController@profile')->name('users.profile');
//Route::patch('users/profile-update/{id}', 'UserController@profileUpdate')->name('users.profile-update');

Route::resource('languages', 'LanguageController');

Route::resource('pages', 'PageController');

Route::resource('contactus', 'ContactUsController');

Route::resource('notifications', 'NotificationController');

Route::resource('carMakers', 'CarMakerController');

Route::resource('carModels', 'CarModelController');

Route::resource('services', 'ServiceController');

Route::resource('countries', 'CountryController');

Route::resource('cities', 'CityController');

Route::resource('areas', 'AreaController');

Route::resource('reviews', 'ReviewController');

Route::resource('quotations', 'QuotationController');
Route::get('confirmAcceptQuotation/{quotation_id}', 'QuotationController@confirmAcceptQuotation');
//Route::get('confirmAcceptQuotation/{quotation_id}/{request_id}', 'RequestForQuotationController@confirmAcceptQuotation');

Route::resource('requestForQuotations', 'RequestForQuotationController');
Route::get('confirmComplete/{id}', 'RequestForQuotationController@jobComplete');
//Route::get('requestForQuotations/confirmComplete/{id}', 'RequestForQuotationController@confirmComplete');

Route::resource('myCars', 'MyCarController');

Route::get('deleteCarImage/{id}', 'RequestForQuotationController@deleteCarImage');

Route::resource('messages', 'MessageController');

Route::post('requestForQuotations/show', 'RequestForQuotationController@get_mechanic')->name('requestForQuotations.get_mechanic');

Route::resource('jobHistories', 'JobHistoryController');

Route::resource('findGarages', 'FindGarageController');

Route::resource('mechanics', 'MechanicController');

Route::resource('drivers', 'DriverController');