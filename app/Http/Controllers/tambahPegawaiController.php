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

   public function indexAdmin()
   {
      $var = 0;
      $berhasil = 0;
      return view('admin')->with(compact('var'))->with(compact('berhasil'));
   }

   public function simpan(Request $request)
   {
      $nip = $request->input('nip');
      $nama = $request->input('nama');
      $jabat = $request->input('jabat');
      $var = 1;
      $berhasil = 0;
      if(tambahPegawai::find($nip)){
        
        return redirect('admin')->with(compact('var'))->with(compact('berhasil'));
      }else{
        $pegawai = new tambahPegawai;
        $pegawai->nip = $nip;
        $pegawai->name = $nama;
        $pegawai->jabatan = $jabat;
        $pegawai->save();
        $berhasil = 1;
        return redirect('admin')->with(compact('var'))->with(compact('berhasil'));
      } 
    }

    public function indexView()
    {
      $t=tambahPegawai::all();
      return view('admin_list')->with(compact('t'));
      //return view('admin_list');
    }

    public function hapus(Request $request, tambahPegawai $t){
        $t->delete();
        return redirect('admin_list')->with(compact('t'));
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
