<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\TimelineController;
use App\Http\Controllers\FollowingController;
use App\Http\Controllers\ExploreUserController;
use App\Http\Controllers\UpdatePasswordController;
use App\Http\Controllers\ProfileInformationController;
use App\Http\Controllers\UpdateProfileInformationController;


Route::get('/', WelcomeController::class);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function() {
    Route::get('/timeline', TimelineController::class)->name('timeline');
    
    Route::post('/status', [StatusController::class, 'store'])->name('status.store');

    Route::prefix('/profile')->group(function() {
        Route::get('/{user}', ProfileInformationController::class)->name('profile')->withoutMiddleware('auth');
        Route::get('/{user}/{following}', [FollowingController::class, 'index'])->name('following.index');
    });

    Route::post('/following/{user}', [FollowingController::class, 'store'])->name('following.store');

    Route::get('/explore', ExploreUserController::class)->name('users.index');

    Route::get('/edit', [UpdateProfileInformationController::class, 'edit'])->name('edit');
    Route::put('/update', [UpdateProfileInformationController::class, 'update'])->name('update');

    Route::get('/password/edit', [UpdatePasswordController::class, 'edit'])->name('edit.password');
    Route::put('/password/update', [UpdatePasswordController::class, 'update'])->name('update.password');
    
});

require __DIR__.'/auth.php';


