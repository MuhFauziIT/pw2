<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProdukController;
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

Route::get('/', function () {
    return view('welcome');
});

// Bikin Routing untuk dashboard pake controller
Route::get('/dashboard', [DashboardController::class, 'index']);

// Bikin Routing untuk produk pake controller
Route::get('/produk', [ProdukController::class, 'index']);

// Buat route untuk frontend index
Route::get('/index', [FrontendController::class, 'index']);
// Buat route untuk frontend about
Route::get('/about', [FrontendController::class, 'about']);
// Buat route untuk frontend choose
Route::get('/choose', [FrontendController::class, 'choose']);
// Buat route untuk frontend contact
Route::get('/contact', [FrontendController::class, 'contact']);
// Buat route untuk frontend services
Route::get('/services', [FrontendController::class, 'services']);
// Buat route untuk frontend team
Route::get('/team', [FrontendController::class, 'team']);
