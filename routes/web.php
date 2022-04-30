<?php

use App\Http\Controllers\Saved;
use App\Http\Controllers\Search;
use App\Http\Controllers\Upload;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/search', [Search::class, 'view'])
    ->middleware('auth')
    ->name('search');

Route::get('/results', [Search::class, 'doSearch'])
    ->middleware('auth')
    ->name('results');

Route::get('/create', [Upload::class, 'view'])
    ->middleware('auth')
    ->name('create');

Route::get('/saved', [Saved::class, 'view'])
    ->middleware('auth')
    ->name('saved');

Route::get('/details/{id}', [Upload::class, 'details'])
    ->middleware('auth')
    ->name('details');

Route::get('/details/{id}/download', [Upload::class, 'download'])
    ->middleware('auth')
    ->name('download');

Route::post('/create/save', [Upload::class, 'SaveIt'])
    ->middleware('auth')
    ->name('create.save');

require __DIR__.'/auth.php';
