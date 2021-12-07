<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AbsenController extends Controller
{
    public function index()
    {
        $absen = DB::table('absen')->get();

        return view('absen.index', ['absen' => $absen]);
    }
    // method untuk menampilkan view form tambah absen
    public function tambah()
    {
        $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get();

        // memanggil view tambah
        return view('absen.tambah', ['pegawai' => $pegawai]);
    }

    public function store(Request $request)
    {
        DB::table('absen')->insert([
            'id_pegawai' => $request->idpegawai,
            'tanggal_absen' => $request->tanggal,
            'status_absen' => $request->status
        ]);
        return redirect('/absen');
    }

    // method untuk edit data absen
    public function edit($id)
    {
        // mengambil data absen berdasarkan id yang dipilih
        $absen = DB::table('absen')->where('id_absen', $id)->get();

        $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get();

        $status = "Sedang Mengedit";

        // passing data absen yang didapat ke view edit.blade.php
        return view('absen.edit', ['absen' => $absen, 'pegawai' => $pegawai, 'status' => $status]);
    }

    public function update(Request $request)
    {
        // update data pegawai
        DB::table('absen')->where('id_absen', $request->id)->update([
            'id_pegawai' => $request->idpegawai,
            'tanggal_absen' => $request->tanggal,
            'status_absen' => $request->status
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/absen');
    }

    // method untuk hapus data pegawai
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('absen')->where('id_absen', $id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/absen');
    }
}
