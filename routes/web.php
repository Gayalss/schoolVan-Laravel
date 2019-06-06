<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', function () {
//     return view('schoolVanHomePage');
// });

Auth::routes();

Route::get('/home', 'HomeController@index');

  Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');

    //password resets

    Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
  });

///// /////////////////////////////////////////////////
  Route::prefix('studentParent')->group(function() {
    Route::get('/login', 'Auth\StudentParentLoginController@showLoginForm')->name('studentParent.login');
    Route::post('/login', 'Auth\StudentParentLoginController@login')->name('studentParent.login.submit');
    Route::get('/', 'StudentParentController@index')->name('studentParent.dashboard');
    Route::post('/', 'StudentParentController@fetch')->name('studentParent.fetch');
    // Route::get('/manageChildren','StudentParentPagesController@manageChildren')->name('studentParent.manageChildren');
    // Route::post('/manageChildren','StudentParentPagesController@createChildren')->name('studentParent.createChildren');
    // Route::get('/UpdateChildren','StudentParentPagesController@test')->name('studentParent.test');
    Route::resource('manageChildren', 'StudentParent\ChildrenManageController');
    Route::resource('attendance', 'StudentParent\ChildrenAttendanceController');
    Route::resource('location', 'StudentParent\ChildrenLocationController');
    Route::resource('newVans', 'StudentParent\ChildrenNewSchoolVanController');
    Route::resource('settings', 'StudentParent\SettingController');
    

    // Route::get('/attendance', 'StudentParentPagesController@attendance')->name('studentParent.attendance');
    // Route::get('/location', 'StudentParentPagesController@location')->name('studentParent.location');
    // Route::get('/NewVans', 'StudentParentPagesController@newVans')->name('studentParent.newVans');
    

    

    Route::get('/register', 'Auth\StudentParentRegisterController@showRegistrationForm');
    Route::post('/register', 'Auth\StudentParentRegisterController@register')->name('studentParent.register.submit');

    //password resets

   Route::post('/password/email', 'Auth\StudentParentForgotPasswordController@sendResetLinkEmail')->name('studentParent.password.email');
  Route::get('/password/reset', 'Auth\StudentParentForgotPasswordController@showLinkRequestForm')->name('studentParent.password.request');
  Route::post('/password/reset', 'Auth\StudentParentResetPasswordController@reset');
  Route::get('/password/reset/{token}', 'Auth\StudentParentResetPasswordController@showResetForm')->name('studentParent.password.reset');
  });

///////////////////////////////////////////////////
  Route::prefix('vanDriver')->group(function() {
    Route::get('/login', 'Auth\VanDriverLoginController@showLoginForm')->name('vanDriver.login');
    Route::post('/login', 'Auth\VanDriverLoginController@login')->name('vanDriver.login.submit');
    Route::get('/', 'VanDriverController@index')->name('vanDriver.dashboard');
    Route::get('/register', 'Auth\VanDriverRegisterController@showRegistrationForm');
    Route::post('/register', 'Auth\VanDriverRegisterController@register')->name('vanDriver.register.submit');

    Route::resource('profile', 'VanDriver\SchoolVanDriverProfileController');

    //password resets

   Route::post('/password/email', 'Auth\VanDriverForgotPasswordController@sendResetLinkEmail')->name('vanDriver.password.email');
  Route::get('/password/reset', 'Auth\VanDriverForgotPasswordController@showLinkRequestForm')->name('vanDriver.password.request');
  Route::post('/password/reset', 'Auth\VanDriverResetPasswordController@reset');
  Route::get('/password/reset/{token}', 'Auth\VanDriverResetPasswordController@showResetForm')->name('vanDriver.password.reset');
  });

//////////////////////////////////////////////////////////////////
  Route::prefix('vanOwner')->group(function() {
    Route::get('/login', 'Auth\VanOwnerLoginController@showLoginForm')->name('vanOwner.login');
    Route::post('/login', 'Auth\VanOwnerLoginController@login')->name('vanOwner.login.submit');
    Route::get('/register', 'Auth\VanOwnerRegisterController@showRegistrationForm');
    Route::post('/register', 'Auth\VanOwnerRegisterController@register')->name('vanOwner.register.submit');
    Route::get('/', 'VanOwnerController@index')->name('vanOwner.dashboard');
    // Route::get('/manage', 'VanOwnerPagesController@manage')->name('vanOwner.manage');
    // Route::get('/payment', 'VanOwnerPagesController@payment')->name('vanOwner.payment');
    // Route::get('/reports', 'VanOwnerPagesController@reports')->name('vanOwner.reports');

    Route::resource('manageVan', 'VanOwner\ManageVanController');
    Route::post('manageDriver/search','VanOwner\ManageDriverController@search')->name('manageDriver.search');
    Route::resource('manageDriver', 'VanOwner\ManageDriverController');
    Route::resource('payments', 'VanOwner\PaymentController');
    Route::resource('reports', 'VanOwner\ReportController');
    Route::resource('routes', 'VanOwner\ManageRouteController');


    //password resets

   Route::post('/password/email', 'Auth\VanOwnerForgotPasswordController@sendResetLinkEmail')->name('vanOwner.password.email');
  Route::get('/password/reset', 'Auth\VanOwnerForgotPasswordController@showLinkRequestForm')->name('vanOwner.password.request');
  Route::post('/password/reset', 'Auth\VanOwnerResetPasswordController@reset');
  Route::get('/password/reset/{token}', 'Auth\VanOwnerResetPasswordController@showResetForm')->name('vanOwner.password.reset');
  });

   Route::prefix('School')->group(function() {
    Route::get('/login', 'Auth\SchoolLoginController@showLoginForm')->name('School.login');
    Route::post('/login', 'Auth\SchoolLoginController@login')->name('School.login.submit');
    Route::get('/register', 'Auth\SchoolRegisterController@showRegistrationForm');
    Route::post('/register', 'Auth\SchoolRegisterController@register')->name('School.register.submit');
    // Route::get('/', 'SchoolController@index')->name('School.dashboard');
    // Route::get('/manage', 'VanOwnerPagesController@manage')->name('vanOwner.manage');
    // Route::get('/payment', 'VanOwnerPagesController@payment')->name('vanOwner.payment');
    // Route::get('/reports', 'VanOwnerPagesController@reports')->name('vanOwner.reports');


    //password resets

   Route::post('/password/email', 'Auth\VanOwnerForgotPasswordController@sendResetLinkEmail')->name('vanOwner.password.email');
  Route::get('/password/reset', 'Auth\VanOwnerForgotPasswordController@showLinkRequestForm')->name('vanOwner.password.request');
  Route::post('/password/reset', 'Auth\VanOwnerResetPasswordController@reset');
  Route::get('/password/reset/{token}', 'Auth\VanOwnerResetPasswordController@showResetForm')->name('vanOwner.password.reset');
  });

Route::resource('UserSignUp', 'UserSignUpController');
Route::resource('UserLogIn', 'UserLogInController');