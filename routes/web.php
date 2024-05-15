<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\DetailpenjualanController;
use App\Models\Produk;
use App\Models\Penjualan;
use App\Models\Pelanggan;
use App\Models\DetailPenjualan;

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
    $allproduk = produk::all();

    $pelanggan = pelanggan::count();
    $produk = produk::count();
    $penjualan = penjualan::count();

    return view('welcome',compact('allproduk','pelanggan','produk','penjualan'));
});

// D A S H B O A R D - P E T U G A S 
Route::group(['middleware' => ['auth','verified', 'Role:Petugas']], function () {
    Route::get('/welcomep', function () {
    $allproduk = produk::all();

    $pelanggan = pelanggan::count();
    $produk = produk::count();
    $penjualan = penjualan::count();
    $tittle = 'welcomep';

    return view('welcomep', compact('allproduk','pelanggan','produk','penjualan','tittle'));
})->middleware('auth');
});

// AUTHENTICATION
Route::get('/login',[LoginController::class, 'login'])->name('login');
Route::get('/logout',[LoginController::class, 'logout'])->name('logout');
Route::post('/proseslogin',[LoginController::class, 'proseslogin'])->name('proseslogin');

//Register Pelanggan
Route::get('/register',[LoginController::class, 'register'])->name('register'); 
Route::post('/prosesregister',[LoginController::class, 'prosesregister'])->name('prosesregister');

Route::get('/halamancariproduk',[ProdukController::class, 'halamancariproduk'])->name('halamancariproduk');
Route::get('/cariproduk',[ProdukController::class, 'cariproduk'])->name('cariproduk');


// AUTHENTICATION ADMIN
Route::group(['middleware' => ['auth', 'Role:Petugas,Admin']], function () {
	// Pelanggan 
	Route::get('/pelanggan',[PelangganController::class, 'pelanggan'])->name('pelanggan')->middleware('auth');
	Route::get('/addpelanggan', [PelangganController::class, 'addpelanggan'])->name('addpelanggan');
	Route::post('/insertpelanggan', [PelangganController::class, 'insertpelanggan'])->name('insertpelanggan');
	Route::get('/editpelanggan/{id}', [PelangganController::class, 'editpelanggan'])->name('editpelanggan');
	Route::post('/updatepelanggan/{id}', [PelangganController::class, 'updatepelanggan'])->name('updatepelanggan');
	Route::get('/deletepelanggan/{id}', [PelangganController::class, 'deletepelanggan'])->name('deletepelanggan');
	// Produk 
	Route::get('/produk',[ProdukController::class, 'produk'])->name('produk');
	Route::get('/addproduk', [ProdukController::class, 'addproduk'])->name('addproduk');
	Route::post('/insertproduk', [ProdukController::class, 'insertproduk'])->name('insertproduk');
	Route::get('/editproduk/{id}', [ProdukController::class, 'editproduk'])->name('editproduk');
	Route::post('/updateproduk/{id}', [ProdukController::class, 'updateproduk'])->name('updateproduk');
	Route::get('/deleteproduk/{id}', [ProdukController::class, 'deleteproduk'])->name('deleteproduk');
	Route::get('/cetakproduk', [produkController::class, 'cetakproduk'])->name('cetakproduk');

	// Penjualan 
	Route::get('/penjualan',[penjualanController::class, 'penjualan'])->name('penjualan');
	Route::get('/addpenjualan', [penjualanController::class, 'addpenjualan'])->name('addpenjualan');
	Route::post('/insertpenjualan', [penjualanController::class, 'insertpenjualan'])->name('insertpenjualan');
	Route::get('/editpenjualan/{id}', [penjualanController::class, 'editpenjualan'])->name('editpenjualan');
	Route::post('/updatepenjualan/{id}', [penjualanController::class, 'updatepenjualan'])->name('updatepenjualan');
	Route::get('/deletepenjualan/{id}', [penjualanController::class, 'deletepenjualan'])->name('deletepenjualan');
	Route::get('/cetakpenjualan', [penjualanController::class, 'cetakpenjualan'])->name('cetakpenjualan');

	Route::get('/datapetugas', [LoginController::class, 'datapetugas'])->name('datapetugas');
	Route::get('/deletepetugas/{id}', [LoginController::class, 'deletepetugas'])->name('deletepetugas');

});
