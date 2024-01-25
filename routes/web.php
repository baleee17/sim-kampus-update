<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\AgamaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\SystemController;
use App\Http\Controllers\PeriodeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\ReferensiController;

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
})->middleware('auth');

Route::get('/mahasiswa', function () {
    return view('mahasiswa');
})->middleware('auth');

Route::get('/dosen', function () {
    return view('dosen');
})->middleware('auth');

Route::get('/kelas', function () {
    return view('kelas');
})->middleware('auth');

Route::get('/krs', function () {
    return view('krs');
})->middleware('auth');

Route::get('/matkul', function () {
    return view('matkul');
})->middleware('auth');

Route::get('/semester', function () {
    return view('semester');
})->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::post('/logout', [LoginController::class, 'logout']);





// Route::get('/agama', [ReferensiController::class, 'agama'])->middleware('auth');
// Route::get('/periode', [ReferensiController::class, 'periode'])->middleware('auth');
// Route::get('/unit', [ReferensiController::class, 'unit'])->middleware('auth');
// Route::get('/sistem', [ReferensiController::class, 'sistem'])->middleware('auth');
// Route::get('/status', [ReferensiController::class, 'status'])->middleware('auth');

/**
 * CRUD hlmn agama
 * pakai query builder
 */
Route::get('/agama/tampil', [AgamaController::class, 'index'])->middleware('auth');
// create data
// menuju ke form tambah data
Route::get('/agama/tampil', [AgamaController::class,'create'])->middleware('auth');

// masukkan data ke db
Route::post('/agama/tampil',[AgamaController::class, 'store'])->middleware('auth');

// read data
Route::get('/agama',[AgamaController::class,'tampil'])->middleware('auth');

// detail data berdasarkan id param
Route::get('/agama/{kode_agama}',[AgamaController::class,'show'])->middleware('auth');

// edit data
Route::get('/agama{kode_agama}/edit', [AgamaController::class,'edit'])->middleware('auth');

// update data di db berdasarkan id

Route::put('/agama/{kode_agama}', [AgamaController::class,'update'])->middleware('auth');

// delete data
Route::delete('/agama/{kode_agama}', [AgamaController::class,'destroy'])->middleware('auth');
// Route::resource('agama',AgamaController::class)->middleware('auth');

// CRUD SEMESTER
// Route::get('/semester',[SemesterController::class,'index'])->middleware('auth');
// Route::get('/semester/create', [SemesterController::class,'create'])->middleware('auth');
// Route::post('/semester/create',[SemesterController::class, 'store'])->middleware('auth');
// Route::get('/semester/{id}',[SemesterController::class,'show'])->middleware('auth');
// Route::get('/semester{id}/edit', [SemesterController::class,'edit'])->middleware('auth');
// Route::put('/semester/{id}', [SemesterController::class,'update'])->middleware('auth');
// Route::delete('/semester/{id}', [SemesterController::class,'destroy'])->middleware('auth');
// CRUD PERIODE
Route::get('/periode',[PeriodeController::class,'index'])->middleware('auth');
Route::get('/periode/create', [PeriodeController::class,'create'])->middleware('auth');
Route::post('/periode/create',[PeriodeController::class, 'store'])->middleware('auth');
Route::get('/periode/{id}',[PeriodeController::class,'show'])->middleware('auth');
Route::get('/periode{id}/edit', [PeriodeController::class,'edit'])->middleware('auth');
Route::put('/periode/{id}', [PeriodeController::class,'update'])->middleware('auth');
Route::delete('/periode/{id}', [PeriodeController::class,'destroy'])->middleware('auth');
// CRUD UNIT
Route::get('/unit',[UnitController::class,'index'])->middleware('auth');
Route::get('/unit/create', [UnitController::class,'create'])->middleware('auth');
Route::post('/unit/create',[UnitController::class, 'store'])->middleware('auth');
Route::get('/unit/{id}',[UnitController::class,'show'])->middleware('auth');
Route::get('/unit{id}/edit', [UnitController::class,'edit'])->middleware('auth');
Route::put('/unit/{id}', [UnitController::class,'update'])->middleware('auth');
Route::delete('/unit/{id}', [UnitController::class,'destroy'])->middleware('auth');
// CRUD SYSTEM
Route::get('/sistem',[SystemController::class,'index'])->middleware('auth');
Route::get('/sistem/create', [SystemController::class,'create'])->middleware('auth');
Route::post('/sistem/create',[SystemController::class, 'store'])->middleware('auth');
Route::get('/sistem/{id}',[SystemController::class,'show'])->middleware('auth');
Route::get('/sistem{id}/edit', [SystemController::class,'edit'])->middleware('auth');
Route::put('/sistem/{id}', [SystemController::class,'update'])->middleware('auth');
Route::delete('/sistem/{id}', [SystemController::class,'destroy'])->middleware('auth');





/**
 * CRUD HLMN STATUS
 */
// Route::resource('status', StatusController::class)->middleware('auth');
// Route::get('/status/tampil', [StatusController::class, 'index'])->middleware('auth');
// create data
// menuju ke form tambah data
Route::get('/status/tampil', [StatusController::class,'create'])->middleware('auth');

// masukkan data ke db
Route::post('/status/tampil',[StatusController::class, 'store'])->middleware('auth');

// read data
Route::get('/status',[StatusController::class,'tampil'])->middleware('auth');

// detail data berdasarkan id param
Route::get('/status/{status}',[StatusController::class,'show'])->middleware('auth');

// edit data
Route::get('/status{status}/edit', [StatusController::class,'edit'])->middleware('auth');

// update data di db berdasarkan id

Route::put('/status/{status}', [StatusController::class,'update'])->middleware('auth');

// delete data
Route::delete('/status/{status}', [StatusController::class,'destroy'])->middleware('auth');
// Route::resource('agama',AgamaController::class)->middleware('auth');
 