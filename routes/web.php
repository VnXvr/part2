<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;

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

Route::view('add','addcustomer')->middleware('auth');
Route::post('add', [CustomerController::class, 'addData'])->middleware('auth');


Route::get('/register', [UserController::class, 'register']);
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

Route::post('/login/process', [UserController::class, 'process']);
Route::post('/store', [UserController::class, 'store']);

Route::get('/logout', [UserController::class, 'logout']);




