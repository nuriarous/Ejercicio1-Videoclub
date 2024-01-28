<?php

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

use App\Http\Controllers\catalogController;
use App\Http\Controllers\homeController;

Route::get('/', [catalogController::class, 'getIndex']);
Route::get('/catalog', [catalogController::class, 'getIndex']);
Route::get('/catalog/show/{id}', [catalogController::class, 'getShow']);
Route::get('/catalog/create', [catalogController::class, 'getCreate']);
Route::get('/catalog/edit', [catalogController::class, 'getEdit']);
