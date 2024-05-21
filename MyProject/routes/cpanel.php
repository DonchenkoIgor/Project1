<?php


use App\Http\Controllers\AdminController;

\Illuminate\Support\Facades\Route::get('/', [AdminController::class, 'showOrders'])->name('adminPanel');

