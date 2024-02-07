<?php

use App\Http\Controllers\catalogController;
use App\Http\Controllers\homeController;
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

Route::get('/', [catalogController::class, 'getIndex']);



require __DIR__.'/auth.php';



Route::middleware(['auth'])->group(function () {
    Route::get('/catalog', [catalogController::class, 'getIndex']);
    Route::get('/catalog/show/{id}', [catalogController::class, 'getShow']);
    Route::get('/catalog/create', [catalogController::class, 'getCreate']);
    Route::post('/catalog/create', [catalogController::class, 'postCreate']); 

    Route::get('/catalog/edit', [catalogController::class, 'getEdit']);
    Route::put('/catalog/edit/{id}', [catalogController::class, 'putEdit']);
});