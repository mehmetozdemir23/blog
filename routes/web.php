<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SendMessageController;
use App\Http\Controllers\SessionController;

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

Route::get('/', fn () => view('home'));

Route::middleware('guest')->group(
    function () {
        Route::get('/login', [SessionController::class, 'create']);
        Route::post('/login', [SessionController::class, 'store']);
        Route::get('/register', [RegisterController::class, 'create']);
        Route::post('/register', [RegisterController::class, 'store']);
    }
);

Route::get( '/blog', [PostController::class,'index']);
Route::get( '/technos', fn () => view('technos') );
Route::get( '/contact', fn () => view('contact') );
Route::get( '/resume', fn () => view('resume') );
Route::post('/contact', SendMessageController::class);

Route::get('/posts/{post:post_slug}', [PostController::class, 'show']);

