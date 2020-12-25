<?php

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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => ['web', 'auth', 'roles']],function(){
    Route::group(['roles'=>'Manager Gudang'],function(){
        Route::get('/home', 'HomeController@index')->name('home');
        Route::get('/RekapPermintaan', 'PPLController@rekap_permintaan');
        Route::get('/StokPupuk', 'PPLController@stok_pupuk');
        Route::get('/VerifikasiPermintaan', 'PPLController@verifikasi_permintaan');
        Route::get('/setuju', 'PPLController@setuju_verifikasi');
        Route::get('/tolak', 'PPLController@tolak_verifikasi');
        Route::get('/TambahStok', 'PPLController@index_stok');
        Route::post('/TambahStok/proses', 'PPLController@store_stok');
        Route::get('/TambahPengiriman', 'PPLController@index_pengiriman');
        Route::post('/TambahPengiriman/proses', 'PPLController@store_pengiriman');
        Route::get('/RekapPermintaan1', 'PPLController@rekap_permintaan1');
        Route::get('/RekapPengiriman', 'PPLController@rekap_pengiriman');
        Route::get('/RekapPengiriman1', 'PPLController@rekap_pengiriman1');
        Route::get('/TambahItem', 'PPLController@index_item');
        Route::post('/TambahItem/proses', 'PPLController@store_item');
        Route::get('/DataDriver', 'PPLController@data_driver');
        Route::get('/TambahDriver', 'PPLController@index_driver');
        Route::post('/TambahDriver/proses', 'PPLController@store_driver');
        Route::get('/DataAgen', 'PPLController@data_agen');
    });
    Route::group(['roles'=>'Agen'],function(){
        Route::get('/home', 'HomeController@index')->name('home');
        Route::get('/TambahPermintaan', 'PPLController@index_permintaan');
        Route::post('/TambahPermintaan/proses', 'PPLController@store_permintaan');
        Route::get('/RiwayatPermintaan', 'PPLController@riwayat_permintaan');
        Route::get('/RiwayatPermintaan1', 'PPLController@riwayat_permintaan1');
        Route::get('/RiwayatPengiriman', 'PPLController@riwayat_pengiriman');
        Route::get('/VerifikasiPengiriman', 'PPLController@verifikasi_pengiriman');
        Route::get('/yes', 'PPLController@sudah_pengiriman');
        Route::get('/RiwayatPengiriman1', 'PPLController@riwayat_pengiriman1');
        Route::get('/LihatStok', 'PPLController@lihat_stok');
    });
    Route::group(['roles'=>'Driver'],function(){
        Route::get('/home', 'HomeController@index')->name('home');
        Route::get('/DataPengiriman', 'PPLController@data_pengiriman');
        Route::get('/DataPengiriman1', 'PPLController@data_pengiriman1');
    });
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/profil', 'PPLController@profil')->name('profil');
    Route::get('/UpdateProfil', 'PPLController@update_profil');
    Route::post('/Update', 'PPLController@store_update');
});
