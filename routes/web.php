<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TimelineController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/timeline', TimelineController::class)->name('timeline');
