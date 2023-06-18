<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SampahController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/sampahs', [SampahController::class, 'index']);
Route::post('/sampahs/tambah-data', [SampahController::class, 'store']);
Route::get('/sampahs/{id}', [SampahController::class, 'show']);
Route::patch('/sampahs/update/{id}', [SampahController::class, 'update']);
Route::delete('/sampahs/delete/{id}', [SampahController::class, 'destroy']);
Route::get('/sampahs/show/trash', [SampahController::class, 'trash']);
Route::get('/sampahs/trash/restore/{id}', [SampahController::class, 'restore']);
Route::get('/sampahs/trash/delete/permanent/{id}', [SampahController::class, 'permanentDelete']);