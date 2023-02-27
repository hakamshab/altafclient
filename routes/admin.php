<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AddcaseController;
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
//addcase
Route::get('Add Case-info',[AddcaseController::class,'info']);
Route::post('Add Case-info',[AddcaseController::class,'create']);
Route::get('Add Case-list',[AddcaseController::class,'showdata']);
Route::get('Add Case-edit/{id}',[AddcaseController::class,'edit']);
Route::post('Add Case-edit/{id}',[AddcaseController::class,'update']);
Route::get('Add Case-delete/{id}',[AddcaseController::class,'delete']);
