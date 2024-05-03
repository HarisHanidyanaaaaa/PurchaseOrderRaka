<?php

use App\Http\Controllers\UserController;
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
    return view('welcome');
});
Route::get('/User-Index', [UserController::class, 'index'])->name('User-Index');
Route::post('/User-Store', [UserController::class, 'store'])->name('User-Store');
Route::put('/User-Update/{id}', [UserController::class, 'update'])->name('User-Update');
Route::delete('/User-Delete/{id}', [UserController::class, 'destroy'])->name('User-Delete');
