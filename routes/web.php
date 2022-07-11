<?php

use App\Http\Controllers\MahasiswaController;
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

Route::get('/', function () {
    return view('welcome');
});

// Create
Route::get('/home/add', [MahasiswaController::class, 'insertMahasiswa']);
Route::post('/home/store', [MahasiswaController::class, 'storeMahasiswa']);

// Read
Route::get('/home', [MahasiswaController::class, 'readMahasiswa']);

// Update
Route::get('/home/{id}/edit', [MahasiswaController::class, 'editMahasiswa']);
Route::put('/home/{id}/', [MahasiswaController::class, 'updateMahasiswa']);

// Delete
Route::delete('/home/{id}/', [MahasiswaController::class, 'deleteMahasiswa']);
