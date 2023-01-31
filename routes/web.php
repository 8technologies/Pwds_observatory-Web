<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/sign-up', [AuthController::class, 'sign_up'])->name('sign_up');

Route::get('/', [SiteController::class, 'home'])->name('home');
Route::get('/events/{id?}', [SiteController::class, 'events'])->name('events');
Route::get('/services/{id?}', [SiteController::class, 'services'])->name('services');
Route::get('/opportunities/{id?}', [SiteController::class, 'opportunities'])->name('opportunities');
Route::get('/information_bank/{id?}', [SiteController::class, 'info_bank'])->name('info_bank');
