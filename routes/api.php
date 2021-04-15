<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\DistrictController;
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

Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:api')->group(function () {
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('change-password', [AuthController::class, 'changePassword']);
    Route::apiResource('visitors', VisitorController::class)->except('index', 'store');
});

//province
Route::get('provinces/all', [ProvinceController::class, 'all']);
Route::get('provinces/only-jabodetabek', [ProvinceController::class, 'onlyJabodetabek']);

//district
Route::get('districts/by-province/{id}', [DistrictController::class, 'byProvince']);

// example
Route::apiResource('visitors', VisitorController::class); 
Route::get('/mailable', function () {
    $visitor = App\Models\Visitor::find(1);

    return new App\Mail\RegisterShipped($visitor);
});