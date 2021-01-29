<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['middleware' => 'auth:api'], function () {

});
Route::get('/locations','LocationController@index');
Route::get('/customers','CustomerController@index');
Route::get('/manufatureres','ManufacturerController@index');
Route::get('/modelvehicles','ModelVehicleController@index');
Route::get('/type-vehicles','TypeVehicleController@index');
Route::get('/rental-status','RentalStatusController@index');
Route::get('/vehicle','VehicleController@index');
Route::get('/rental','RentalController@index');
Route::get('/rental/pagine','RentalController@pagine');

