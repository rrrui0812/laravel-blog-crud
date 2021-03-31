<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;

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

//因上方有use namespace，故ArticlesController才能這樣簡短
//App\Http\Controllers\ArticlesController\ArticlesController::class
Route::resource('articles', ArticlesController::class);

Route::get('/', [ArticlesController::class, 'index'])->name('root');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
