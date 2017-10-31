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
Route::get('/DetallCourses/{id}', 'HomeController@DetallCourses');
Route::get('/mision', 'HomeController@mision');
Route::get('/vision', 'HomeController@vision');
Route::get('/courses', 'HomeController@courses');
Route::get('/product', 'HomeController@product');
Route::get('/services', 'HomeController@services');
Route::post('/solicitainfo', 'HomeController@solicitainfo');
Route::get('/producto_search', 'HomeController@producto_search');
Route::get('/service_search', 'HomeController@service_search');
Route::get('/view_prod/{id}', 'HomeController@producto_search_id');
Route::get('/view_service/{id}', 'HomeController@service_search_id');
Route::get('/view_socio/{id}', 'HomeController@socio_search_id');
Route::get('/detall_prod/{id}', 'HomeController@producto_detall');
Route::get('/detall_service/{id}', 'HomeController@service_detall');
Route::get('/DetallGalleryItem/{id}', 'HomeController@itemgallery_detall');
Route::get('/DetallItemSlider/{id}', 'HomeController@DetallItemSlider');
Route::get('/DetallNotice/{id}', 'HomeController@DetallNotice');
Route::get('/suscribirse/{id}', 'HomeController@susbribirse_cupo');
Route::get('/miscursos/{id}', 'HomeController@miscursos');
Route::post('/crear_cupo', 'HomeController@crearcupo');
Route::get('/verdetallcupo/{id}', 'HomeController@verdetallcupo');
Route::get('/editcupo/{id}', 'HomeController@editcupo');
Route::post('/suscribirupdate/{id}', 'HomeController@updatecupo');
Route::post('busquedas', 'HomeController@busqueda');
Route::get('/resultsearch/{data}', 'HomeController@resultsearch');

Route::get('email', function () {
    //Mail::to('andrescondo17@gmail.com')->send(new \App\Mail\SendMail());
    return new \App\Mail\SendMail('Christian');
});



Route::get('/home', 'HomeController@index')->name('home');


Route::get('/home', 'HomeController@index')->name('home');





/*========================GRUPO ADMINISTRADOR================================*/

Route::group(['prefix' => 'admin'], function () {
    Route::get('/inicio', 'Admin\\AdminController@inicio');
    Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
    Route::post('/login', 'AdminAuth\LoginController@login');
    Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');

    Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
    Route::post('/register', 'AdminAuth\RegisterController@register');

    Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
    Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
    Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
    Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');

    /*===============================RUTAS ADMINISTRADOR===============================*/
    Route::get('/settings', 'Admin\AdminController@index')->name('settings');

//Route::get('/administracion', 'Admin\AdminController@index')->name('administracion');

    Route::post('/exportarexcel', 'Admin\\AdminController@exportarexcel');
    Route::get('/settingscred/{id}/edit_cred', 'Admin\\AdminController@edit_cred');
    Route::post('/settingscred/{id}/upcredentials', 'Admin\\AdminController@update_cred');
    Route::resource('/settings', 'Admin\\AdminController');
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
    Route::resource('/modalidad', 'Admin\\ModalidadController');
    Route::resource('/service', 'Admin\\ServiceController');
    Route::resource('/typeproduct', 'Admin\\TypeproductController');
    Route::resource('/clasification-courses', 'Admin\\ClasificationCoursesController');
    Route::resource('/tutor', 'Admin\\TutorController');
    Route::resource('/product', 'Admin\\ProductController');
    Route::resource('/section-title', 'Admin\\SectionTitleController');
    Route::resource('/typesuscription', 'Admin\\TypesuscriptionController');
    Route::resource('/suscribir', 'Admin\\SuscribirController');   
    Route::resource('/user', 'Admin\\UserController');
    Route::post('/autosuscriber/{id}', 'Admin\\SuscribirController@autosuscriber');
    Route::get('/buscar/usuario', 'Admin\UserController@buscarcliente');

});


    
    // Only authenticated users may enter...



    Auth::routes();
    Route::resource('/perfil', 'customer\\ClienteController');
    Route::get('/perfil/{id}/editCredentials', 'customer\\ClienteController@editCredentials')->name('editCredentials');
    Route::post('/perfil/{id}/upcredentials', 'customer\\ClienteController@upCredentials');

    Route::group(['prefix'=>env('APP_DOMAIN')], function(){
        
});




/*Route::group(['prefix' => 'employee'], function () {
    Route::get('/login', 'EmployeeAuth\LoginController@showLoginForm')->name('login');
    Route::post('/login', 'EmployeeAuth\LoginController@login');
    Route::post('/logout', 'EmployeeAuth\LoginController@logout')->name('logout');

    Route::get('/register', 'EmployeeAuth\RegisterController@showRegistrationForm')->name('register');
    Route::post('/register', 'EmployeeAuth\RegisterController@register');

    Route::post('/password/email', 'EmployeeAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
    Route::post('/password/reset', 'EmployeeAuth\ResetPasswordController@reset')->name('password.email');
    Route::get('/password/reset', 'EmployeeAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
    Route::get('/password/reset/{token}', 'EmployeeAuth\ResetPasswordController@showResetForm');
});*/


/*Route::group(['domain' => 'customer.' . env('APP_DOMAIN')], function () {*/
/*Route::group(['prefix' => 'customer'], function () {
    Route::get('/login', 'CustomerAuth\LoginController@showLoginForm');
    Route::post('/login', 'CustomerAuth\LoginController@login');
    Route::post('/logout', 'CustomerAuth\LoginController@logout');

    Route::get('/register', 'CustomerAuth\RegisterController@showRegistrationForm');
    Route::post('/register', 'CustomerAuth\RegisterController@register');

    Route::post('/password/email', 'CustomerAuth\ForgotPasswordController@sendResetLinkEmail');
    Route::post('/password/reset', 'CustomerAuth\ResetPasswordController@reset');
    Route::get('/password/reset', 'CustomerAuth\ForgotPasswordController@showLinkRequestForm');
    Route::get('/password/reset/{token}', 'CustomerAuth\ResetPasswordController@showResetForm');
    
});*/




