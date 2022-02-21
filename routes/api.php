<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Store\ExpenseController;
use App\Http\Controllers\Store\PurchaseController;
use App\Http\Controllers\Store\StockController;
use App\Http\Controllers\Store\StoreController;
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


Route::get('store', [StoreController::class, 'getstore']);
Route::post('addstore', [StoreController::class, 'addstore']);

Route::get('purchase', [PurchaseController::class, 'getPurchase']);
Route::post('purchase', [PurchaseController::class, 'purchase']);

Route::get('stock', [StockController::class, 'getStock']);
Route::post('stock', [StockController::class, 'stock']);

Route::get('expense', [ExpenseController::class, 'getExpense']);
Route::post('expense', [ExpenseController::class, 'expense']);
