<?php

use App\Http\Controllers\IngatlanokController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/ingatlanok', [IngatlanokController::class, 'index']);
Route::post('/ingatlanok', [IngatlanokController::class, 'create']);
Route::delete('/ingatlanok', [IngatlanokController::class, 'destroy']);
