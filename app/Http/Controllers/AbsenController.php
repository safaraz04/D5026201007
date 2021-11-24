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
    public function tambah()
    {
        return view('absen.tambah');
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

    public function edit($id)
    {
        $absen = DB::table('absen')->where('id_absen', $id)->get();
        return view('absen.edit', ['absen' => $absen]);
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
}
