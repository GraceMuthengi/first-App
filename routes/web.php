<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/companies', function () {
    //return controller ('CompanyController');
});

// Route::('/companies','App\Http\Controllers\UserController@index');

//Route::get('/users', 'App\Http\Controllers\UserController@index');

//CompanyController::class);

// use App\Http\Controllers\CompanyController;
// Route::('/companies','App\Http\Controllers\UserController@index');