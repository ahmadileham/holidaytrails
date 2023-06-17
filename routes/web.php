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
    Route::get('/homepage', [ProfileController::class, 'home'])->name('home');
    Route::get('/analysis', function(){return view('h.analysis');})->name('analysis');
    Route::get('/editpost', function(){return view('h.editpost');})->name('editpost');
    Route::get('/viewprofile', function(){return view('h.othersprof');})->name('othersprof');
    Route::get('/myprofile', function(){return view('h.ownprof');})->name('ownprof');
    Route::get('/newpost', [PostController::class, 'create'])->name('newpost');
    Route::get('/viewpost', function(){return view('h.viewpost');})->name('viewpost');
    Route::get('/logout', [ProfileController::class, 'UserLogout'])->name('user.logout');
});

Route::post('store', [PostController::class, 'store']);

require __DIR__.'/auth.php';



