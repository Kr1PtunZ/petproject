<?php

use App\Http\Controllers\viewsController;
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

Route::get('/', [viewsController::class, 'main'])->name('main');

Route::get('/rooms', [viewsController::class, 'rooms'])->name('rooms');

Route::get('/about', [viewsController::class, 'about'])->name('about');

Route::get('/details', [viewsController::class, 'details'])->name('details');



