<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;
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

Route::get('/', [KaryawanController::class,'index']);

Route::get('/create', [KaryawanController::class, 'create']);

Route::post('/create-karyawan', [KaryawanController::class, 'createKaryawan']);


Route::get(
    '/edit',
    [KaryawanController::class, 'editKaryawan']

);

Route::get(
    '/list-karyawan', [KaryawanController::class, 'listKaryawan']
);

Route::get(
    '/delete/{id}', [KaryawanController::class, 'delete']
);

Route::get(
    '/update/{id}',
    [KaryawanController::class, 'updateKaryawan']
);

Route::patch(
    '/update/{id}',
    [KaryawanController::class, 'update']
);






