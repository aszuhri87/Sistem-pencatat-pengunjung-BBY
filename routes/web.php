<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes(['verify'=>true]);

// Route::get('home', 'HomeController')->name('home');

Route::get('data_pengunjung', 'AdminController@dashboard')->name('data_pengunjung');
Route::post('data_pengunjung', 'AdminController@dashboard');

Route::get('/admin', 'AdminController@index')->name('admin.index');


Route::get('pengunjung/tambah', 'PengunjungController@tambah');

Route::post('pengunjung/store', 'PengunjungController@store');

// Route::get('pengunjung/edit/{id}', 'PengunjungController@edit');
// Route::resource('admin/admin', 'DateRangeController');
// Route::post('pengunjung/update/{id}', 'PengunjungController@update');
Route::get('/pengunjung/trash_all', 'PengunjungController@trash_all');
Route::get('/pengunjung/hapus_semua', 'PengunjungController@hapus_semua');
Route::get('/pengunjung/kembalikan_semua', 'PengunjungController@balikan');
Route::get('/admin/export_view', 'PengunjungController@export_view');



Route::get('pengunjung/hapus/{id}', 'PengunjungController@delete');

// Route::get('admin/admin_pegawai', 'PegawaiController');
// Route::get('admin/pegawai_input', 'PegawaiController@tambah');
// Route::post('admin/pegawai/store', 'PegawaiController@store');

Route::get('data_pegawai', 'PegawaiController@index')->name('data_pegawai');
Route::post('data_pegawai', 'PegawaiController@index');

Route::get('pegawai/tambah', 'PegawaiController@tambah')->middleware('verified');


Route::get('trash','PengunjungController@trash');
Route::get('/pengunjung/hapus_permanen/{id}', 'PengunjungController@hapus_permanen');
Route::get('/pengunjung/restore/{id}', 'PengunjungController@restore');
Route::post('pegawai/store', 'PegawaiController@store');
Route::get('pegawai/hapus/{id}', 'PegawaiController@delete');
Route::get('/exportExcel', 'PengunjungController@exportExcel')->name('pengunjung.exportExcel');
Route::get('/permohonan', 'PermohonanController@showContactForm');
Route::post('/permohonan', 'PermohonanController@sendMail');
Route::get('/refreshcaptcha', 'PermohonanController@refreshCaptcha');

Route::get('admin/asal/hapus/{id}', 'AsalController@delete');

Route::get('/refreshcaptcha', 'PengunjungController@refreshCaptcha');
Route::get('auth/user_list', 'UserController@index');
Route::get('auth/hapus/{id}', 'UserController@delete');

// Route::get('auth/{user}',  ['as' => 'auth/user_edit', 'uses' => 'UserController@edit']);
Route::patch('auth/{user}/update',  ['as' => 'auth.update', 'uses' => 'UserController@update']);
Route::get('auth/user_edit','UserController@edit');
Route::get('auth/tambah','UserController@create');
Route::resource('auth', 'UserController');
Route::get('dashboard_chart', 'PengunjungChartController@index')->name('dashboard_chart');

Route::resource('admin/admin_asal', 'AsalController');

Route::resource('pengunjung', 'PengunjungController');
Route::resource('pegawai', 'PegawaiController');
Route::get('/','WelcomeController@index');
Route::get('/nexmo','NexmoController@show')->name('nexmo');
Route::post('/nexmo','NexmoController@verify')->name('nexmo');

Route::get('auth/edit/{user}',  ['as' => 'auth.edit', 'uses' => 'UserController@edit']);
Route::patch('auth/{user}/update',  ['as' => 'auth.update', 'uses' => 'UserController@update']);

Route::get('pegawai_trash','PegawaiController@trash');
Route::get('/pegawai/hapus_permanen/{id}', 'PegawaiController@hapus_permanen');
Route::get('/pegawai/restore/{id}', 'PegawaiController@restore');
Route::get('/pegawai/trash_all', 'PegawaiController@trash_all');

Route::get('pegawai/cari_non', 'PegawaiController@cari_non')->name('cari_non');
Route::post('pegawai/cari_non', 'PegawaiController@cari_non');
Route::get('hapus_pg_permanen', 'PegawaiController@hapus_semua');
Route::get('kembalikan_pegawai', 'PegawaiController@balikan');

