<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;

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

Route::get('/', [ContactsController::class,'home'])->name('home');
Route::post('/post',[ContactsController::class,'post'])->name('post');
Route::get('/confirm', [ContactsController::class, 'confirm'])->name("confirm");
Route::post('/confirm/store', [ContactsController::class, 'store'])->name("store");

Route::get('/thanks', [ContactsController::class, 'complete'])->name("complete");