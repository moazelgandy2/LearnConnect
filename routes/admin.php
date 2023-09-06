<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\VideosController;
use App\Http\Controllers\studetnsController;
use App\Http\Controllers\creatCodeController;
use App\Http\Controllers\uploadVideoController;
use App\Http\Controllers\adminDashboardController;
use App\Http\Controllers\ActivationCodesController;



Route::get('admin',[adminDashboardController::class,'index'])->name('admin');
Route::get('codes',[creatCodeController::class,'index'])->name('codes');
Route::get('students',[studetnsController::class,'index']);
Route::get('upload',[uploadVideoController::class,'index']);
Route::post('generate-codes', [creatCodeController::class,'generateCodes']);
Route::post('activate-code/{id}', [ActivationCodesController::class,'activate'])->name('activate-code');
Route::post('deactivate-code/{id}', [ActivationCodesController::class,'deactivate'])->name('deactivate-code');

Route::post('activate-student/{id}', [studetnsController::class,'activate'])->name('activate-student');
Route::post('deactivate-student/{id}', [studetnsController::class,'deactivate'])->name('deactivate-student');
Route::post('edit-student/{id}', [studetnsController::class,'editStudent'])->name('edit-student');
Route::post('save-student/{id}', [studetnsController::class,'saveStudent'])->name('save-student');
Route::delete('delete-student/{id}', [studetnsController::class,'deleteStudent'])->name('delete-student');

Route::get('adminVideos',[VideosController::class,'admin']);
Route::delete('delete-video/{id}', [VideosController::class, 'deleteVideo'])->name('delete-video');
Route::post('upload-video', [VideosController::class, 'uploadVideo'])->name('upload-video');
