<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserTypesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\OrderssController;
use App\Http\Controllers\FoodsController;
use App\Http\Controllers\OrderItemsController;
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
/// Setting up routes for our Project these define the flow of program



Route::group(['prefix' => 'user_types'], function () {
    Route::get('/', [UserTypesController::class, 'index']);
    Route::get('/{id}', [UserTypesController::class, 'show']);
    Route::post('/', [UserTypesController::class, 'store']);
    Route::put('/{id}', [UserTypesController::class, 'update']);
    Route::delete('/{id}', [UserTypesController::class, 'destroy']);
});

Route::group(['prefix' => 'users'], function () {
    Route::get('/', [UsersController::class, 'index']);
    Route::get('/{id}', [UsersController::class, 'show']);
    Route::post('/', [UsersController::class, 'store']);
    Route::put('/{id}', [UsersController::class, 'update']);
    Route::delete('/{id}', [UsersController::class, 'destroy']);
});

Route::group(['prefix' => 'orders'], function () {
    Route::get('/', [OrderssController::class, 'index']);
    Route::get('/{id}', [OrderssController::class, 'show']);
    Route::post('/', [OrderssController::class, 'store']);
    Route::put('/{id}', [OrderssController::class, 'update']);
    Route::delete('/{id}', [OrderssController::class, 'destroy']);
});

Route::group(['prefix' => 'foods'], function () {
    Route::get('/', [FoodsController::class, 'index']);
    Route::get('/{id}', [FoodsController::class, 'show']);
    Route::post('/', [FoodsController::class, 'store']);
    Route::put('/{id}', [FoodsController::class, 'update']);
    Route::delete('/{id}', [FoodsController::class, 'destroy']);
});

Route::group(['prefix' => 'order_items'], function () {
    Route::get('/', [OrderItemsController::class, 'index']);
    Route::get('/{id}', [OrderItemsController::class, 'show']);
    Route::post('/', [OrderItemsController::class, 'store']);
    Route::put('/{id}', [OrderItemsController::class, 'update']);
    Route::delete('/{id}', [OrderItemsController::class, 'destroy']);
});




