<?php

use App\Http\Controllers\ComicController;
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


Route::get('/', function () { return view('layouts.app'); });


Route::get('/comics', [ComicController::class, 'index'])->name('guest.comics.index');
Route::post('/store', [ComicController::class, 'store'])->name('guest.comics.store');
Route::get('/comics/create', [ComicController::class, 'create'])->name('guest.comics.create');
Route::get('/comics/{id}', [ComicController::class, 'show'])->name('guest.comics.show');
Route::get('/comics/{comic}/edit', [ComicController::class, 'edit'])->name('guest.comics.edit');
Route::put('/comics/{comic}', [ComicController::class, 'update'])->name('guest.comics.update');
