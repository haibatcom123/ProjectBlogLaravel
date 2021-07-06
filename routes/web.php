<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LanguageController;


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

// Route::get('/home', function () {
//     return view('welcome');
// });


Route::get('/',[PagesController::class, 'index']);
Route::resource('/blog',PostsController::class);
Route::get('/blog', [PostsController::class, 'index'])->name('posts');
Auth::routes();
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('/index');
});
Route::get('language/{language}',  [\App\Http\Controllers\LanguageController::class, 'index']) -> name('language');

