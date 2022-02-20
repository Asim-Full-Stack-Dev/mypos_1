<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\API\AuthController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);


Route::middleware(['auth:sanctum'])->group(function () {

    Route::post('logout', [AuthController::class, 'logout']);


});


Route::post('addstore', 'StoreController@addstore');
Route::get('store', 'StoreController@getstore');

Route::post('purchase', 'PurchaseController@purchase');
Route::get('purchase', 'PurchaseController@getPurchase');

Route::post('stock', 'StockController@stock');
Route::get('stock', 'StockController@getStock');

Route::post('expense', 'ExpenseController@expense');
Route::get('expense', 'ExpenseController@getExpense');
