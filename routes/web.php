<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BerkasController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\ProgressPengajuanController;
use App\Http\Controllers\FormMahasiswaController;
use App\Http\Controllers\FormDosenController;
use App\Http\Controllers\FormUmumController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\SurveiKepuasanPenggunaController;
use App\Http\Controllers\TrackingPengajuanController;
use App\Http\Controllers\TrackingSearch;
use App\Http\Middleware\FilterDivisi;
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

Route::middleware(['guest'])->group(function () {
    // authenticate for login
    Route::get('/login', [AuthController::class, 'login_page'])->name('login.page');
    Route::post('/login', [AuthController::class, 'doLogin'])->name('do.login');

    // route formulir
    Route::get('/formulir-survei/kepuasan-pengguna/{kode_tiket}', [SurveiKepuasanPenggunaController::class, 'create'])->name('survei.kepuasan.pengguna.page');
    Route::post('/formulir-survei/kepuasan-pengguna/{kode_tiket}/create', [SurveiKepuasanPenggunaController::class, 'store'])->name('survei.kepuasan.pengguna.create');

    Route::get('/formulir-pengajuan/dosen', [FormDosenController::class, 'create'])->name('pengajuan.dosen.page');
    Route::post('/formulir-pengajuan/dosen/create', [FormDosenController::class, 'store'])->name('pengajuan.dosen.store');

    Route::get('/formulir-pengajuan/mahasiswa', [FormMahasiswaController::class, 'create'])->name('pengajuan.mahasiswa.page');
    Route::post('/formulir-pengajuan/mahasiswa/create', [FormMahasiswaController::class, 'store'])->name('pengajuan.mahasiswa.store');

    Route::get('/formulir-pengajuan/umum', [FormUmumController::class, 'create'])->name('pengajuan.umum.page');
    Route::post('/formulir-pengajuan/umum/create', [FormUmumController::class, 'store'])->name('pengajuan.umum.store');

    // route tracking
    Route::get('/tracking-progress-pengajuan', [TrackingSearch::class, 'search_tracking'])->name('tracking.pengajuan.search');
    Route::get('/tracking-progress-pengajuan/{kode_tiket}', [TrackingPengajuanController::class, 'show'])->name('tracking.pengajuan.page');
});

Route::middleware(['auth'])->group(function () {

    // route all divisi
    Route::get('/dashboard', [PageController::class, 'admin_page'])->name('admin.dashboard.page');

    // divisi unit layanan terpadu
    Route::middleware([FilterDivisi::class . ':Unit Layanan Terpadu'])->group(function () {
        //divisi
        Route::get('/ult/divisi', [DivisiController::class, 'index'])->name('admin.divisi.index');
        Route::post('/ult/divisi/create', [DivisiController::class, 'store'])->name('admin.divisi.create');
        Route::get('/ult/divisi/delete/{id}', [DivisiController::class, 'destroy'])->name('admin.divisi.destroy');
        Route::put('/ult/divisi/{id}/update', [DivisiController::class, 'update'])->name('admin.divisi.update');

        //prodi
        Route::get('/ult/prodi', [ProdiController::class, 'index'])->name('admin.prodi.index');
        Route::post('/ult/prodi/create', [ProdiController::class, 'store'])->name('admin.prodi.create');
        Route::get('/ult/prodi/delete/{id}', [ProdiController::class, 'destroy'])->name('admin.prodi.destroy');
        Route::post('/ult/prodi/{id}/update', [ProdiController::class, 'update'])->name('admin.prodi.update');

        //admin
        Route::get('/ult/admin', [AdminController::class, 'index'])->name('admin.admin.index');

        //layanan
        Route::get('/ult/layanan', [LayananController::class, 'index'])->name('admin.layanan.index');

        //berkas
        Route::get('/ult/berkas', [BerkasController::class, 'index'])->name('admin.berkas.index');

        //pengajuan
        Route::get('/ult/pengajuan', [PengajuanController::class, 'index'])->name('admin.pengajuan.index');
        Route::get('/ult/pengajuan/progress-pengajuan/{progress_pengajuan_id}', [ProgressPengajuanController::class, 'show'])->name('admin.progress.pengajuan.index');
    });
});
