@extends('layout.happy')
@section('title', 'Data keyboard')
@section('judulhalaman', 'DATA keyboard')

@section('konten')

	<a href="/keyboard/tambah"> + Tambah keyboard Baru</a>

	<br/>
	<br/>
    <div class="container align-center" >
        <p>Cari Data keyboard :</p>
        <form action="/keyboard/cari" method="GET">
            <input class="form-control" type="text" name="cari" placeholder="Cari keyboard .." value="{{ old('cari') }}">
            <input class="form-control btn-warning" type="submit" value="CARI">
        </form>
    </div>
	<table border="1">
		<tr border="1">
            <th border="1">No</th>
			<th border="1">Merk keyboard</th>
			<th border="1">Stock keyboard</th>
            <th border="1">Tersedia</th>

		</tr>
		@foreach($keyboard as $p)
		<tr border="1">
            <td border="1">{{ $loop->iteration }}</td>
			<td border="1">{{ $p->merkkeyboard }}</td>
			<td border="1">{{ $p->stockkeyboard }}</td>
			<td border="1">{{ $p->tersedia }}</td>

			<td border="1">
				<a href="/keyboard/detail/{{ $p->kodekeyboard  }}" class="btn btn-default btn-sm" role="button">View Detail</a>
                <a href="/keyboard/edit/{{ $p->kodekeyboard  }}" class="btn btn-default btn-sm" role="button">Edit</a>
				<a href="/keyboard/hapus/{{ $p->kodekeyboard  }}" class="btn btn-default btn-sm" role="button">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $keyboard->links()  }}

    @endsection
