<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\URL;

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

Route::get('/', function () {
    return view('welcome');
})->name('initi');
Route::get('/home/sobre', function () {
    return view('sobre');
})->name('sobre');

Route::get('/posts', [PostController::class, 'Home'])->middleware(['auth'])->name('/posts');


Route::get('/dashboard/edit', [UserController::class, 'edit'])->middleware(['auth'])->name('/dashboard/edit');
Route::post('/dashboard/update', [UserController::class, 'update'])->middleware(['auth'])->name('/user/update');

/*rota para criar tweet */
Route::get('/twet', [PostController::class, 'index'])->name('home');

/*rota para criar tweet */
Route::post('/twet', [PostController::class, 'store']);

/*rota para pesquisar usuario---- experimental   */
Route::any('/search', [UserController::class, 'index']);
Route::any('/posts/search-user', [UserController::class, 'exibirUser']);

Route::get('visualizar-post/{id}',[PostController::class, 'show']);








Route::get('/dashboard', [PostController::class, 'index'])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
