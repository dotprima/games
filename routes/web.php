<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
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



 
Route::get('/', [Home::class, 'index']);
Route::get('/genres/{id}', [Home::class, 'genre']);
Route::get('/search/{id}', [Home::class, 'search']);
Route::get('/categories/{id}', [Home::class, 'categories']);
Route::get('/developers/{id}', [Home::class, 'developers']);
Route::get('/publishers/{id}', [Home::class, 'publishers']);
Route::get('/populer', [Home::class, 'populer']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
