<?php

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
Route::get('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::post('/proses_login', [App\Http\Controllers\AuthController::class, 'proses_login'])->name('proses_login');
Route::get('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
Auth::routes(['verify' => true]);

Route::group(['middleware' => ['auth','CheckRole:0']], function(){
    //View Dashboard
    Route::get('/dashboard', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('dashboard');
    Route::get('/DataMakam', [App\Http\Controllers\Admin\AdminController::class, 'datamakam'])->name('dashboard.datamakam');
    Route::get('/DataUser&Admin', [App\Http\Controllers\Admin\AdminController::class, 'datauser'])->name('dashboard.datauser');
    //Insert data
    Route::post('/Konfirmasi/tambah', [App\Http\Controllers\Admin\AdminController::class, 'konfirmasi_tambah'])->name('dashboard.konfirmasi.tambah');
    //Delete data
    Route::get('/Konfirmasi/delete/{id}', [App\Http\Controllers\Admin\AdminController::class, 'konfirmasi_delete'])->name('dashboard.konfirmasi.delete');
    Route::get('/DataUser&Admin/delete/{id}', [App\Http\Controllers\Admin\AdminController::class, 'datauser_delete'])->name('dashboard.datauser.delete');
    //Update data
    Route::post('/Konfirmasi/update/{id}', [App\Http\Controllers\Admin\AdminController::class, 'konfirmasi_update'])->name('dashboard.konfirmasi.update');
    Route::post('/DataUser&Admin/update/{id}', [App\Http\Controllers\Admin\AdminController::class, 'datauser_update'])->name('dashboard.datauser.update');


//View User
    Route::get('/user', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('user');
});

//View User
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/search', [App\Http\Controllers\HomeController::class, 'index_cari'])->name('cari');
Route::post('Konfirmasi/Tambah', [App\Http\Controllers\HomeController::class, 'konfirmasi_tambah'])->name('dashboard.konfirmasi.tambah');

