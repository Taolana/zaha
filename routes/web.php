<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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


Auth::routes();

//
//
//

Route::get('/login/admin', [LoginController::class, 'showAdminLoginForm']);
Route::get('/login/touriste', [LoginController::class,'showTouristeLoginForm']);
Route::get('/register/admin', [RegisterController::class,'showAdminRegisterForm']);
Route::get('/register/touriste', [RegisterController::class,'showTouristeRegisterForm']);

Route::post('/login/admin', [LoginController::class,'adminLogin']);
Route::post('/login/touriste', [LoginController::class,'touristeLogin']);
Route::post('/register/admin', [RegisterController::class,'createAdmin']);
Route::post('/register/touriste', [RegisterController::class,'createTouriste']);

Route::group(['middleware' => 'auth:touriste'], function () {
    Route::view('/touriste', 'touriste');
});

Route::group(['middleware' => 'auth:admin'], function () {
    Route::view('/admin', 'back-office.index');
});

Route::get('logout', [LoginController::class,'logout']);
