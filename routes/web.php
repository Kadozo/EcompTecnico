<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FederationController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class,'index']);
Route::get('/register', [HomeController::class, 'create']);
Route::get('/search', [HomeController::class,'search']);
Route::get('/search/{federation_id}', [HomeController::class,'searchCompanies']);
Route::post('/register/company/done',[HomeController::class, 'store']);

