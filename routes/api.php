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

Route::get("configGET","App\Http\Controllers\ConfigurationController@index");
Route::get("peopleGET","App\Http\Controllers\PeopleController@index");
Route::get("roleGET","App\Http\Controllers\RoleController@index");






Route::post("configPOST","App\Http\Controllers\ConfigurationController@store");
Route::post("peoplePOST","App\Http\Controllers\PeopleController@store");
Route::post("rolePOST","App\Http\Controllers\RoleController@store");




Route::patch("configPATCH/{id}","App\Http\Controllers\ConfigurationController@update");
Route::patch("peoplePATCH/{id}","App\Http\Controllers\PeopleController@update");
Route::patch("rolePATCH/{id}","App\Http\Controllers\RoleController@update");





Route::delete("configDELETE/{id}","App\Http\Controllers\ConfigurationController@destroy");
Route::delete("peopleDELETE/{id}","App\Http\Controllers\PeopleController@destroy");
Route::delete("roleDELETE/{id}","App\Http\Controllers\RoleController@destroy");

