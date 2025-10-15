<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

Route::get('/', [PublicController::class, 'welcome'])->name('home');

Route::get('welcome', [PublicController::class, 'welcome'])->name('welcome');


Route::get('articles', [ArticleController::class, 'index'])->name('Articoli');

Route::get('/articles/detail/{name}', [ArticleController::class, 'ArticlesDetail'])->name('ArticlesDetail');

// Rotta GET per mostrare il form
Route::get('contactUs', function () {
    return view('components.contactUs');
})->name('contactUs.form');



Route::post('contactUs', [PublicController::class, 'contactUs'])->name('contactUs');


Route::get('/article/create', [ArticleController::class, 'create'])->name('ArticleCreate')->middleware('auth');

Route::post('/article/submit', [ArticleController::class, 'store'])->name('ArticleSubmit')->middleware('auth');