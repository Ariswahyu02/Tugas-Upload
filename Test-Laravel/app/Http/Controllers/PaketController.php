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
 
    	// mengirim data jam paket ke view daftar_paket
    	return view('daftar_paket',['warnet_indomaju' => $warnet]);
 
	}
	
	// method untuk menampilkan view form tambah paket
	public function tambah()
	{
 
	// memanggil view tambah
	return view('tambah');
 
	}


	public function tambah_jam(Request $request){

		$this->validate($request, [
			'nama_paket' => 'required',
			'jam_paket' => 'required',
			'harga_paket' => 'required'
		]);

		// insert data ke table paket
	DB::table('paket')->insert([
		'nama_paket' => $request->nama_paket,
		'jam_paket' => $request->jam_paket,
		'harga_paket' => $request->harga_paket
	]);
	// alihkan halaman ke halaman paket
	return redirect('/daftar_paket');

	}

	public function edit($id){
		// mengambil data paket berdasarkan id
		$id_data = DB::table("paket")->where("id_paket", $id)->get();

		return view("edit", ["warnet_indomaju" => $id_data]);

	}

	public function update(Request $request){

		$this->validate($request, [
			'nama_paket' => 'required',
			'jam_paket' => 'required',
			'harga_paket' => 'required'
		]);

		DB::table("paket")->where("id_paket", $request->id_paket)->update([
			'nama_paket' => $request->nama_paket,
			'jam_paket' => $request->jam_paket,
			'harga_paket' => $request->harga_paket
		]);

		return redirect('/daftar_paket');
	}

	public function hapus($id){
		DB::table("paket")->where("id_paket", $id)->delete();

		return redirect("/daftar_paket");
	}

}
