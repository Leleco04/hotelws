<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\AdministratorsController;

Route::get('/', [LoginController::class, 'index'])->name('site.login');
Route::get('/login', [LoginController::class, 'index'])->name('site.login');
Route::post('/login', [LoginController::class, 'autenticar'])->name('site.login');
Route::get('/hotel/list', [HotelController::class, 'index'])->name('hotel.list');
Route::get('/hotel/costs/list', [HotelController::class, 'costs'])->name('hotel.costs');
Route::get('/administrators', [AdministratorsController::class, 'index'])->name('hotel.administrators');