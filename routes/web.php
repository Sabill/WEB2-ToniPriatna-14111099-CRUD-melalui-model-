<?php
use App\Master;
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



Route::get('/', 'MasterController@index');
Route::get('/halaman_utama', 'MasterController@halaman_utama');
Route::get('/tambah', function (){
    	$master = new Master;
    	$master -> nama_pengguna = "Toni";
    	$master -> jenis_kelamin = "laki-laki";
    	$master -> no_telp = "083822293008";
    	$master -> username = "Admin";
    	$master -> password = "admin";
    	$master -> status = "1";
    	$timestamps = false;
    	$master -> save();
    });
Route::get('/ubah', function(){
		$master =  Master::find(1);
    	$master -> nama_pengguna = "Toni";
    	$master -> jenis_kelamin = "laki-laki";
    	$master -> no_telp = "083822293008";
    	$master -> username = "Admin";
    	$master -> password = "admin";
    	$master -> status = "1";
	});
Route::get('/tampil', function(){
		$master = Master::all();
		foreach ($master as $mst) 
		{
			echo "<b>Nama Pengguna</b>:";
			echo $mst->nama_pengguna;
		}		
	});
Route::get('/hapus', function(){
	$master = Master::find(1);
	$master ->delete();
	});