<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
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

Route::get('/', [ClientController::class, 'create'])->name('clients.create');
Route::post('/client/store', [ClientController::class, 'store'])->name('client.store');

Route::get('/client/total', [ClientController::class, 'total'])->name('client.total');
Route::post('/total/store', [ClientController::class, 'totalStore'])->name('total.store');
