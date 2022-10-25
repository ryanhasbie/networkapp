<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\TimelineController;
use App\Http\Controllers\ProfileInformationController;


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function() {
    Route::get('/timeline', TimelineController::class)->name('timeline');
    Route::post('/status', [StatusController::class, 'store'])->name('status.store');
    Route::get('/profile/{user}', ProfileInformationController::class)->name('profile');
});

require __DIR__.'/auth.php';


