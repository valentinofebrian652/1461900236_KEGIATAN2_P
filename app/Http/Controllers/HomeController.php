<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home(){
		return view('home0236');
	}
 
	public function data(){
        // select join
        $databuku = DB::table('ms_buku')
        ->leftJoin('ms_kategori', 'ms_buku.kode_kategori', '=', 'ms_kategori.kode_kategori')
        ->leftJoin('ms_penerbit', 'ms_buku.kode_penerbit', '=', 'ms_penerbit.kode_penerbit')
        ->select('ms_buku.judul_buku','ms_buku.jumlah_buku','ms_buku.pengarang_buku','ms_buku.tahun_terbit_buku', 'ms_kategori.nama_kategori','ms_penerbit.nama_penerbit')
        ->get();

    	return view('data0236',['ms_buku' => $databuku]);


	}
    public function bukuready(){

    	// select where
        $databuku = DB::table('ms_buku')
        ->select('judul_buku', 'jumlah_buku','pengarang_buku','tahun_terbit_buku','status')
        ->where('status', '=', 'ready')
        ->get();

    	return view('bukuready0236',['ms_buku' => $databuku]);

	}
	public function penerbit(){

    	// select
        $datapenerbit = DB::table('ms_penerbit')
        ->select('nama_penerbit', 'alamat_penerbit','telp_penerbit')
        ->get();

    	return view('penerbit0236',['ms_penerbit' => $datapenerbit]);

	}
    public function bukuterbaru(){

        // select join dengan where
        $databuku = DB::table('ms_buku')
        ->leftJoin('ms_kategori', 'ms_buku.kode_kategori', '=', 'ms_kategori.kode_kategori')
        ->leftJoin('ms_penerbit', 'ms_buku.kode_penerbit', '=', 'ms_penerbit.kode_penerbit')
        ->select('ms_buku.judul_buku','ms_buku.jumlah_buku','ms_buku.pengarang_buku','ms_buku.tahun_terbit_buku', 'ms_kategori.nama_kategori','ms_penerbit.nama_penerbit')
        ->where('tahun_terbit_buku', '>', 2019)
        ->get();

    	return view('data0236',['ms_buku' => $databuku]);
	}
}
