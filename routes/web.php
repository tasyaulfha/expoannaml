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
Route::get('/', function () {
    return view('index');
});
Route::get('/index', function () {
    return view('/index');
});

// halaman utama partisipan
Route::get('/indexbpbd', function () {
    return view('/indexbpbd');
});
Route::get('/indexdinas', function () {
    return view('/indexdinas');
});
Route::get('/indexpelapor', function () {
    return view('/indexpelapor');
});
Route::get('/footerDashboard', function () {
    return view('/footerDashboard');
});
Route::get('/menuPelapor', function () {
    return view('/menuPelapor');
});
Route::get('/laporkan', function () {
    return view('/laporkan');
});
Route::get('/laporanku', function () {
    return view('/laporanku');
});
Route::get('/statistik', function () {
    return view('/statistik');
});

Route::get('/verifikasi', function () {
    return view('/verifikasi');
});

Route::get('/profil', function () {
    return view('/profil');
});


Route::get('register','AuthController@getRegister')->name('register')->middleware('guest');
Route::post('register','AuthController@postRegister')->middleware('guest');
Route::get('/login','AuthController@getLogin')->middleware('guest')->name('login');
Route::post('login','AuthController@postLogin')->middleware('guest');

Route::get('/home',function(){
    return view('home');
})->middleware('auth')-> name('home');
Route::get('/logout','AuthController@logout')->middleware('auth')->name('logout');

Route::get('/indexpelapor',function(){
    return view('indexpelapor');
})-> name('indexpelapor');

Route::get('/laporkan','LaporanController@create')->name('laporan');
Route::post('/laporkan','LaporanController@store')->name('laporan.store');
Route::get('/laporanku','LihatLaporankuController@show')->name('laporanku.show');
Route::get('/laporanMasuk','LaporanMasukController@show')->name('laporanmasuk.show');
Route::get('/editDataLaporan/{id}','LaporanMasukController@edit')->name('editDataLaporan.edit');
Route::post('/editDataLaporan/{id}','LaporanMasukController@update')->name('editDataLaporan.update');
Route::put('/laporanTerverifikasi','LaporanController@update')->name('laporanTerverifikasi.update');
Route::delete('/laporanMasuk/{id}','LaporanMasukController@destroy')->name('laporanmasuk.destroy');
Route::get('/statistikbpbd','StatistikController@indexBpbd')->name('statistikbpbd.indexBpbd');
Route::get('/statistikdinas','StatistikController@indexDinas')->name('statistikdinas.indexDinas');


Route::get('/laporanDinas','LaporanDinasController@show')->name('laporanDinas.show');
Route::get('/editDataDinas/{id}','LaporanDinasController@edit')->name('editDataLaporan.edit');
Route::post('/editDataDinas/{id}','LaporanDinasController@update')->name('editDataLaporan.update');

Route::get('/editProfilPelapor', 'AuthController@edit')->name('editprofil.edit');
Route::post('/editProfilPelapor', 'AuthController@update')->name('editprofil.update');

Route::get('/editProfilBpbd', 'AuthController@editBpbd')->name('editprofil.editBpbd');
Route::post('/editProfilBpbd', 'AuthController@updateBpbd')->name('editprofil.updateBpbd');

Route::get('/editProfilDinas', 'AuthController@editDinas')->name('editprofil.editDinas');
Route::post('/editProfilDinas', 'AuthController@updateDinas')->name('editprofil.updateDinas');
