<?php

use Illuminate\Http\Request;

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
Route::post('login', 'API\UserController@login');
Route::post('register', 'API\UserController@register');

Route::group(['middleware' => ['auth:api']], function () {
    Route::post('detail', 'API\UserController@detail'); 
    Route::resource('pengumuman', 'API\PengumumanController');
    Route::resource('program', 'API\ProgramController');
    Route::resource('beasiswa', 'API\BeasiswaController');
    Route::resource('grade', 'API\GradeController');
    Route::resource('pembayaran', 'API\PembayaranController');
    Route::resource('profile', 'API\ProfileController');
});