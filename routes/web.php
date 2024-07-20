<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('layouts.master');
// });


//Route::get('/', [CategoryController::class,'index']);
Route::get('/',[HomeController::class, 'index'])->name('layouts.index');
Route::get('/postShow/{id}', [HomeController::class, 'postShow'])->name('layouts.postShow');
Route::get('/postcate/{category}', [HomeController::class, 'postcate'])->name('layouts.postcate');
Route::get('/search', [HomeController::class, 'search'])->name('layouts.search');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


