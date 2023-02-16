<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;

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






