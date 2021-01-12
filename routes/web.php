<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengeluaranController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create', [PengeluaranController::class, 'create']);
Route::get('/', [PengeluaranController::class, 'index']);
Route::post('/', [PengeluaranController::class, 'store']);
Route::delete('/{pengeluaran}', [PengeluaranController::class, 'destroy']);
