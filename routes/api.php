<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\ProductController;
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

Route::post('hello', [DemoController::class, 'index']);

Route::group([ 'prefix' => 'products' ], function () {
    Route::get('', [ProductController::class, 'list']);
    Route::post('', [ProductController::class, 'create']);
    Route::get('{id}', [ ProductController::class, 'single' ]);
    Route::put('{id}', [ ProductController::class, 'update' ]);
    Route::delete('{id}', [ ProductController::class, 'delete' ]);
});
