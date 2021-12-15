@extends('layout.happy')
@section('title', 'Data Karyawan')



@section('konten')
	<h3>Edit Karyawan</h3>

	<a href="/karyawan"> Kembali</a>

	<br/>
	<br/>

	@foreach($karyawan1 as $p)
	<form action="/karyawan/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->nip_karyawan }}"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $p->nama_karyawan }}"> <br/>
		Pangkat <input type="text" required="required" name="pangkat" value="{{ $p->pangkat_karyawan }}"> <br/>
		Gaji <input type="text" required="required" name="gaji" class="number-separator" value="{{ $p->gaji_karyawan }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
@endsection
