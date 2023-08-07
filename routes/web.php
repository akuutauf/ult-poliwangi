<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\FormMahasiswaController;
use App\Http\Controllers\FormDosenController;
use App\Http\Controllers\FormUmumController;
use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class, 'home_page'])->name('home.page');
Route::get('/logout', [AuthController::class, 'doLogout'])->name('do.logout');

Route::get('/divisi', function () {
    return view('pages.admin.divisi.index');
});
Route::get('/admin', function () {
    return view('pages.admin.admin.index');
});
Route::get('/layanan', function () {
    return view('pages.admin.layanan.index');
});
Route::get('/berkas', function () {
    return view('pages.admin.berkas.index');
});

Route::get('/pengajuan', function () {
    return view('pages.admin.pengajuan.index');
});

Route::get('/progress-pengajuan', function () {
    return view('pages.admin.progress-pengajuan.index');
});

Route::middleware(['guest'])->group(function () {
    // authenticate for login
    Route::get('/login', [AuthController::class, 'login_page'])->name('login.page');
    Route::post('/login', [AuthController::class, 'doLogin'])->name('do.login');

    // route formulir
    Route::get('/formulir-pengajuan/mahasiswa', [FormMahasiswaController::class, 'create'])->name('pengajuan.mahasiswa.page');
    Route::get('/formulir-pengajuan/dosen', [FormDosenController::class, 'create'])->name('pengajuan.dosen.page');
    Route::get('/formulir-pengajuan/umum', [FormUmumController::class, 'create'])->name('pengajuan.umum.page');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [PageController::class, 'admin_page'])->name('admin.dashboard.page');
});
