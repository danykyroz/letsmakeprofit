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

Route::get('/','HomeController@index')->name("webindex");
Route::get('/m/{rid}','HomeController@homerid')->name("homerid");
Route::get('/registro','RegistroController@index');
Route::get('/existe_email','RegistroController@existe_email');
Route::get('/login',["as"=>"login", function () {
    return View::make('login');
}]);
Route::post('/userlogin','UserLoginController@doLogin');
Route::post('/registro/new','RegistroController@new');
Route::get('/registro/validar/email/{token}','RegistroController@validar_email');

Route::get('admin',["as"=>"adminhome", function () {
    return view('admin.index');
}])->middleware('auth');

Route::get('/admin/changeuserlink','DashboardController@changeUserLink')
->middleware('auth');

Route::get('/dashboard', 'DashboardController@index')->name("dashboard")
->middleware('auth');

Route::get('/admin/perfil', 'PerfilController@index')->name("perfil")
->middleware('auth');

Route::post('/admin/perfil/update','PerfilController@update')->name("perfil_update")
->middleware('auth');

Route::get('/admin/notificaciones','NotificacionesController@index')->name("notificaciones")
->middleware('auth');

Route::get('/admin/notificacion/delete','NotificacionesController@delete')->name("notificacion_delete")
->middleware('auth');

Route::get('/admin/niveles','NivelesController@index')->name("niveles")
->middleware('auth');

Route::get('/admin/mis-referidos','ReferidosController@index')->name("referidos")
->middleware('auth');


Route::get('/admin/activaciones', function () {
    return view('admin.activaciones');
})->middleware('auth');

Route::get('/admin/logout', function () {
    return view('admin.perfil');
})->middleware('auth');

Route::get('logout', 'UserLoginController@logout')->name("logout");
