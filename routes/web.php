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
Route::get('about',[FrontController::class,'about']);
Route::get('team',[FrontController::class,'team']);
Route::get('recharge',[FrontController::class,'recharge']);
Route::get('cashier',[FrontController::class,'cashier']);
Route::get('withdrawl',[FrontController::class,'withdrawl']);
Route::get('invite',[FrontController::class,'invite']);
Route::get('profile',[FrontController::class,'profile']);
Route::get('plan_record',[FrontController::class,'plan_record']);
Route::get('account_record',[FrontController::class,'account_record']);
Route::get('security_center',[FrontController::class,'security_center']);
Route::get('forget_password',[FrontController::class,'forget_password']);
Route::get('withdrawal_forget_password',[FrontController::class,'withdrawal_forget_password']);

Route::fallback(function(){
    return redirect('home');
});