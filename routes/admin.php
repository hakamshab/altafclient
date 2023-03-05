<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AddcaseController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UpiController;
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

// Route::get('admin', function () {
//     return "asas";
// });
Route::get('user', [UserController::class, 'index']);
//login
Route::get('admin', [AuthController::class, 'loginview']);
Route::any('custom-login', [AuthController::class,'customlogin']);
Route::any('logout', [AuthController::class,'signOut']);
//addcase
Route::get('Case-info',[AddcaseController::class,'info']);
Route::post('Case-info',[AddcaseController::class,'create']);
Route::get('Case-list',[AddcaseController::class,'showdata']);
Route::get('Case-edit/{id}',[AddcaseController::class,'edit']);
Route::post('Case-edit/{id}',[AddcaseController::class,'update']);
Route::get('Case-delete/{id}',[AddcaseController::class,'delete']);

// product add
//addcase
Route::get('product/list',[ProductController::class,'info'])->name('product-list');
Route::get('product/add',[ProductController::class,'addShow']);
Route::post('product/store',[ProductController::class,'create']);
Route::get('product/show',[ProductController::class,'showdata']);
Route::get('product/edit/{id}',[ProductController::class,'edit']);
Route::post('product/update/{id}',[ProductController::class,'update']);
Route::get('product/delete/{id}',[ProductController::class,'delete']);
// Upi

Route::get('upi/list',[UpiController::class,'listshow'])->name('upi-list');
Route::get('upi/add',[UpiController::class,'addShow']);
Route::post('upi/store',[UpiController::class,'create']);
Route::get('upi/show',[UpiController::class,'showdata']);
Route::get('upi/edit/{id}',[UpiController::class,'edit']);
Route::post('upi/update/{id}',[UpiController::class,'update']);
Route::get('upi/delete/{id}',[UpiController::class,'delete']);

Route::fallback(function(){
    return redirect('product/list');
});
