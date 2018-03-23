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
    return view('home');
});
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
}])->middleware('auth');;
Route::get('/dashboard', ["as"=>"dashboard",function () {
    return view('admin.index');
}])->middleware('auth');

Route::get('/admin/niveles', function () {
    return view('admin.niveles');
})->middleware('auth');
Route::get('/admin/notificaciones', function () {
    return view('admin.notificaciones');
})->middleware('auth');
Route::get('/admin/activaciones', function () {
    return view('admin.activaciones');
})->middleware('auth');;
Route::get('/admin/mis-referidos', function () {
    return view('admin.mis-referidos');
})->middleware('auth');
Route::get('/admin/perfil', function () {
    return view('admin.perfil');
})->middleware('auth');
Route::get('/admin/logout', function () {
    return view('admin.perfil');
})->middleware('auth');

Route::get('logout', 'UserLoginController@logout')->name("logout");
