<?php

use App\Http\Controllers\MovieController;
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


Route::get('/', [MovieController::class, 'index'])->name('movies.index');
Route::get('/anime/crea', [MovieController::class, 'create'])->name('movies.create');

Route::post('/anime/salva',[MovieController::class, 'store'])->name('movies.store');

Route::get('/anime/{movie}/dettagli', [MovieController::class, 'show'])->name('movies.show');
//Route::get('/anime/{movie}/modifica', [MovieController::class, 'edit'])->name('movies.edit');

//Route::put('/anime/{movie}', [MovieController::class, 'update'])->name('movies.update');
//Route::delete('/anime/{movie}', [MovieController::class, 'destroy'])->name('movies.destroy');