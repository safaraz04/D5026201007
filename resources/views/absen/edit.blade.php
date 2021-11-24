<html>
<head>
	<title>Absensi Pegawai</title>
</head>
<body>

	<h3>Edit Absensi</h3>

	<a href="/absen"> Kembali</a>

	<br/>
	<br/>

	@foreach($absen as $p)
	<form action="/absen/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->id_absen }}"> <br/>
		IDPegawai <input type="text" name="idpegawai" required="required"> <br/>
		Tanggal <input type="datetime-local" name="tanggal" required="required"> <br/>
		Status <input type="text" name="status" maxlength="1" required="required"><br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
