<?php

use App\Http\Controllers\WebController;
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

Route::get('/', [WebController::class, 'index']);
Route::get('/category/{category}', [WebController::class, 'category']);
Route::get('/detail/{book}', [WebController::class, 'detail']);
Route::get('/publisher', [WebController::class, 'publisher']);
Route::get('/publisher/detail/{publisher}', [WebController::class, 'detailPublisher']);
Route::get('/contact', [WebController::class, 'contact']);
