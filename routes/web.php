<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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
Route::get('/', [PagesController::class, 'main'])->name('main');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/gallery', [PagesController::class, 'gallery'])->name('gallery');
Route::get('/wood_carving', [PagesController::class, 'woodCarving'])->name('woodCarving');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/workshop', [PagesController::class, 'workshop'])->name('workshop');
Route::get('/services', [PagesController::class, 'services'])->name('services');
Route::get('/services/{id}', [PagesController::class, 'show_services'])->name('show_service');
