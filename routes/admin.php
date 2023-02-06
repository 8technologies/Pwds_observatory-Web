<?php

use App\Http\Controllers\Admin\OpportunitiesController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/user-accounts/{id?}', [HomeController::class, 'users'])->name('users');
Route::get('/opportunities/{id?}', [OpportunitiesController::class, 'view'])->name('admin_opportunities');
Route::match(['GET', 'POST'], '/post_opportunity', [OpportunitiesController::class, 'create'])->name('post_opportunity');
