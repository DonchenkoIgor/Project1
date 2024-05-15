<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', [\App\Http\Controllers\PageController::class, 'index'])->name('home');

//Route::get('/', function () {
    //return view('welcome');
//});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified', \App\Http\Middleware\CheckRole::class . 'admin,manager,assistant'])->group(function (){
    Route::get('/control', [\App\Http\Controllers\UserController::class, 'access'])->name('pages.control');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/time/{interval}/{serviceDuration}/{breakDuration}', [\App\Http\Controllers\PageController::class, 'time']);

Route::get('/services', [\App\Http\Controllers\PageController::class, 'services'])->name('pages.services');
Route::get('/staff', [\App\Http\Controllers\PageController::class, 'staff'])->name('pages.staff');
Route::get('/schedules', [\App\Http\Controllers\PageController::class, 'schedule'])->name('pages.schedules');
Route::get('/confirmation', [\App\Http\Controllers\PageController::class, 'confirmation'])->name('pages.confirmation');

Route::get('/vacation/{startDate}/{duration}', [\App\Http\Controllers\PageController::class, 'vacation']);

require __DIR__.'/auth.php';
