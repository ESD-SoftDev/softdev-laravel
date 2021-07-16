<?php

use App\Http\Controllers\ArticelController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/articel', [ArticelController::class, 'index'])->name('articel.index');
Route::get('/articel/create', [ArticelController::class, 'create'])->name('articel.create');
Route::post('/articel/post', [ArticelController::class, 'store'])->name('articel.store');
