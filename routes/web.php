<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
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
    return view('siswa.index');
});


Route::get('/Kelas/index',[KelasController::class,'index'])->name('kelas.index');
Route::get('/Kelas/tambah',[KelasController::class,'tambah'])->name('kelas.tambah');
Route::post('/Kelas/store',[KelasController::class,'store'])->name('kelas.store');
Route::get('/Kelas/edit/{id}',[KelasController::class,'edit'])->name('kelas.edit');
Route::put('/Kelas/update/{id}',[KelasController::class,'update'])->name('kelas.update');
Route::delete('/Kelas/hapus/{id}',[KelasController::class,'hapus'])->name('kelas.hapus');


Route::get('/Siswa/index',[SiswaController::class,'index'])->name('siswa.index');
Route::get('/Siswa/tambah',[SiswaController::class,'tambah'])->name('siswa.tambah');
Route::get('/Siswa/edit',[SiswaController::class,'edit'])->name('siswa.edit');


