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

Route::get('/', ['uses' => 'StaticPagesController@home', 'middleware' => 'guest']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/result', ['uses' => 'MainController@result', 'as' => 'result.main']);
Route::get('/test', 'TestController@mulaiTest')->name('mulai.test');
Route::post('/prosesTest', 'TestController@prosesTest')->name('proses.test');
Route::post('/dokter/buatSoal', 'DokterController@buatSoal')->name('dokter.buatSoal');
Route::post('/dokter/hapusSoal', 'DokterController@hapusSoal')->name('dokter.hapusSoal');
Route::post('/user/update', 'UserController@updateUser')->name('user.updateUser');
Route::post('/postHasil', 'MainController@hasPost')->name('user.postHasil');
Route::post('/deletePost', 'MainController@deletePost')->name('user.deletePost');
Route::post('/verifikasiHasil', 'MainController@verifikasi')->name('dokter.verifikasi');
Route::post('/upgradeAkun', 'UserController@upgradeUser')->name('akun.upgrade');
