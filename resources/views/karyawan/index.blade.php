@extends('layout.happy')
@section('title', 'Data Karyawan')

@section('konten')

	<h3>Data Karyawan</h3>

	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>NIP Karyawan</th>
			<th>Nama</th>
			<th>Pangkat</th>
			<th>Gaji</th>
            <th>Opsi</th>
		</tr>
		@foreach($karyawan1 as $p)
		<tr>
			<td>{{ $p->nip_karyawan }}</td>
			<td>{{ $p->nama_karyawan }}</td>
			<td>{{ $p->pangkat_karyawan }}</td>
            <td class="number-separator">{{ $p->gaji_karyawan }} </td>
			<td>
				<a href="/karyawan/edit/{{ $p->nip_karyawan }}">Edit</a>
				|
				<a href="/karyawan/view/{{ $p->nip_karyawan }}">View</a>
			</td>
		</tr>
		@endforeach
	</table>


@endsection
