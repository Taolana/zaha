<?php

use App\Models\Place;
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
    $datas = Place::orderBy('created_at', 'desc')->where('confirmed', true)->limit(3)->get();
    if(!empty($datas->toArray())){
        $first = $datas[0];
        $other1 = $datas[1];
        $other2 = $datas[2];
    }
    return view('front-office.index',
    [
        'first'=>$first = null,
        'other1'=>$other1 = null,
        'other2'=>$other2 = null,
    ]
    );
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
    $datas = Place::orderBy('created_at', 'desc')->where('confirmed', true)->limit(3)->get();
    if(!empty($datas->toArray())){
        $first = $datas[0];
        $other1 = $datas[1];
        $other2 = $datas[2];
    }

    Route::view('/touriste', 'front-office.index', [
        'first'=>$first = null,
        'other1'=>$other1 = null,
        'other2'=>$other2 = null,
    ]);
    Route::prefix('/touriste')->group(function () {
        Route::get('/list', [PlaceController::class, 'index'])->name('touriste.places.list');
    });
});

Route::group(['middleware' => 'auth:admin'], function () {
    Route::view('/admin', 'back-office.index');

    Route::prefix('/admin/users/moderators')->group(function () {
        Route::get('/list', [ModeratorController::class, 'index'])->name('moderators.admin.list');
    });
    Route::prefix('/admin/users/guides')->group(function () {
        Route::get('/list', [\App\Http\Controllers\admin\GuideController::class, 'index'])->name('guides.admin.list');
    });
    Route::prefix('/admin/users/touristes')->group(function () {
        Route::get('/list', [\App\Http\Controllers\admin\TouristeController::class, 'index'])->name('touristes.admin.list');
    });
    Route::prefix('/admin')->group(function () {
        Route::get('/place', [\App\Http\Controllers\admin\PlaceController::class, 'index'])->name('admin.places.index');
        Route::get('/place/approuve/{idPlace}/{idApprouver}', [\App\Http\Controllers\admin\PlaceController::class, 'approuvePlace'])->name('admin.places.index.approuve');
        Route::get('/place/decline/{idPlace}/{idDeclinner}', [\App\Http\Controllers\admin\PlaceController::class, 'declinePlace'])->name('admin.places.index.decline');
        Route::get('/place/approuved', [\App\Http\Controllers\admin\PlaceController::class, 'listApprouvedPlace'])->name('admin.places.list.approuved');
        Route::get('/place/declined', [\App\Http\Controllers\admin\PlaceController::class, 'listDeclinedPlace'])->name('admin.places.list.declined');
    });
});

Route::group(['middleware' => 'auth:guide'], function () {
    $datas = Place::orderBy('created_at', 'desc')->where('confirmed', true)->limit(3)->get();
    if(!empty($datas->toArray())){
        $first = $datas[0];
        $other1 = $datas[1];
        $other2 = $datas[2];
    }

    Route::view('/touriste', 'front-office.index', [
        'first'=>$first = null,
        'other1'=>$other1 = null,
        'other2'=>$other2 = null,
    ]);
    Route::prefix('/guide/place')->group(function () {
        Route::get('/{any}', [App\Http\Controllers\api\PlaceController::class, 'index'])->where('any', '.*')->name('guide.places.list');
    });
    Route::resource('/web/api/places', App\Http\Controllers\api\PlaceController::class);
});

Route::group(['middleware' => 'auth:moderateur'], function () {
    Route::view('/moderateur', 'back-office.index');
});

Route::get('logout', [LoginController::class,'logout']);


