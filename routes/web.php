<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CRUD\BeritaController;
use App\Http\Controllers\CRUD\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\Berita;

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

// home
Route::get('/' , [HomeController::class , 'index']);
Route::get('/tentang_kami' , [HomeController::class , 'tentang_kami']);
Route::get('/produk/{id}' , [HomeController::class , 'produk']);
Route::get('/informasi' , [HomeController::class , 'informasi']);
Route::get('/partner' , [HomeController::class , 'partner']);
Route::get('/contact' , [HomeController::class , 'contact']);
Route::get('/visi_misi' , [HomeController::class , 'visi_misi']);
Route::get('/sejarah' , [HomeController::class , 'sejarah']);
Route::get('/struktur_organisasi' , [HomeController::class , 'struktur_organisasi']);
Route::get('/detail_produk' , [HomeController::class , 'detail_produk']);
Route::get('/detail_partner' , [HomeController::class , 'detail_partner']);
Route::get('/berita/{id}' , [HomeController::class , 'detail_berita']);

// admin
Route::group(['prefix' => '/admin'] , function()
{
    Route::get('/' , [AdminController::class , 'index']);
    Route::get('/product', [AdminController::class , 'product']);
    Route::get('/partner' , [AdminController::class , 'partner']);
    Route::get('/struktur_organisasi' ,  [AdminController::class , 'struktur_organisasi']);
    Route::get('/edit' ,  [AdminController::class , 'edit']);


    Route::group(['prefix' => '/article'] , function(){
        Route::get('/' , [BeritaController::class , 'index']);
        Route::get('/add' , [BeritaController::class, 'create']);
        Route::post('/add' , [BeritaController::class , 'store']);
        Route::get('/edit/{id}' , [BeritaController::class , 'edit']);
        Route::post('/edit/{id}' , [BeritaController::class , 'update']);
        Route::get('/delete/{id}' , [BeritaController::class , 'destroy']);
    });

    Route::group(['prefix' => '/product'] , function(){
        Route::get('/' , [ProductController::class , 'index']);
        Route::get('/add' , [ProductController::class, 'create']);
        Route::post('/add' , [ProductController::class , 'store']);
        Route::get('/edit/{id}' , [ProductController::class , 'edit']);
        Route::post('/edit/{id}' , [ProductController::class , 'update']);
        Route::get('/delete/{id}' , [ProductController::class , 'destroy']);
    });
    // Route::get('/logout',[AuthController::class , 'logout']);

    // admin dalam
    Route::get('/admin', [AdminController::class, 'admin_dashboard']);

});
