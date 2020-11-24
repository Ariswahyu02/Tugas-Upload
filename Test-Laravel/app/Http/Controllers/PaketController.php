<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function index()
    {
    	// mengambil data dari table paket
    	$warnet = DB::table('paket')->get();
 
    	// mengirim data pegawai ke view index
    	return view('daftar_paket',['warnet_indomaju' => $warnet]);
 
	}
	
	// method untuk menampilkan view form tambah paket
	public function tambah()
	{
 
	// memanggil view tambah
	return view('tambah');
 
	}


	public function tambah_jam(Request $request){

		// insert data ke table paket
	DB::table('paket')->insert([
		'nama_paket' => $request->nama_paket,
		'jam_paket' => $request->jam_paket,
		'harga_paket' => $request->harga_paket
	]);
	// alihkan halaman ke halaman paket
	return redirect('/daftar_paket');

	}

}
