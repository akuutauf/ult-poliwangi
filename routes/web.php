<?php

use App\Http\Controllers\AuthController;
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
// Route::get('/login', [AuthController::class, 'login_page'])->name('login.page');

Route::get('/logout', [AuthController::class, 'doLogout'])->name('do.logout');

Route::middleware(['guest'])->group(function () {
    //
    Route::get('/login', [AuthController::class, 'login_page'])->name('login.page');
    Route::post('/login', [AuthController::class, 'doLogin'])->name('do.login');
});

Route::middleware(['auth'])->group(function(){

    Route::get('/home', [PageController::class, 'admin_page'])->name('admin.home.page');
});

// Route::get('/', function () {
//     return view('welcome');
// });
