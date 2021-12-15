<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KaryawanController extends Controller
{
    public function index()
    {
        // mengambil data dari table pegawai
        $karyawan = DB::table('karyawan1')->get();


        // mengirim data pegawai ke view index
        return view('karyawan.index', ['karyawan1' => $karyawan]);
    }

    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $karyawan = DB::table('karyawan1')->where('nip_karyawan', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('karyawan.edit', ['karyawan1' => $karyawan]);
    }

    public function update(Request $request)
    {
        // update data pegawai
        DB::table('karyawan1')->where('nip_karyawan', $request->id)->update([
            'nama_karyawan' => $request->nama,
            'pangkat_karyawan' => $request->pangkat,
            'gaji_karyawan' => $request->gaji
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/karyawan');
    }


   public function view($id)
   {
    $karyawan = DB::table('karyawan1')->where('nip_karyawan', $id)->get();

    return view('karyawan.view', ['karyawan1' => $karyawan]);
   }

}
