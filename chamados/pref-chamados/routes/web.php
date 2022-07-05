<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CallController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\OsController;
use App\Http\Controllers\ServicesController;
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
// Route::get('/', function () {
//     return "Ola";
// });

Route::get('/', [HomeController::class, 'home']);

Route::get('/login', [LoginController::class, 'login']);
Route::get('/home', [HomeController::class, 'home']);
Route::get('/os', [OsController::class, 'os']);
Route::get('/services', [ServicesController::class, 'services']);
Route::get('/user', [UserController::class, 'user']);
Route::get('/computer', [ComputerController::class, 'computer']);
Route::get('/call', [CallController::class, 'call']);
