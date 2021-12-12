@extends('layout.happy')
@section('title', 'Data Sepeda')



@section('konten')

	<h3>Data Sepeda</h3>

	<a href="/sepeda/tambah"> + Tambah Data Sepeda Baru</a>

	<br/>
	<br/>

    <p>Cari Data Sepeda :</p>
	<form action="/sepeda/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Merk Sepeda .." value="{{ old('cari') }}">
		<input type="submit" value="CARI">
	</form>
    <br>

	<table border="1">
		<tr>
			<th>Merk Sepeda</th>
			<th>Stock</th>
			<th>Ketersediaan</th>
            <th>Opsi</th>
		</tr>
		@foreach($sepeda as $p)
		<tr>
			<td>{{ $p->merksepeda }}</td>
			<td>{{ $p->stocksepeda }}</td>
			<td>{{ $p->tersedia }}</td>
			<td>
				<a href="/sepeda/edit/{{ $p->kodesepeda }}">Edit</a>
				|
				<a href="/sepeda/hapus/{{ $p->kodesepeda }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    <br/>
	Halaman : {{ $sepeda->currentPage() }} <br/>
	Jumlah Data : {{ $sepeda->total() }} <br/>
	Data Per Halaman : {{ $sepeda->perPage() }} <br/>


	{{ $sepeda->links() }}



@endsection
