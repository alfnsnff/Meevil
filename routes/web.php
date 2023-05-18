<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PopsController;
use App\Http\Controllers\ExploreController;

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
    return view('ace');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [Popscontroller::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard/fav{id}', [Popscontroller::class, 'addFavorites'])->middleware(['auth', 'verified']);
Route::get('/dashboard/des{id}', [Popscontroller::class, 'delFavorites'])->middleware(['auth', 'verified']);

Route::post('/dashboard', [PopsController::class, 'store'])->middleware(['auth', 'verified']);
Route::get('/profile/destroy{id}', [PopsController::class, 'destroy'])->middleware(['auth', 'verified']);

Route::resource("/explore", ExploreController::class)->middleware(['auth', 'verified']);

// Route::get('/explore', function () {
//     return view('explore');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/favorite', function () {
    return view('favorite');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/profile', function () {
    return view('userProfile');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/settings', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/settings', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/settings', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
