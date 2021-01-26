<?php

use App\Http\Controllers\AncestorController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DescendantController;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\XenditController;
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

Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:api')->group(function () {
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('change-password', [AuthController::class, 'changePassword']);
    Route::apiResource('examples', ExampleController::class)->except('index', 'show');
    Route::apiResource('ancestors', AncestorController::class)->except('index', 'show');
    Route::apiResource('descendants', DescendantController::class)->except('index', 'show');
    Route::post('upload', [UploadController::class, 'upload']);
});

// example
Route::get('examples/all', [ExampleController::class, 'all']);
Route::apiResource('examples', ExampleController::class)->only('index', 'show');

// ancestor
Route::get('ancestors/all', [AncestorController::class, 'all']);
Route::apiResource('ancestors', AncestorController::class)->only('index', 'show');

// descendant
Route::get('descendants/all', [DescendantController::class, 'all']);
Route::apiResource('descendants', DescendantController::class)->only('index', 'show');

Route::get('xendit/getBalance', [XenditController::class, 'getBalance']);
Route::post('xendit/createInvoice', [XenditController::class, 'createInvoice']);
Route::get('xendit/getInvoice/{id}', [XenditController::class, 'getInvoice']);
Route::post('xendit/voidInvoice', [XenditController::class, 'voidInvoice']);
Route::get('xendit/getAllInvoice', [XenditController::class, 'getAllInvoice']);
Route::get('xendit/getAllBanks', [XenditController::class, 'getAllBanks']);
Route::post('xendit/createVirtualAccount', [XenditController::class, 'createVirtualAccount']);
