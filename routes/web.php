<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//product
// Route::get('/product', function () {
//     return view('product');
// });

//----------------------------------------------------------Route CRUD---------------------------------------------
//menampilkan seluruh produk majoo
Route::get('/product','Product@index');
Route::get('/','Product@index');
//menampilkan detail produk majoo
Route::get('/productdetails/{id}','Product@productdetail');
//menampilkan detail produk majoo dan data pemesanan
Route::get('/productpay/{id}','Product@productpay');
//proses pembelian produk
Route::post('/productpay/productpaysave','Product@productpaysave');

//---------------------------------------------------------Admin---------------------------------------------------
Route::get('admin/login', 'AuthController@index')->name('login');
Route::post('proses_login', 'AuthController@proses_login')->name('proses_login');
Route::get('logout', 'AuthController@logout')->name('logout');

Route::group(['middleware' => ['auth']], function () {
    //membuat route group agar jika membuka halaman admin harus login terlebih dahulu
    Route::group(['middleware' => ['cek_login:admin']], function () {
    	Route::get('admin/product', 'Product@productget');
        //menampilkan produk majoo 
        // Route::get('admin/product','Product@productget');
        //menambahkan produk majoo 
        Route::get('admin/product/productadd','Product@productadd');
        //menyimpan produk majoo ke dalam database
        Route::post('admin/product/productaddsave','Product@productaddsave');
        //mengubah produk majoo ke dalam database
        Route::get('admin/product/productedit/{id}','Product@productedit');
        //menyimpan perubahan produk majoo ke dalam database
        Route::post('admin/product/producteditsave','Product@producteditsave');
        //menghapus data produk majoo dari database
        Route::get('admin/product/productdelete/{id}','Product@productdelete');
        //menampilkan order produk majoo 
        Route::get('admin/productorder','Product@productorder');
        //sistem dalam perbaikan
        Route::get('admin/maintenance','Product@maintenance');
    });
});

