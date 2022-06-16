<?php

use App\Http\Controllers\ComentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\Comentt;
use App\Models\User;
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


Route::get('/exclusive', function () {
    return view('premium.inscri');
})->middleware(['auth'])->name('/exclusive');

Route::get('/con/forum', function () {
    return view('forum.index');
})->middleware(['auth'])->name('/forum');




Route::get('user/edit', [UserController::class, 'edit'])->middleware(['auth'])->name('/user/edit');
Route::put('/user/update/{id}', [UserController::class, 'update'])->middleware(['auth']);


Route::get('/posts', [PostController::class, 'Home'])->middleware(['auth'])->name('/posts');

/*rota para criar tweet */

Route::delete('/post/{id}', [PostController::class, 'destroy'])->middleware(['auth'])->name('');

Route::get('/post/edit/{id}', [PostController::class, 'edit'])->middleware(['auth'])->name('');

Route::get('/twet', [PostController::class, 'index'])->name('home');

/*rota para criar tweet */
Route::post('/twet', [PostController::class, 'store']);


// exibir comentario
Route::get('/coment/exibir/{id}', [ComentController::class, 'show']);

// rota para criar comentário
Route::post('/coment', [ComentController::class, 'store']);



/*rota para pesquisar usuario---- experimental   */
Route::any('/search', [UserController::class, 'index']);
Route::any('/posts/search-user', [UserController::class, 'exibirUser']);

Route::get('visualizar-post/{id}',[PostController::class, 'show']);








Route::get('/dashboard', [PostController::class, 'index'])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
