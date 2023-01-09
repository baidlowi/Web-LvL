@extends('layout.happy')
@section('title', 'Absen Pegawai')
@section('judulhalaman', 'ABSEN KEPEGAWAIAN')

@section('konten')
    <br>
	<a href="/absen/tambah"> + Tambah Absen Baru</a>
	<br>
	<table border="1">
		<tr>
			<th>ID Pegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($absen as $a)
		<tr>
			<td>{{ $a->pegawai_nama }}            </td>
			<td>{{ $a->Tanggal }}</td>
			<td>{{ $a->Status }}</td>
			<td>
				<a href="/absen/edit/{{ $a->ID}}">Edit</a>
				|
				<a href="/absen/hapus/{{ $a->ID}}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $absen->links() }}
    @endsection

