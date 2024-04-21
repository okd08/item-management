<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;

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
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::prefix('items')->group(function () {
    Route::get('/', [ItemController::class, 'index'])
        ->name('items.index');
    Route::get('/proto', [ItemController::class, 'index2'])
        ->name('items.index2');
    Route::get('/add', [ItemController::class, 'add']);
    Route::post('/add', [ItemController::class, 'add']);
    Route::get('/{item}/edit', [ItemController::class, 'edit'])
        ->name('items.edit');
    Route::patch('/{item}/update', [ItemController::class, 'update'])
        ->name('items.update');
    Route::delete('/{item}/destroy', [ItemController::class, 'destroy'])
        ->name('items.destroy');
});
