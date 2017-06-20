<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tambahPegawai;
use App\absen;

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

    public function indexView()
    {
      $t=tambahPegawai::all();
      return view('admin_list')->with(compact('t'));
      //return view('admin_list');
    }

    public function hapus($nip){
        $t = tambahPegawai::find($nip);
        $t->delete();
        return redirect('admin');
    }

    public function edit($nip){
        $t=tambahPegawai::all();
        $t_edit = tambahPegawai::find($nip);
        return view('admin_list')->with(compact('t'))->with(compact('t_edit'));
    }

    public function update(Request $request){
        $nip = $request->input('nip');
        $nama = $request->input('nama');
        $jabat = $request->input('jabat');
        $pegawai = tambahPegawai::find($nip);
        $pegawai->name = $nama;
        $pegawai->jabatan = $jabat;
        $pegawai->save();

        return redirect('admin');
    }
}
