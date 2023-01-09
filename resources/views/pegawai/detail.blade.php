@extends('layout.happy')
@section('title', 'Data Pegawai')
@section('judulhalaman', 'EDIT PEGAWAI')

@section('konten')

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
        Nama
        <label class="col-md-4 col-sm-4 control-label">{{ $p->pegawai_nama }}</label> <br/>
		Jabatan
        <label class="col-md-4 col-sm-4 control-label">{{ $p->pegawai_jabatan }}</label> <br/>
		Umur
        <label class="col-md-4 col-sm-4 control-label">{{ $p->pegawai_umur }}</label> <br/>
		Alamat
        <label class="col-md-4 col-sm-4 control-label">{{ $p->pegawai_alamat }}</label> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
    @endsection
