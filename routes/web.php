<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\WelcomeController;
use App\Models\Article;
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

Route::get('/', [WelcomeController::class, 'show']);
Route::get('/articles',[ArticleController::class, 'index']);
Route::post('/articles',[ArticleController::class, 'store']);
Route::get('/articles/create',[ArticleController::class, 'create']);
Route::get('/article/{article}/edit-article',[ArticleController::class, 'edit']);
Route::delete('/article/{article}', [ArticleController::class, 'delete']);
Route::put('/article/{article}',[ArticleController::class, 'update']);
Route::get('/article/{article}',[ArticleController::class, 'show'])->name('articles.show');

Route::get('/posts/{post}', [PostController::class, 'show']);

Route::get('/about',[AboutController::class,'show']);
Route::get('/dashboard',[DashboardController::class, 'show']);

Route::get('/faq',[FaqController::class, 'show']);
Route::post('/faq',[FaqController::class, 'store']);
Route::put('/faq/{faq}',[FaqController::class, 'update']);
Route::delete('/faq/{faq}', [FaqController::class, 'delete']);
Route::get('/faq/{faq}/edit-faq',[FaqController::class, 'edit']);
