@extends('layout.happy')
@section('title', 'Data keyboard')
@section('judulhalaman', 'EDIT keyboard')

@section('konten')

	<a href="/keyboard"> Kembali</a>

	<br/>
	<br/>

	@foreach($keyboard as $p)
	<form action="/keyboard/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->kodekeyboard  }}"> <br/>
		Merk keyboard <input type="text" required="required" name="merkkeyboard" value="{{ $p->merkkeyboard }}"> <br/>
		Stock keyboard <input type="number" required="required" name="stockkeyboard" value="{{ $p->stockkeyboard }}"> <br/>
       Tersedia <input type="text" required="required" name="tersedia" value="{{ $p->tersedia }}"> <br/>


		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
    @endsection
