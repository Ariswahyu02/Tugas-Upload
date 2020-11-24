<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$warnet = DB::table('paket')->get();
 
    	// mengirim data pegawai ke view index
    	return view('daftar_paket',['warnet_indomaju' => $warnet]);
 
    }
}
