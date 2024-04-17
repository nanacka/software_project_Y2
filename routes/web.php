<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //Route::get('/home', [PostController::class, 'index'])->name('user.posts.index');
    //Route::get('/home', [PostController::class, 'index'])->name('user.posts.index');
    Route::get('/home',       [PostController::class, 'index'])->name('posts.index');

    Route::get('/posts/{id}',       [PostController::class, 'show'])->name('posts.show');
    Route::get('/account',       [PostController::class, 'showByAuthUser'])->name('userProfile.show');

    //Route::get('/posts/{id}/edit',  [PostController::class, 'edit'])->name('posts.edit');
    //Route::put('/posts/{id}',       [PostController::class, 'update'])->name('posts.update');
    //Route::delete('/posts/{id}',    [PostController::class, 'destroy'])->name('posts.destroy');

    Route::get('/user/{id}',       [PostController::class, 'showByUser'])->name('account.show');


    //Route::get('/user/home', [PostController::class, 'index']);
    //Route::resource('/posts', PostController::class)
    //->middleware(['auth'])
    //->only('index');
});


//Route::get('/home', function () {
//    return view('home');
//})->middleware(['auth', 'verified'])->name('dashboard');


require __DIR__.'/auth.php';
