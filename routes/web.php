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

/*Route::get('/', function () {
    //return view('welcome');
    return view('web.template.index');
});*/
Route::get('/', 'HomeController@index')->name('/');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
  /*===============================RUTAS===============================*/
//Route::get('/administracion', 'Admin\AdminController@index')->name('administracion');

 Route::resource('/veterinary', 'Admin\\VeterinaryController');
 Route::resource('/card', 'Admin\\CardController');
 Route::resource('/slider', 'Admin\\SliderController');
Route::resource('/socios', 'Admin\\SociosController');
Route::resource('/notes', 'Admin\\NotesController');
Route::resource('/notices', 'Admin\\NoticesController');
//Route::resource('/gallery', 'Admin\\GalleryController');
Route::resource('/category', 'Admin\\CategoryController');
Route::resource('/subcategory', 'Admin\\SubcategoryController');
Route::resource('/gallery', 'Admin\\GalleryController');
Route::resource('/tag', 'Admin\\TagController');
Route::resource('/post', 'Admin\\PostController');
});

Route::group(['prefix' => 'employee'], function () {
  Route::get('/login', 'EmployeeAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'EmployeeAuth\LoginController@login');
  Route::post('/logout', 'EmployeeAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'EmployeeAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'EmployeeAuth\RegisterController@register');

  Route::post('/password/email', 'EmployeeAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'EmployeeAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'EmployeeAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'EmployeeAuth\ResetPasswordController@showResetForm');
});

Route::group(['domain' => 'customer.' . env('APP_DOMAIN')], function () {
  Route::get('/login', 'CustomerAuth\LoginController@showLoginForm');
  Route::post('/login', 'CustomerAuth\LoginController@login');
  Route::post('/logout', 'CustomerAuth\LoginController@logout');

  Route::get('/register', 'CustomerAuth\RegisterController@showRegistrationForm');
  Route::post('/register', 'CustomerAuth\RegisterController@register');

  Route::post('/password/email', 'CustomerAuth\ForgotPasswordController@sendResetLinkEmail');
  Route::post('/password/reset', 'CustomerAuth\ResetPasswordController@reset');
  Route::get('/password/reset', 'CustomerAuth\ForgotPasswordController@showLinkRequestForm');
  Route::get('/password/reset/{token}', 'CustomerAuth\ResetPasswordController@showResetForm');
});









