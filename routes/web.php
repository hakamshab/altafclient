<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontController;

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


Route::get('home',[FrontController::class,'index']);
Route::get('recharge',[FrontController::class,'recharge']);
Route::get('cashier',[FrontController::class,'cashier']);
Route::get('withdrawl',[FrontController::class,'withdrawl']);
Route::get('invite',[FrontController::class,'invite']);
Route::get('profile',[FrontController::class,'profile']);
Route::fallback(function(){
	return redirect('home');
});