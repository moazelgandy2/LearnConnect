<?php

use App\Http\Controllers\UsersController;
use App\Http\Controllers\VideosController;
use App\Http\Controllers\ActivationController;
use App\Http\Controllers\watchVideoController;
use App\Http\Controllers\updateProfileController;

Route::get('/home', [VideosController::class, 'home'])->name('home');
Route::get('/activate', [UsersController::class, 'index'])->name('activate');
Route::get('/videos', [VideosController::class, 'index'])
    ->name('videos')
    ->middleware('active');
Route::get('/profile', [updateProfileController::class, 'index'])->name('profile');

Route::put('/profile/update', [updateProfileController::class,'update'])->name('profile.update');

Route::get('/activation', [ActivationController::class, 'showActivationForm'])->name('activation.form');
Route::post('/activation/process', [ActivationController::class, 'processActivation'])->name('activation.process');
Route::get('/watch-video', [watchVideoController::class, 'index'])->name('watch-video');

Route::get('/test',function(){
    return view('register');
});
