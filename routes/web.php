<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GformController;
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

Route::get('/', [GformController::class, 'index']);
Route::post('/store', [GformController::class, 'store'])->name('form.store');
Route::post('/fileupload', [GformController::class, 'uploadToServer'])->name('uploadToServer');