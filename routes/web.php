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
use Illuminate\Support\Facades\Mail;
/*Route::get('/', function () {
    //return view('welcome');
    return view('web.template.index');
});
Route::get('/contact', function () {
    return view('web.partials.pagina.contact');
  });*/
  Route::get('/', 'HomeController@index')->name('/');
  Route::get('/contact', 'HomeController@contact');
  Route::post('/contact', 'HomeController@postContact');
  Route::get('/us', 'HomeController@us')->name('/us');
  Route::get('/howtoget', 'HomeController@howtoget')->name('/howtoget');
  Route::get('/notices', 'HomeController@notices')->name('/notices');
  Route::get('/pet', 'HomeController@pet')->name('/pet');
  Route::get('/gallery', 'HomeController@gallery')->name('/gallery');
   Route::get('/DetallSlider/{id}', 'HomeController@DetallSlider');
   Route::get('/DetallCards/{id}', 'HomeController@DetallCards');
   Route::get('/DetallTopic/{id}', 'HomeController@DetallTopic');
   Route::get('/mision', 'HomeController@mision');
   Route::get('/vision', 'HomeController@vision');
  Route::get('email', function(){
  //Mail::to('andrescondo17@gmail.com')->send(new \App\Mail\SendMail());
    return new \App\Mail\SendMail('Christian');
  });


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
    Route::resource('/type-course', 'Admin\\TypeCourseController');
    Route::resource('/courses', 'Admin\\CoursesController');
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






  Route::get('/mapas', function(){
    $config = array();
    $config['center'] = 'auto';
    $config['onboundschanged'] = 'if (!centreGot) {
      var mapCentre = map.getCenter();
      marker_0.setOptions({
        position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng())
      });
    }
    centreGot = true;';

    \Gmaps::initialize($config);

    // set up the marker ready for positioning
    // once we know the users location
    $marker = array();
    \Gmaps::add_marker($marker);

    $map = \Gmaps::create_map();
    echo "<html><head><script type='text/javascript'>var centreGot = false;</script>".$map['js']."</head><body>".$map['html']."</body></html>";
  });