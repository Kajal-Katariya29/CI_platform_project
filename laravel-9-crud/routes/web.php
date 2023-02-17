<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CustomAuthController;

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

Route::get("company",[CompanyController::class,'show']);

Route::post("company/store",[CompanyController::class,'store']);

Route::get("display",[CompanyController::class,'display']);

Route::get("create",[CompanyController::class,'show']);

Route::get("edit/{id}",[CompanyController::class,'edit']);

Route::post("update/{id}",[CompanyController::class,'update']);

Route::get("delete/{id}",[CompanyController::class,'destroy']);

//Route::get("back",[CompanyController::class,'back']);

Route::get("back",[CompanyController::class,'back']);

Route::get('dashboard', [CustomAuthController::class, 'dashboard']);

Route::get('login', [CustomAuthController::class, 'index'])->name('login');

Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 

Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');

Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 

Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');










