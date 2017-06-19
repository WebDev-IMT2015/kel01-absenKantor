<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tambahPegawai;

class tambahPegawaiController extends Controller
{
   public function index()
   {
   		return view('admin_input');
   }

   public function simpan(Request $request)
   {
      $nip = $request->input('nip');
      $nama = $request->input('nama');
      $jabat = $request->input('jabat');

      if(tambahPegawai::find($nip)){
        return redirect('admin');
      }else{
        $pegawai = new tambahPegawai;
        $pegawai->nip = $nip;
        $pegawai->name = $nama;
        $pegawai->jabatan = $jabat;
        $pegawai->save();
        return redirect('admin');
    } 
    }
}
