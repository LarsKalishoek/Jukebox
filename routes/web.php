<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\SongController;
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
});

require __DIR__.'/auth.php';

Route::get('/getallusernames',[ProfileController::class, 'getAllUsers']);

Route::get('/genre/all',[GenreController::class, 'index'])->name('genre.index');
Route::get('/genre/create',[GenreController::class, 'create'])->name('genre.create');
Route::post('/genre/store',[GenreController::class, 'store'])->name('genre.store');
Route::get('/genre/destroy/{genre}',[GenreController::class, 'destroy'])->name('genre.destroy');

Route::get('/playlist/all',[PlaylistController::class, 'index'])->name('playlist.index');
Route::get('/playlist/create',[PlaylistController::class, 'create'])->name('playlist.create');
Route::post('/playlist/store',[PlaylistController::class, 'store'])->name('playlist.store');
Route::get('/playlist/destroy/{playlist}',[PlaylistController::class, 'destroy'])->name('playlist.destroy');

Route::get('/song/all',[SongController::class, 'index'])->name('song.index');
Route::get('/song/create',[SongController::class, 'create'])->name('song.create');
Route::post('/song/store',[SongController::class, 'store'])->name('song.store');
Route::get('/song/destroy/{song}',[SongController::class, 'destroy'])->name('song.destroy');

Route::get('/Add/all',[AddController::class, 'index'])->name('Add.index');
Route::get('/Add/create',[AddController::class, 'create'])->name('Add.create');
Route::post('/Add/store',[AddController::class, 'store'])->name('Add.store');
Route::get('/Add/destroy/{Add}',[AddController::class, 'destroy'])->name('Add.destroy');
