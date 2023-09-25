<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\frontend;
use App\Http\Controllers\FrontendController;
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


// Route::get('/user/{id}', [frontend::class, 'index']);

//Routes for frontend panel

Route::get('/e-shop', [FrontendController::class, 'index']);

//Routes for backend panel

Route::get('/', [BackendController::class, 'admin']);
Route::get('/category', [BackendController::class, 'category']);
