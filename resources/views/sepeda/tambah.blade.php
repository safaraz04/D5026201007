@extends('layout.happy')
@section('title', 'Data Sepeda')
@section('judulhalaman', 'INPUT DATA SEPEDA')

@section('konten')
	<h3>Input Data Sepeda</h3>

	<a href="/sepeda"> Kembali</a>

	<br/>
	<br/>

	<form action="/sepeda/store" method="post">
		{{ csrf_field() }}
		Merk Sepeda <input type="text" name="merk" required="required" maxlength="30"> <br/>
		Stock <input type="number" name="stock" required="required"> <br/>
		Ketersediaan
        <br>
        <input type="radio" id="a" name="ketersediaan" value="A">
        <label for="a">ADA</label><br>
        <input type="radio" id="h" name="ketersediaan" value="H" checked="checked">
        <label for="h">HABIS</label><br>
		<input type="submit" value="Simpan Data">
	</form>
@endsection
