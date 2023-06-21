<?php

use App\Http\Controllers\aboutController;
use App\Http\Controllers\authController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\profileController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [homeController::class, "index"])->name("home");
Route::get('/about', [aboutController::class, "index"])->name("about");
Route::get('/profile', [profileController::class, "index"])->name("profile");
Route::get('/contact', [contactController::class, "index"])->name("contact");


Route::get('/login', [authController::class, "login"])->name("login");
Route::get('/register', [authController::class, "register"])->name("register");
