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
Route::get('/registro', function () {
    return view('registro');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('admin', function () {
    return view('admin.index');
});
Route::get('/admin/dashboard', function () {
    return view('admin.index');
});
Route::get('/admin/niveles', function () {
    return view('admin.niveles');
});
Route::get('/admin/notificaciones', function () {
    return view('admin.notificaciones');
});
Route::get('/admin/activaciones', function () {
    return view('admin.activaciones');
});
Route::get('/admin/mis-referidos', function () {
    return view('admin.mis-referidos');
});
Route::get('/admin/perfil', function () {
    return view('admin.perfil');
});
Route::post('/registro/new','RegistroController@new');
