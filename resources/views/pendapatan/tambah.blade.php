@extends('layout.happy')
@section('title', 'Data Pendapatan Pegawai')
@section('judulhalaman', 'TAMBAH PENDAPATAN')

@section('konten')

	<a href="/pendapatan"> Kembali</a>

	<br/>
	<br/>

	<form action="/pendapatan/store" method="post">
		{{ csrf_field() }}
		IDPegawai <input type="text" required="required" name="IDPegawai"> <br/>
		Bulan <input type="text" required="required" name="Bulan"> <br/>
		Tahun <input type="number" required="required" name="Tahun"> <br/>
		Gaji <input type="number" required="required" name="Gaji"> <br/>
        Tunjangan <input type="number" required="required" name="Tunjangan"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
    @endsection
