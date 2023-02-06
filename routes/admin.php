<?php

use App\Http\Controllers\Admin\OpportunitiesController;
use App\Http\Controllers\Admin\NewsEventsController;
use App\Http\Controllers\admin\ServicesController;
use App\Http\Controllers\Admin\HomeController;
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

Route::get('/', [HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/auth/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/user-accounts/{id?}', [HomeController::class, 'users'])->name('users');
Route::get('/opportunities/{id?}', [OpportunitiesController::class, 'view'])->name('admin_opportunities');
Route::match(['GET', 'POST'], '/post_opportunity', [OpportunitiesController::class, 'create'])->name('post_opportunity');
Route::get('/news_and_events/{id?}', [NewsEventsController::class, 'view'])->name('admin_news');
Route::match(['GET', 'POST'], '/post_news_and_event', [NewsEventsController::class, 'create'])->name('post_news');
Route::get('/services/{id?}', [ServicesController::class, 'view'])->name('admin_services');
Route::match(['GET', 'POST'], '/post_service', [ServicesController::class, 'create'])->name('post_service');