<?php

use App\Http\Controllers\PersonController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('user/json', [UserController::class, 'indexJson']);
Route::get('user/xml', [UserController::class, 'indexXml']);

Route::get('person/store/api', [PersonController::class, 'store']);
