<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\front\PlaceController;
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
    return view('front-office.index');
});

Route::get('lang/{locale}', [\App\Http\Controllers\LocalizationController::class, 'index'])->name('lang');

Auth::routes();

// Route::get('{any}', function () {
//     return view('layouts.app');
// })->where('any', '.*');

//
//
//

// guest

Route::get('/place/list', [PlaceController::class, 'index'])->name('guest.places.list');

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


// middlewares

Route::group(['middleware' => 'auth:touriste'], function () {
    Route::view('/touriste', 'front-office.index');
    Route::prefix('/touriste')->group(function () {
        Route::get('/list', [PlaceController::class, 'index'])->name('touriste.places.list');
    });
});

Route::group(['middleware' => 'auth:admin'], function () {
    Route::view('/admin', 'back-office.index');

    Route::prefix('/admin/users/moderators')->group(function () {
        Route::get('/list', [ModeratorController::class, 'index'])->name('moderators.list');
    });
});

Route::group(['middleware' => 'auth:guide'], function () {
    Route::view('/guide', 'front-office.index');
    Route::prefix('/guide/place')->group(function () {
        Route::get('/{any}', function () {
            return view('front-office.pages.places');
        })->where('any', '.*')->name('guide.places.list');
    });
});

Route::group(['middleware' => 'auth:moderateur'], function () {
    Route::view('/moderateur', 'back-office.index');
});

Route::get('logout', [LoginController::class,'logout']);


