<?php

use App\Http\Controllers\Admin\OpportunitiesController;
use App\Http\Controllers\Admin\InnovationsController;
use App\Http\Controllers\Admin\NewsEventsController;
use App\Http\Controllers\Admin\InfoBankController;
use App\Http\Controllers\admin\ServicesController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AuthController;
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

Route::middleware(['profile.incomplete'])->group(function () {
    Route::get('/', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::get('/user-accounts/{id?}', [UserController::class, 'users'])->name('users');
    Route::match(['GET', 'POST'], '/post_member', [UserController::class, 'create'])->name('post_member');
    Route::get('/opportunities/{id?}', [OpportunitiesController::class, 'view'])->name('admin_opportunities');
    Route::match(['GET', 'POST'], '/post_opportunity', [OpportunitiesController::class, 'create'])->name('post_opportunity');
    Route::get('/news_and_events/{id?}', [NewsEventsController::class, 'view'])->name('admin_news');
    Route::match(['GET', 'POST'], '/post_news_and_event', [NewsEventsController::class, 'create'])->name('post_news');
    Route::get('/services/{id?}', [ServicesController::class, 'view'])->name('admin_services');
    Route::match(['GET', 'POST'], '/post_service', [ServicesController::class, 'create'])->name('post_service');
    Route::get('/innovations/{id?}', [InnovationsController::class, 'view'])->name('admin_innovations');
    Route::match(['GET', 'POST'], '/post_innovation', [InnovationsController::class, 'create'])->name('post_innnovation');
    Route::get('/info_bank/{id?}', [InfoBankController::class, 'view'])->name('admin_info_bank');
    Route::match(['GET', 'POST'], '/post_info_bank', [InfoBankController::class, 'create'])->name('post_info_bank');
});

Route::get('/auth/logout', [AuthController::class, 'logout'])->name('logout');
Route::match(['GET', 'POST'], '/profile', [AuthController::class, 'profile'])->name('profile');