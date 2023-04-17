<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/rooms', [RoomController::class, 'index'])->middleware('auth');

Route::get('/', [CustomerController::class, 'index1']);
Route::get('delete/{id}', [CustomerController::class, 'delete'])->middleware('auth');

Route::get('edit/{id}', [CustomerController::class, 'showData'])->middleware('auth');
Route::post('edit', [CustomerController::class, 'update']);

Route::get('/policy', [CustomerController::class, 'showdataofUser']);

//Add Customers
Route::view('add','addcustomer')->middleware('auth');
Route::post('add', [CustomerController::class, 'addData'])->middleware('auth');


Route::get('/products', [ProductController::class, 'product'])->middleware('auth');
Route::get('editproducts/{id}', [ProductController::class, 'showProduct'])->middleware('auth');
Route::post('editproducts', [ProductController::class, 'updateProduct']);
Route::get('deleteproduct/{id}', [ProductController::class, 'deleteproduct'])->middleware('auth');

//Add Products
Route::view('addprod','addproducts')->middleware('auth');
Route::post('addprod', [ProductController::class, 'addProduct'])->middleware('auth');


Route::get('/register', [UserController::class, 'register']);
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

Route::post('/login/process', [UserController::class, 'process']);
Route::post('/store', [UserController::class, 'store']);

Route::get('/logout', [UserController::class, 'logout']);




