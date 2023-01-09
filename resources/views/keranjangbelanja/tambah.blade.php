@extends('layout.happy')
@section('title', 'Data keranjang belanja')
@section('judulhalaman', 'TAMBAH keranjang belanja')

@section('konten')

	<a href="/keranjangbelanja"> Kembali</a>

	<br/>
	<br/>

	<form action="/keranjangbelanja/store" method="post">
		{{ csrf_field() }}
		<div class="row">
            <span class="col-sm-2">Kode Barang</span>
            <input class="col-sm-5" type="number" name="KodeBarang" required="required"> <br>
        </div>
        <div class="row">
            <span class="col-sm-2">Jumlah</span>
            <input class="col-sm-3" type="number" name="Jumlah" required="required"> <br>
        </div>
        <div class="row">
            <span class="col-sm-2">Harga</span>
            <input class="col-sm-3" type="number" name="Harga" required="required"> <br>
        </div>

		<input class="btn-primary" type="submit" value="BELI">
	</form>
    @endsection
