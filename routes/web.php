<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FederationController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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
Route::get('/search', [HomeController::class,'search']);
Route::get('/search/{federation_id}', [HomeController::class,'searchCompanies']);

//Autenticação
Route::get('/login',[HomeController::class,'login']);
Route::get('/logged',[HomeController::class,'logged']);

//Cadastro de Usuário
Route::get('/register',[UserController::class,'create']);


