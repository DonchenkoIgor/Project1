<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('/services', [\App\Http\Controllers\ApiController::class, 'services']);
Route::get('/staff', [\App\Http\Controllers\ApiController::class, 'staff']);
Route::get('/schedules', [\App\Http\Controllers\ApiController::class, 'schedule']);
Route::get('set-entity/{entity}/{data}', [\App\Http\Controllers\ApiController::class, 'saveStep']);
Route::get('/confirmation', [\App\Http\Controllers\ApiController::class, 'confirmation']);

