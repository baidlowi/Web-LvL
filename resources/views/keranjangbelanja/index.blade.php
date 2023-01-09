@extends('layout.happy')
@section('title', 'Data keranjang belanja')
@section('judulhalaman', 'DATA keranjang belanja')

@section('konten')

	<a href="/keranjangbelanja/tambah"> + Tambah keranjang belanja Baru</a>

	<br/>
	<br/>

	<table class="table table-bordered table-sm">
		<thead>
            <tr >
                <th >Kode Pembelian</th>
                <th >Kode Barang</th>
                <th >Jumlah Pembelian</th>
                <th >Harga per item</th>
                <th >Total</th>
                <th >Action</th>
            </tr>
        </thead>
		@foreach($keranjangbelanja as $p)
        <thead>
            <tr >
                <td >{{ $loop->iteration }}</td>
                <td >{{ $p->KodeBarang }}</td>
                <td >{{ $p->Jumlah }}</td>
                <td >{{ number_format($p->Harga, 0, ',', '.') }}</td>
                <td >{{ number_format($p->Jumlah * $p->Harga, 0, ',', '.') }}</td>

                <td >
                    <a href="" class="btn btn-primary btn-sm" role="button">Beli</a>
                    <a href="/keranjangbelanja/hapus/{{ $p->ID  }}" class="btn btn-danger btn-sm" role="button">Batal</a>
                </td>
            </tr>
        </thead>
		@endforeach
	</table>

    @endsection
