@extends('layout.happy')
@section('title', 'Data Karyawan')

@section('konten')

    <h3>Data Karyawan</h3>

    <a href="/karyawan"> Kembali</a>
    <br>
    <br>
    <table border="1">
        <tr>
            <th>NIP Karyawan</th>
            <th>Nama</th>
            <th>Pangkat</th>
            <th>Gaji</th>

        </tr>
        @foreach($karyawan1 as $p)
        <tr>
            <td>{{ $p->nip_karyawan }}</td>
            <td>{{ $p->nama_karyawan }}</td>
            <td>{{ $p->pangkat_karyawan }}</td>
            <td>{{ $p->gaji_karyawan }}</td>
        </tr>
        @endforeach
    </table>
@endsection
