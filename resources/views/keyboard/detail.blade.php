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
        Merk keyboard
        <label class="col-md-4 col-sm-4 control-label">{{ $p->merkkeyboard }}</label> <br/>
		Stock keyboard
        <label class="col-md-4 col-sm-4 control-label">{{ $p->stockkeyboard  }}</label> <br/>
		Tersedia
        <label class="col-md-4 col-sm-4 control-label">{{ $p->tersedia  }}</label> <br/>

		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
    @endsection
