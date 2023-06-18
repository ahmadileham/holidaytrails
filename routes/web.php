<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;
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
    return view('auth.login');
});


// Route::get('/babi', function () {
//     return view('h.newpost');
// });



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/homepage', [PostController::class, 'home'])->name('home');
    Route::get('/analysis', [ProfileController::class, 'analysis'])->name('analysis');
    Route::get('/editpost', [ProfileController::class, 'editpost'])->name('editpost');
    Route::get('/viewprofile', [ProfileController::class, 'othersprof'])->name('othersprof');
    Route::get('/myprofile', [ProfileController::class, 'ownprof'])->name('ownprof');
    Route::get('/newpost', [PostController::class, 'newpost'])->name('newpost');
    Route::get('/post/details/{id}', [PostController::class, 'viewpost'])->name('viewpost');
    Route::get('/logout', [ProfileController::class, 'UserLogout'])->name('user.logout');
});

Route::post('store', [PostController::class, 'store']);

require __DIR__.'/auth.php';

//Comments
Route::post('comment/store', [CommentController::class, 'store']);


