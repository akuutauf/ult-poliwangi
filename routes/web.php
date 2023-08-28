<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BerkasController;
use App\Http\Controllers\DaftarPermohonanController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\ProgressPengajuanController;
use App\Http\Controllers\FormMahasiswaController;
use App\Http\Controllers\FormDosenController;
use App\Http\Controllers\FormUmumController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PengajuanSelesai;
use App\Http\Controllers\PertanyaanController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\SurveiController;
use App\Http\Controllers\SurveiKepuasanPenggunaController;
use App\Http\Controllers\TrackingPengajuanController;
use App\Http\Controllers\TrackingSearch;
use App\Http\Controllers\UserController;
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

// route not found and not have access
Route::fallback(function () {
    return view('pages.error.not-found-404');
});

Route::get('/error/403', [ErrorController::class, 'accessDenied'])->name('error.403');

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
    Route::get('/admin/dashboard', [PageController::class, 'admin_page'])->name('admin.dashboard.page');

    //pengajuan
    Route::get('/admin/manajemen-pengajuan', [PengajuanController::class, 'index'])->name('admin.pengajuan.index');
    Route::get('/admin/manajemen-pengajuan/{id_pengajuan}/delete', [PengajuanController::class, 'destroy'])->name('admin.pengajuan.destroy');
    Route::get('/admin/manajemen-pengajuan/progress-pengajuan/{id_progress_pengajuan}', [ProgressPengajuanController::class, 'show'])->name('admin.progress.pengajuan.index');
    Route::post('/admin/manajemen-pengajuan/progress-pengajuan/{id_progress_pengajuan}/create', [ProgressPengajuanController::class, 'store'])->name('admin.progress.pengajuan.create');
    Route::get('/admin/manajemen-pengajuan/progress-pengajuan/{id_progress_pengajuan}/delete', [ProgressPengajuanController::class, 'destroy'])->name('admin.progress.pengajuan.delete');

    //daftar pengajuan selesai
    Route::get('/admin/manajemen-pengajuan/daftar-pengajuan-selesai', [PengajuanSelesai::class, 'index'])->name('admin.pengajuan.selesai.index');
    // Route::get('/admin/daftar-ulasan', [SurveiKepuasanPenggunaController::class, 'index'])->name('admin.survei.index');

    // divisi unit layanan terpadu
    Route::middleware([FilterDivisi::class . ':Unit Layanan Terpadu'])->group(function () {
        //divisi
        Route::get('/admin/manajemen-divisi', [DivisiController::class, 'index'])->name('admin.divisi.index');
        Route::post('/admin/manajemen-divisi/create', [DivisiController::class, 'store'])->name('admin.divisi.create');
        Route::get('/admin/manajemen-divisi/delete/{id}', [DivisiController::class, 'destroy'])->name('admin.divisi.destroy');
        Route::put('/admin/manajemen-divisi/{id}/update', [DivisiController::class, 'update'])->name('admin.divisi.update');

        //user
        Route::get('/admin/manajemen-user', [UserController::class, 'index'])->name('admin.user.index');
        Route::post('/admin/manajemen-user/create', [UserController::class, 'store'])->name('admin.user.create');
        Route::get('/admin/manajemen-user/delete/{id}', [UserController::class, 'destroy'])->name('admin.user.destroy');
        Route::put('/admin/manajemen-user/{id}/update', [UserController::class, 'update'])->name('admin.user.update');

        //prodi
        Route::get('/admin/manajemen-prodi', [ProdiController::class, 'index'])->name('admin.prodi.index');
        Route::post('/admin/manajemen-prodi/create', [ProdiController::class, 'store'])->name('admin.prodi.create');
        Route::get('/admin/manajemen-prodi/delete/{id}', [ProdiController::class, 'destroy'])->name('admin.prodi.destroy');
        Route::put('/admin/manajemen-prodi/{id}/update', [ProdiController::class, 'update'])->name('admin.prodi.update');

        //admin
        Route::get('/admin/manajemen-admin', [AdminController::class, 'index'])->name('admin.admin.index');
        Route::post('/admin/manajemen-admin/create', [AdminController::class, 'store'])->name('admin.admin.create');
        Route::put('/admin/manajemen-admin/{id}/update', [AdminController::class, 'update'])->name('admin.admin.update');
        Route::get('/admin/manajemen-admin/delete/{id}', [AdminController::class, 'destroy'])->name('admin.admin.destroy');

        //layanan
        Route::get('/admin/manajemen-layanan', [LayananController::class, 'index'])->name('admin.layanan.index');
        Route::post('/admin/manajemen-layanan/create', [LayananController::class, 'store'])->name('admin.layanan.create');
        Route::get('/admin/manajemen-layanan/delete/{id}', [LayananController::class, 'destroy'])->name('admin.layanan.destroy');
        Route::put('/admin/manajemen-layanan/{id}/update', [LayananController::class, 'update'])->name('admin.layanan.update');

        //berkas
        Route::get('/admin/manajemen-berkas', [BerkasController::class, 'index'])->name('admin.berkas.index');
        Route::post('/admin/manajemen-berkas/create', [BerkasController::class, 'store'])->name('admin.berkas.create');
        Route::get('/admin/manajemen-berkas/delete/{id}', [BerkasController::class, 'destroy'])->name('admin.berkas.destroy');
        Route::put('/admin/manajemen-berkas/{id}/update', [BerkasController::class, 'update'])->name('admin.berkas.update');

        //daftar permohonan
        Route::get('/admin/manajemen-permohonan/daftar-permohonan', [DaftarPermohonanController::class, 'index'])->name('admin.permohonan.index');
        Route::get('/admin/manajemen-permohonan/detail-permohonan/{id_pengajuan}', [DaftarPermohonanController::class, 'edit'])->name('admin.permohonan.edit');
        Route::put('/admin/manajemen-permohonan/detail-permohonan/{id_pengajuan}', [DaftarPermohonanController::class, 'update'])->name('admin.permohonan.update');
        Route::put('/admin/manajemen-permohonan/accept/{id_pengajuan}', [DaftarPermohonanController::class, 'accept_submission'])->name('admin.permohonan.accept');
        Route::put('/admin/manajemen-permohonan/decline/{id_pengajuan}', [DaftarPermohonanController::class, 'decline_submission'])->name('admin.permohonan.decline');

        //pertanyaan
        Route::get('/admin/manajemen-pertanyaan', [PertanyaanController::class, 'index'])->name('admin.pertanyaan.index');
        Route::post('/admin/manajemen-pertanyaan/create', [PertanyaanController::class, 'store'])->name('admin.pertanyaan.create');
        Route::get('/admin/manajemen-pertanyaan/delete/{id}', [PertanyaanController::class, 'destroy'])->name('admin.pertanyaan.destroy');
        Route::put('/admin/manajemen-pertanyaan/{id}/update', [PertanyaanController::class, 'update'])->name('admin.pertanyaan.update');

        //survei
        Route::get('/admin/manajemen-survei', [SurveiController::class, 'index'])->name('admin.survei.index');
        Route::post('/admin/manajemen-survei/create', [SurveiController::class, 'store'])->name('admin.survei.create');
        Route::get('/admin/manajemen-survei/delete/{id}', [SurveiController::class, 'destroy'])->name('admin.survei.destroy');
        Route::put('/admin/manajemen-survei/{id}/update', [SurveiController::class, 'update'])->name('admin.survei.update');
    });
});
