<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ExpenseController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
//HOME
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'add_store'])->name('home');
Route::get('/add_store', [App\Http\Controllers\HomeController::class, 'add_store'])->name('add_store');
Route::post('/add_store', [App\Http\Controllers\HomeController::class, 'store'])->name('add_store');


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/home1', [App\Http\Controllers\HomeController::class, 'home1'])->name('home1');
// Route::get('/home2', [App\Http\Controllers\HomeController::class, 'home2'])->name('home2');
// Route::get('/home3', [App\Http\Controllers\HomeController::class, 'home3'])->name('home3');


//master
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
Route::get('login', 'AuthController@login')->name('login');

//Purchase
Route::get('/purchase', [App\Http\Controllers\PurchaseController::class, 'index'])->name('purchase');
Route::get('/add_purchase', [App\Http\Controllers\PurchaseController::class, 'create'])->name('add_purchase');
Route::post('/add_purchase', [App\Http\Controllers\PurchaseController::class, 'store'])->name('add_purchase');
Route::get('/purchase_list', [App\Http\Controllers\PurchaseController::class, 'purchase_list'])->name('purchase_list');
Route::get('edit_purchase/{id}', [PurchaseController::class, 'edit']);
Route::put('update_purchase/{id}', [PurchaseController::class, 'update']);
Route::get('delete_purchase/{id}', [PurchaseController::class, 'destroy']);

//Stock
Route::get('/add_stock', [App\Http\Controllers\StockController::class, 'add_stock'])->name('add_stock');
Route::get('/add_stock', [App\Http\Controllers\StockController::class, 'create'])->name('add_stock');
Route::post('/add_stock', [App\Http\Controllers\StockController::class, 'store'])->name('add_stock');
Route::get('/stock_list', [App\Http\Controllers\StockController::class, 'stock_list'])->name('stock_list');
Route::get('edit_stock/{id}', [StockController::class, 'edit']);
Route::put('update_stock/{id}', [StockController::class, 'update']);
Route::get('delete_stock/{id}', [StockController::class, 'destroy']);

//Sales
Route::get('/add_sale', [App\Http\Controllers\SaleController::class, 'add_sale'])->name('add_sale');
Route::get('/sale_list', [App\Http\Controllers\SaleController::class, 'sale_list'])->name('sale_list');



// STORE
Route::get('/add_store', [App\Http\Controllers\StoreController::class, 'add_store'])->name('add_store');
Route::get('/add_store', [App\Http\Controllers\StoreController::class, 'create'])->name('add_store');
Route::post('/add_store', [App\Http\Controllers\StoreController::class, 'store'])->name('add_store');
Route::get('/store_list', [App\Http\Controllers\StoreController::class, 'store_list'])->name('store_list');
Route::get('edit_store/{id}', [StoreController::class, 'edit']);
Route::put('update_store/{id}', [StoreController::class, 'update']);
Route::get('delete_store/{id}', [StoreController::class, 'destroy']);

// Expense Tracker
Route::get('/add_expense', [App\Http\Controllers\ExpenseController::class, 'add_expense'])->name('add_expense');
Route::get('/add_expense', [App\Http\Controllers\ExpenseController::class, 'create'])->name('add_expense');
Route::post('/add_expense', [App\Http\Controllers\ExpenseController::class, 'store'])->name('add_expense');
Route::get('/expense_list', [App\Http\Controllers\ExpenseController::class, 'expense_list'])->name('expense_list');
Route::get('edit_expense/{id}', [ExpenseController::class, 'edit']);
Route::put('update_expense/{id}', [ExpenseController::class, 'update']);
Route::get('delete_expense/{id}', [ExpenseController::class, 'destroy']);
