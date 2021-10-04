<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\PlaceController;
use App\Http\Controllers\api\PlacesDataController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::middleware('api')->group(function () {
//     Route::resource('user', UserController::class);
// });

Route::get('/places/provinces', [PlacesDataController::class, 'provinces']);
Route::get('/places/{province}/regions', [PlacesDataController::class, 'regions']);
Route::get('/places/{regions}/districts', [PlacesDataController::class, 'districts']);
Route::get('/places/{districts}/communes', [PlacesDataController::class, 'communes']);
Route::get('/places/{communes}/fokontany', [PlacesDataController::class, 'getFokontany']);

Route::apiResource('places', PlaceController::class);