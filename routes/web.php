<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/', fn () => to_route('articles.index'));

    Route::group(['prefix' => 'articles', 'as' => 'articles.'], function () {
        Route::get('', [ArticleController::class, 'index'])->name('index');
        Route::get('create', [ArticleController::class, 'create'])->name('create');
        Route::post('', [ArticleController::class, 'store'])->name('store');
        Route::get('{article:slug}', [ArticleController::class, 'show'])->name('show');
        Route::get('{article}/edit', [ArticleController::class, 'edit'])->name('edit');
        Route::put('{article}', [ArticleController::class, 'update'])->name('update');
        Route::delete('{article}', [ArticleController::class, 'destroy'])->name('destroy');
    });
});

require __DIR__.'/auth.php';
