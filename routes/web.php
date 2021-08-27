<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminCoachController;
use App\Http\Controllers\AdminNilaiController;
use App\Http\Controllers\AdminRegistrationController;
use App\Http\Controllers\AdminScheduleController;
use App\Http\Controllers\AdminSocialController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\BeratbadanController;
use App\Http\Controllers\ClientNilaiController;
use App\Http\Controllers\ClientRegistrationController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CoachController;
use App\Http\Controllers\CoachNilaiController;
use App\Http\Controllers\CoachPasswordController;
use App\Http\Controllers\CoachProfileController;
use App\Http\Controllers\CoachSiswaController;
use App\Http\Controllers\DatasocialController;
use App\Http\Controllers\EditdasiController;
use App\Http\Controllers\PassclientController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\RekeningController;
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

// home
Route::get('/', [HomeController::class, 'index']);
Route::post('/', [HomeController::class, 'storeSharing']);
Route::get('/about', [AboutController::class, 'index']);
Route::post('/about', [AboutController::class, 'storeSharing']);
Route::get('/history', [HistoryController::class, 'index']);
Route::post('/history', [HistoryController::class, 'storeSharing']);
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/create-acc', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/create-acc', [RegisterController::class, 'storeAccount']);

// dashboard admin
Route::resource('/data-pendaftaran', AdminRegistrationController::class)->middleware('auth');
Route::get('/edit-data-pendaftaran/{id}', [AdminRegistrationController::class, 'edit'])->middleware('auth');
Route::get('/hapus-data-pendaftaran/{id}', [AdminRegistrationController::class, 'destroy'])->middleware('auth');
Route::post('/update-data-pendaftaran/{id}', [AdminRegistrationController::class, 'update'])->middleware('auth');
Route::resource('/data-user', AdminUserController::class)->middleware('auth');
Route::get('/edit-data-user/{id}', [AdminUserController::class, 'edit'])->middleware('auth');
Route::post('/edit-data-user/{id}', [AdminUserController::class, 'update'])->middleware('auth');
Route::get('/hapus-data-user/{id}', [AdminUserController::class, 'destroy'])->middleware('auth');
Route::resource('/data-coach', AdminCoachController::class)->middleware('auth');
Route::get('/edit-data-coach/{id}', [AdminCoachController::class, 'edit'])->middleware('auth');
Route::get('/hapus-data-coach/{id}', [AdminCoachController::class, 'destroy'])->middleware('auth');
Route::post('/edit-data-coach/{id}', [AdminCoachController::class, 'update'])->middleware('auth');
Route::resource('/data-nilai-siswa', AdminNilaiController::class)->middleware('auth');
Route::get('/edit-data-nilai/{id}', [AdminNilaiController::class, 'edit'])->middleware('auth');
Route::get('/hapus-data-nilai/{id}', [AdminNilaiController::class, 'destroy'])->middleware('auth');
Route::post('/edit-data-nilai/{id}', [AdminNilaiController::class, 'update'])->middleware('auth');
Route::resource('/data-social-sharing', AdminSocialController::class)->middleware('auth');
Route::get('/hapus-data-social/{id}', [AdminSocialController::class, 'destroy'])->middleware('auth');
Route::resource('/data-jadwal-latihan', AdminScheduleController::class)->middleware('auth');
Route::get('/edit-data-jadwal/{id}', [AdminScheduleController::class, 'edit'])->middleware('auth');
Route::post('/edit-data-jadwal/{id}', [AdminScheduleController::class, 'update'])->middleware('auth');
Route::get('/hapus-data-jadwal/{id}', [AdminScheduleController::class, 'destroy'])->middleware('auth');
Route::get('/tambah-data-jadwal', [AdminScheduleController::class, 'create'])->middleware('auth');
Route::post('/tambah-data-jadwal', [AdminScheduleController::class, 'store'])->middleware('auth');

// dashboard client
Route::resource('/pendaftaran-anggota', ClientRegistrationController::class)->middleware('auth');
Route::post('/pendaftaran-anggota', [ClientRegistrationController::class, 'store'])->middleware('auth');
Route::get('/info-rekening', [RekeningController::class, 'index'])->middleware('auth');
Route::get('/berat-badan-ideal', [BeratbadanController::class, 'index'])->middleware('auth');
Route::resource('/nilai-siswa', ClientNilaiController::class)->middleware('auth');
Route::get('/detail-data-siswa', [ClientRegistrationController::class, 'show'])->middleware('auth');
Route::get('/edit-data-siswa', [EditdasiController::class, 'index'])->middleware('auth');
Route::get('/password-client', [PassclientController::class, 'index'])->middleware('auth');
Route::post('/password-client/{id}', [PassclientController::class, 'change'])->middleware('auth');


// dashboard coach
Route::get('/jadwal-latihan', [CoachController::class, 'index'])->middleware('auth');
Route::resource('/nilai-ujian-siswa', CoachNilaiController::class)->middleware('auth');
Route::get('/tambah-nilai-ujian', [CoachNilaiController::class, 'create'])->middleware('auth');
Route::post('/tambah-nilai-ujian', [CoachNilaiController::class, 'store'])->middleware('auth');
Route::get('/edit-nilai-ujian/{id}', [CoachNilaiController::class, 'edit'])->middleware('auth');
Route::get('/hapus-nilai-ujian/{id}', [CoachNilaiController::class, 'destroy'])->middleware('auth');
Route::post('/edit-nilai-ujian/{id}', [CoachNilaiController::class, 'update'])->middleware('auth');
Route::resource('/profile-siswa', CoachSiswaController::class)->middleware('auth')->middleware('auth');
Route::resource('/profile-coach', CoachProfileController::class)->middleware('auth')->middleware('auth');
Route::post('/profile-coach', [CoachProfileController::class, 'store'])->middleware('auth');
Route::resource('/password-coach', CoachPasswordController::class)->middleware('auth')->middleware('auth');
