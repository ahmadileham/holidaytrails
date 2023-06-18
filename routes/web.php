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
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/homepage', [ProfileController::class, 'home'])->name('home');
    Route::get('/analysis', [ProfileController::class, 'analysis'])->name('analysis');
    Route::get('/editpost', [ProfileController::class, 'editpost'])->name('editpost');
    Route::get('/viewprofile', [ProfileController::class, 'othersprof'])->name('othersprof');
    Route::get('/myprofile', [ProfileController::class, 'ownprof'])->name('ownprof');
    Route::get('/newpost', [PostController::class, 'newpost'])->name('newpost');
    Route::get('/viewpost', [ProfileController::class, 'viewpost'])->name('viewpost');
    Route::get('/logout', [ProfileController::class, 'UserLogout'])->name('user.logout');
    Route::get('/settings', [ProfileController::class, 'settings'])->name('profile.settings');
    Route::post('/settings/store', [ProfileController::class, 'settingsStore'])->name('profle.store');
    Route::get('/change/password', [ProfileController::class, 'profilePass'])->name('profile.pass');
    Route::post('/update/password', [ProfileController::class, 'updatePassword'])->name('profle.update.pass');
    Route::delete('/settings', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::post('store', [PostController::class, 'store']);

require __DIR__.'/auth.php';



