<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExcelImportController;


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
Route::get('/upload', [ExcelImportController::class, 'showForm'])->name('upload.form');
Route::post('/import', [ExcelImportController::class, 'import'])->name('upload.import');
Route::get('/show-data', [ExcelImportController::class, 'showData'])->name('data.show');
