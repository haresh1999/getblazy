<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'getBlazy'])->name('home')->middleware('web');
Route::get('miami-weed-delivery', [HomeController::class, 'miami'])->name('miami.weed');
Route::get('detroit-weed-delivery', [HomeController::class, 'detroit'])->name('detroit.weed');
Route::get('chicago-weed-delivery', [HomeController::class, 'chicago'])->name('chicago.weed');
Route::post('shopping', [HomeController::class, 'shopping'])->name('shopping');
Route::post('subscribe', [HomeController::class, 'subscribe'])->name('subscribe');