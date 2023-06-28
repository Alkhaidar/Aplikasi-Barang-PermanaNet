<?php

use App\Http\Controllers\DashboardBarang;
use App\Http\Controllers\DashboardBarangKeluar;
use App\Http\Controllers\DashboardBarangMasuk;
use App\Http\Controllers\DashboardUser;
use App\Http\Controllers\LoginController;
use App\Models\Barang;
use App\Models\BarangKeluar;
use App\Models\BarangMasuk;
use App\Models\User;
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

Route::get('/', function () {
    return view('dashboard.index', [
        'title' => "Dashboard",
        'databarang' => Barang::all()->count(),
        'databarangmasuk' => BarangMasuk::all()->count(),
        'databarangkeluar' => BarangKeluar::all()->count(),
        'datauser' => User::all()->count()
    ]);
})->name('dashboard');



Route::resource('/barang',  DashboardBarang::class  );

Route::resource('/barangmasuk', DashboardBarangMasuk::class);

Route::resource('/barangkeluar', DashboardBarangKeluar::class);

Route::resource('/user', DashboardUser::class);

// Route::resource('/login', LoginController::class);

Route::get('/laporan', function () {
    return view('dashboard.laporan.index',[
        'title' => "Laporan",
        'barangmasuks' => BarangMasuk::all(),
        'barangkeluars' => BarangKeluar::all()
    ]);
});


// Route::get('/logout', function () {
//     return view('dashboard.logout.index');
// });

Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/login-proses', [LoginController::class,'login_proses'])->name('login-proses');
Route::get('/logout', [LoginController::class,'logout'])->name('logout');
