<?php

use App\Http\Controllers\ComentController;
use App\Http\Controllers\noticiesController;
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

 


// homepage onde exibe posts e noticias
Route::get('/posts', [PostController::class, 'Home'])->middleware(['auth'])->name('/posts');
Route::get('/posts/not', [noticiesController::class, 'show'])->middleware(['auth']);


/////////////////////////////////////////////////////////////////////////////////////////////////////

// destroi post
Route::any('/post/destroy/{id}', [PostController::class, 'destroy'])->middleware(['auth'])->name('');

// edita - não foi usado
Route::get('/post/edit/{id}', [PostController::class, 'edit'])->middleware(['auth'])->name('');
Route::get('/twet', [PostController::class, 'index'])->name('home');

// cria o post
Route::post('/twet', [PostController::class, 'store']);


// rota para vizualizar o post
Route::get('visualizar-post/{id}',[PostController::class, 'show']);

/////////////////////////////////////////////////////////////////////////////////////////////////////

// exibir comentario
Route::get('/coment/exibir/{id}', [ComentController::class, 'show']);

// rota para criar comentário
Route::post('/coment', [ComentController::class, 'store']); 



/////////////////////////////////////////////////////////////////////////////////////////////////////

/*rota para pesquisar usuario---- experimental   */
Route::any('/search', [UserController::class, 'index']);
Route::any('/posts/search-user/{social}', [UserController::class, 'exibirUser']);

/////////////////////////////////////////////////////////////////////////////////////////////////////

// rota para noticias

Route::get('/con/noticias',[noticiesController::class, 'index']
)->middleware(['auth'])->name('/not');


// cadastro de noticias
Route::post('/con/noticias/cad', [noticiesController::class, 'store']);

// exclui noticias
Route::any('/not/destroy/{id}', [noticiesController::class, 'destroy']);

/////////////////////////////////////////////////////////////////////////////////////////////////////

// rota para apagar usuario 
Route::any('/user/destroy/{id}', [UserController::class, 'destroy'])->name('user/destroy');

// edita o usuario 
Route::get('user/edit', [UserController::class, 'edit'])->middleware(['auth'])->name('/user/edit');
Route::put('/user/update/{id}', [UserController::class, 'update'])->middleware(['auth']);











Route::get('/dashboard', [PostController::class, 'index'])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
