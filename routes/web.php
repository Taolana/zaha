<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\admin\ModeratorController;

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

// Route::get('{any}', function () {
//     return view('layouts.app');
// })->where('any', '.*');

//
//
//

Route::get('/login/admin', [LoginController::class, 'showAdminLoginForm']);
Route::get('/login/touriste', [LoginController::class,'showTouristeLoginForm']);
Route::get('/login/moderateur', [LoginController::class, 'showModerateurLoginForm']);
Route::get('/login/guide', [LoginController::class,'showGuideLoginForm']);

Route::get('/register/admin', [RegisterController::class,'showAdminRegisterForm']);
Route::get('/register/touriste', [RegisterController::class,'showTouristeRegisterForm']);
Route::get('/register/moderateur', [RegisterController::class,'showModerateurRegisterForm']);
Route::get('/register/guide', [RegisterController::class,'showGuideRegisterForm']);


Route::post('/login/admin', [LoginController::class,'adminLogin']);
Route::post('/login/touriste', [LoginController::class,'touristeLogin']);
Route::post('/login/moderateur', [LoginController::class,'moderateurLogin']);
Route::post('/login/guide', [LoginController::class,'guideLogin']);

Route::post('/register/admin', [RegisterController::class,'createAdmin']);
Route::post('/register/touriste', [RegisterController::class,'createTouriste']);
Route::post('/register/moderateur', [RegisterController::class,'createModerateur']);
Route::post('/register/guide', [RegisterController::class,'createGuide']);

Route::group(['middleware' => 'auth:touriste'], function () {
    Route::view('/touriste', 'touriste');
});

Route::group(['middleware' => 'auth:admin'], function () {
    Route::view('/admin', 'back-office.index');

    Route::prefix('/admin/users/moderators')->group(function () {
        Route::get('/list', [ModeratorController::class, 'index'])->name('moderators.list');
    });
});

Route::group(['middleware' => 'auth:guide'], function () {
    Route::view('/guide', 'guide');
});

Route::group(['middleware' => 'auth:moderateur'], function () {
    Route::view('/moderateur', 'back-office.index');
});

Route::get('logout', [LoginController::class,'logout']);
