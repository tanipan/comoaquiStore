<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HuberController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\ArticlesController;

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

Route::post('/huber', [HuberController::class, 'createhuber'])->name('huber.createhuber');
Route::get('/getStocks', [ArticlesController::class, 'getStocks'])->name('api.getStocks');
Route::post('/setStoks', [StockController::class, 'setStoks'])->name('api.setStoks');
Route::post('/orderList', [ArticlesController::class, 'orderList'])->name('api.orderList');