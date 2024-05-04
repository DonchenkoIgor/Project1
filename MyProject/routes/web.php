<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\PageController::class, 'index']);

Route::get('/time/{interval}/{serviceDuration}/{breakDuration}', [\App\Http\Controllers\PageController::class, 'time']);

Route::get('/services', [\App\Http\Controllers\PageController::class, 'services'])->name('pages.services');
Route::get('/staff', [\App\Http\Controllers\PageController::class, 'staff'])->name('pages.staff');
Route::get('/schedules', [\App\Http\Controllers\PageController::class, 'schedule'])->name('pages.schedules');
Route::get('/confirmation', [\App\Http\Controllers\PageController::class, 'confirmation'])->name('pages.confirmation');

Route::get('/vacation/{startDate}/{duration}', [\App\Http\Controllers\PageController::class, 'vacation']);




