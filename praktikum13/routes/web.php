<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TampilanController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [TampilanController::class, 'index']);

// Bungkus dengan route group
Route::group(['middleware' => ['auth']], function () {
    // Buat route untuk after_registrasi
    Route::get('/after_register', function () {
        return view('after_register');
    });

    // Bikin routing group baru berdasarkan role admin dan manager
    Route::group(['middleware' => ['auth', 'peran:admin-manager']], function () {
    
    // Bikin Routing untuk dashboard pake controller
    Route::get('/dashboard', [DashboardController::class, 'index']);

    // Bikin Routing untuk produk pake controller
    Route::get('/produk', [ProdukController::class, 'index']);

    // Bikin Routing untuk create
    Route::get('/produk/create', [ProdukController::class, 'create']);

    // Bikin Routing untuk kirim data menggunakan store
    Route::post('/produk/store', [ProdukController::class, 'store']);

    // Bikin Routing untuk edit
    Route::get('/produk/edit/{id}', [ProdukController::class, 'edit']);

    // Bikin Routing untuk edit data menggunakan update
    Route::put('/produk/update/{id}', [ProdukController::class, 'update']);

    // Bikin Routing untuk delete data
    Route::get('/produk/delete/{id}', [ProdukController::class, 'destroy']);

    // Bikin routing ke dashboard
    Route::get('/dashboard', [DashboardController::class, 'index']);

    // Bikin routing ke produk
    Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
