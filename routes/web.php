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

require __DIR__ . '/auth.php';

Route::middleware(['auth'])->group(function () {
    Route::get('/', [catalogController::class, 'getIndex']);
    Route::get('/catalog', [catalogController::class, 'getIndex']);
    Route::get('/catalog/show/{id}', [catalogController::class, 'getShow'])->name('catalog.show');
    Route::get('/catalog/create', [catalogController::class, 'getCreate'])->name('catalog.create');
    Route::post('catalog', [catalogController::class, 'store'])->name('catalog.store');

    Route::get('/catalog/{id}/edit', [catalogController::class, 'edit'])->name('catalog.edit');
    Route::put('/catalog/edit', [catalogController::class, 'update'])->name('catalog.update');
});
