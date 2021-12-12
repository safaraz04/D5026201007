@extends('layout.happy')
@section('title', 'Data Absen')

@section('konten')

	<h3>Data Absensi Pegawai</h3>

	<a href="/absen/tambah"> + Tambah Absen Baru</a>

	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>IDPegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($absen as $p)
		<tr>
			<td>{{ $p->id_pegawai }}</td>
			<td>{{ $p->tanggal_absen }}</td>
			<td>{{ $p->status_absen }}</td>
			<td>
				<a href="/absen/edit/{{ $p->id_absen }}">Edit</a>
				|
				<a href="/absen/hapus/{{ $p->id_absen }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


@endsection
