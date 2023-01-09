@extends('layout.happy')
@section('title', 'Data keyboard')
@section('judulhalaman', 'TAMBAH keyboard')

@section('konten')

	<a href="/keyboard"> Kembali</a>

	<br/>
	<br/>

	<form action="/keyboard/store" method="post">
		{{ csrf_field() }}
		Merk keyboard <input type="text" name="merkkeyboard" required="required"> <br/>

		Stock keyboard <input type="number" name="stockkeyboard" required="required"> <br/>
		Tersedia <input type="text" name="tersedia" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
    @endsection
