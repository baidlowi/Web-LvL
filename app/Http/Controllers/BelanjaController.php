<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BelanjaController extends Controller
{
    public function index()
    {
        //DB::table('')->get();
        // mengambil data dari table keranjangbelanja
        //$keranjangbelanja = DB::table('keranjangbelanja')->get(); //hasil get() adalah array of object
        $keranjangbelanja = DB::table('keranjangbelanja')->paginate(5);

        // mengirim data keranjangbelanja ke view index
        return view('keranjangbelanja.index',['keranjangbelanja' => $keranjangbelanja]);

    }

    // method untuk menampilkan view form tambah keranjangbelanja
public function tambah()
{

	// memanggil view tambah
	return view('keranjangbelanja.tambah');

}

// method untuk insert data ke table keranjangbelanja
public function store(Request $request)
{
	// insert data ke table keranjangbelanja
	DB::table('keranjangbelanja')->insert([
		'KodeBarang' => $request->KodeBarang,
		'Jumlah' => $request->Jumlah,
		'Harga' => $request->Harga
	]);
	// alihkan halaman ke halaman keranjangbelanja
	return redirect('/keranjangbelanja'); //tidak retun view, karena tidak flesibel

}

// method untuk edit data keranjangbelanja
public function edit($id)
{
	// mengambil data keranjangbelanja berdasarkan id yang dipilih
	$keranjangbelanja = DB::table('keranjangbelanja')->where('keranjangbelanja_id',$id)->get();
	// passing data keranjangbelanja yang didapat ke view edit.blade.php
	return view('keranjangbelanja.edit',['keranjangbelanja' => $keranjangbelanja]);

}

// update data keranjangbelanja
public function update(Request $request)
{
	// update data keranjangbelanja
	DB::table('keranjangbelanja')->where('keranjangbelanja_id',$request->id)->update([
		'KodeBarang' => $request->KodeBarang,
		'Jumlah' => $request->Jumlah,
		'Harga' => $request->Harga
	]);
	// alihkan halaman ke halaman keranjangbelanja
	return redirect('/keranjangbelanja');
}

// method untuk hapus data keranjangbelanja
public function hapus($id)
{
	// menghapus data keranjangbelanja berdasarkan id yang dipilih
	DB::table('keranjangbelanja')->where('keranjangbelanja_id',$id)->delete();

	// alihkan halaman ke halaman keranjangbelanja
	return redirect('/keranjangbelanja');
}

public function cari(Request $request)
{
	// menangkap data pencarian
	$cari = $request->cari;

 	// mengambil data dari table keranjangbelanja sesuai pencarian data
	$keranjangbelanja = DB::table('keranjangbelanja')
	->where('KodeBarang','like',"%".$cari."%")
    ->paginate();

    	// mengirim data keranjangbelanja ke view index
	return view('index',['keranjangbelanja' => $keranjangbelanja]);

}


public function view($id)
{
	// mengambil data keranjangbelanja berdasarkan id yang dipilih
	$keranjangbelanja = DB::table('keranjangbelanja')->where('keranjangbelanja_id',$id)->get();
	// passing data keranjangbelanja yang didapat ke view edit.blade.php
	return view('keranjangbelanja.detail',['keranjangbelanja' => $keranjangbelanja]);

}



}
