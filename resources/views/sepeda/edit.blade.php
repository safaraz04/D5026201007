@extends('layout.happy')
@section('title', 'Data Sepeda')
@section('judulhalaman', 'EDIT DATA SEPEDA')


@section('konten')
	<h3>Edit Data Sepeda</h3>

	<a href="/sepeda"> Kembali</a>

	<br/>
	<br/>

	@foreach($sepeda as $p)
	<form action="/sepeda/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->kodesepeda }}"> <br/>
		Merk Sepeda <input type="text" required="required" name="merk" value="{{ $p->merksepeda }}"> <br/>
		Stock <input type="text" required="required" name="stock" value="{{ $p->stocksepeda }}"> <br/>
		Ketersediaan <input type="number" required="required" name="ketersediaan" value="{{ $p->tersedia }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
@endsection
