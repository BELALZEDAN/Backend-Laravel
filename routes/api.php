<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkShopController;
use App\Http\Controllers\WorkShopImageController;
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

// Auth
Route::post('login' , [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout']);
// User
Route::apiResource('users' , UserController::class);
// About
Route::apiResource('about' , AboutController::class);
// Service
Route::apiResource('service' , ServiceController::class);
// Slider
Route::apiResource('slider' , SliderController::class);
// Team
Route::apiResource('team' , TeamController::class);
// Contact
Route::apiResource('contact' , ContactController::class);
// Gallery
Route::apiResource('gallery' , GalleryController::class);
// WorkShop
Route::apiResource('workshop' , WorkShopController::class);
// WorkShopImage
Route::apiResource('workshopimage' , WorkShopImageController::class);
