<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginRegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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


Route::middleware(['guest'])->group(function () {
    Route::get('/', function () {
        return view('home');
    });
    Route::get('/auth/register', [LoginRegisterController::class, 'register'])->name('auth.register');
    Route::get('/auth/login', [LoginRegisterController::class, 'login'])->name('auth.login');
});

Route::get('/produk', function () {
    return view('admin.produk');
});

Route::get('/user/produk', function () {
    return view('user.produk');
});


Route::group(['middleware' => ['auth', 'checklevel:admin']], function () {
    Route::get('home', [LoginRegisterController::class, 'home'])->name('home');
    Route::get('/admin/home', [AdminController::class, 'adminhome'])->name('admin.home');
    Route::get('/admin/produk', [AdminController::class, 'produk'])->name('admin.produk');
    Route::get('/admin/pesanan', [AdminController::class, 'adminpesanan'])->name('admin.pesanan');
    Route::get('/cetakbukti/{id}', [AdminController::class, 'cetakbukti'])->name('cetakbukti');
    //produk
    Route::get('/admin/produk', [AdminController::class, 'adminProduk'])->name('admin.produk');
    Route::get('/admin/tambahProduk', [AdminController::class, 'tambahProduk'])->name('admin.tambahProduk');
    Route::get('/admin/editProduk/{id}', [AdminController::class, 'editProduk'])->name('admin.editProduk');
    Route::get('/admin/deleteProduk/{id}', [AdminController::class, 'deleteProduk'])->name('admin.deleteProduk');
    // galeri
    Route::get('/admin/galeri', [AdminController::class, 'adminGaleri'])->name('admin.galeri');
    Route::get('/admin/tambahGaleri', [AdminController::class, 'tambahGaleri'])->name('admin.tambahGaleri');
    Route::get('/admin/editGaleri/{id}', [AdminController::class, 'editGaleri'])->name('admin.editGaleri');
    Route::get('/admin/deleteGaleri/{id}', [AdminController::class, 'deleteGaleri'])->name('admin.deleteGaleri');
    //admin
    Route::get('/admin/admin', [AdminController::class, 'admin'])->name('admin.admin');
    Route::get('/admin/tambahAdmin', [AdminController::class, 'tambahAdmin'])->name('admin.tambahadmin');
    Route::get('/admin/editAdmin/{id}', [AdminController::class, 'editAdmin'])->name('admin.editAdmin');
    Route::get('/admin/deleteAdmin/{id}', [AdminController::class, 'deleteAdmin'])->name('admin.deleteAdmin');
});

Route::group(['middleware' => ['auth', 'checklevel:user']], function () {
    Route::get('/user/home', [LoginRegisterController::class, 'userHome'])->name('user.home');
    Route::get('/user/riwayatpemesanan', [UserController::class, 'riwayat'])->name('user.riwayatpemesanan');
    Route::get('/user/produk', [UserController::class, 'userProduk'])->name('user.produk');
    Route::get('/user/galeri', [UserController::class, 'galeri'])->name('user.galeri');
    Route::get('/user/pembayaran/{id}', [UserController::class, 'pembayaran'])->name('user.pembayaran');
    Route::get('/detailproduk/{id}', [UserController::class, 'showDetail'])->name('user.detailproduk');
});
Route::post('/pesan', [UserController::class, 'postPesan'])->name('post.pesan');
Route::post('/admin/ubahStatus/{id}', [AdminController::class, 'ubahStatus'])->name('ubahStatus');
Route::post('/postPemesanan', [UserController::class, 'postPemesanan'])->name('postPemesanan');
//produk
Route::post('/postTambahProduk', [AdminController::class, 'postTambahProduk'])->name('postTambahProduk');
Route::post('/postEditProduk/{id}', [AdminController::class, 'postEditProduk'])->name('postEditProduk');
//galeri
Route::post('/postGaleri', [AdminController::class, 'postGaleri'])->name('postGaleri');
Route::post('/postEditGaleri/{id}', [AdminController::class, 'postEditGaleri'])->name('postEditGaleri');
//admin
Route::post('/postTambahAdmin', [AdminController::class, 'postTambahAdmin'])->name('postTambahAdmin');
Route::post('/postEditAdmin/{id}', [AdminController::class, 'postEditAdmin'])->name('postEditAdmin');


Route::post('/postRegister', [LoginRegisterController::class, 'postRegister'])->name('postRegister');
Route::post('/postLogin', [LoginRegisterController::class, 'postLogin'])->name('postLogin');
Route::get('/logout', [LoginRegisterController::class, 'logout'])->name('logout');
