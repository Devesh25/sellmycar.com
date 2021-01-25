<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\listCars;
use App\Http\Controllers\carDealers;
use App\Http\Controllers\marketPlacesController;
use App\Http\Controllers\addDetailsController;

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

Route::get("model_details",[listCars::class,'getData']);

Route::get("dealers_list",[carDealers::class,'dealers_list']);

Route::get("marketPlaceView",[marketPlacesController::class,'marketPlaceView']);

Route::post("adddetails",[addDetailsController::class,'addDetails']);