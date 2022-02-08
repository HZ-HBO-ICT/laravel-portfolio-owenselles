<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;
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

Route::get('/posts/{post}', [PostController::class, 'show']);

Route::get('/', [WelcomeController::class, 'show']);
Route::get('/about', [AboutController::class, 'show']);
Route::get('/blog', [BlogController::class, 'show']);
Route::get('/faq', [FaqController::class, 'show']);
Route::get('/dashboard', [DashboardController::class, 'show']);
