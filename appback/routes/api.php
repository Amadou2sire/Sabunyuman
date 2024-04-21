<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\SouscriptionController;
use App\Http\Controllers\Api\AuthenticationController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/allbrands',[BrandController::class,'getBrand']);
Route::get('/allsouscription',[SouscriptionController::class,'getSouscription']);
Route::post('/storesouscription',[SouscriptionController::class,'StoreSouscription']);


Route::group(['namespace' => 'Api', 'prefix' => 'v1'], function () {
    Route::post('login', [AuthenticationController::class, 'store']);
    Route::post('logout', [AuthenticationController::class, 'destroy'])->middleware('auth:sanctum');
  });