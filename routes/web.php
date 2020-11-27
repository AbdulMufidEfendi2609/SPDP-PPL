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
        Route::get('/VerifikasiPermintaan', 'PPLController@verifikasi_permintaan');
        Route::get('/setuju', 'PPLController@setuju_verifikasi');
        Route::get('/tolak', 'PPLController@tolak_verifikasi');
    });
    Route::group(['roles'=>'Agen'],function(){
        Route::get('/home', 'HomeController@index')->name('home');
        Route::get('/TambahPermintaan', 'PPLController@index_permintaan');
        Route::post('/TambahPermintaan/proses', 'PPLController@store_permintaan');
        Route::get('/RiwayatPermintaan', 'PPLController@riwayat_permintaan');
    });
    Route::group(['roles'=>'Driver'],function(){
        Route::get('/home', 'HomeController@index')->name('home');
        Route::get('/Peta', 'MapController@show')->name('peta');
    });
    Route::get('/home', 'HomeController@index')->name('home');
});


