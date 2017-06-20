<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\absen;
use App\tambahPegawai;

class absenController extends Controller
{
    public function indexMasuk()
   	{
        return view('absen_masuk');
   	}

   	public function indexKeluar()
   	{
        return view('absen_keluar');
   	}

   	public function indexMulai()
   	{
        return view('absen_istirahat_mulai');
   	}

   	public function indexSelesai()
   	{
        return view('absen_istirahat_selesai');
   	}

   	public function absenMasuk(Request $request)
   	{
      $nip = $request->input('nip');
      if (tambahPegawai::find($nip)) {
          $absen = new absen;
          $absen->masuk = date('Y-m-d H:i:s');
          $absen->keluar = null;
          $absen->istirahat_mulai = null;
          $absen->istirahat_selesai = null;
          $absen->tanggal = date("Y-m-d");

          $absen->nip = $nip;
          $absen->save();
          return redirect('/');
      }
      else
      {
        return redirect('/');
      }
   		
   	}

    public function absenKeluar(Request $request)
    {
      $nip = $request->input('nip');
      if (tambahPegawai::find($nip)) {
        
          $absen = new absen;
          $absen->masuk = null;
          $absen->keluar = date('Y-m-d H:i:s');
          $absen->istirahat_mulai = null;
          $absen->istirahat_selesai = null;
          $absen->tanggal = date("Y-m-d");

          $absen->nip = $nip;
          $absen->save();
          return redirect('/');
      }
      else
      {
        return redirect('/');
      }
      // } 
    }

    public function absenMulai(Request $request)
    {
      $nip = $request->input('nip');
      if (tambahPegawai::find($nip)) {
        $absen = new absen;
          $absen->masuk = null;
          $absen->keluar = null;
          $absen->istirahat_mulai = date('Y-m-d H:i:s');
          $absen->istirahat_selesai = null;
          $absen->tanggal = date("Y-m-d");

          $absen->nip = $nip;
          $absen->save();
          return redirect('/');
      }
      else
      {
        return redirect('/');
      }
          
      // } 
    }

    public function absenSelesai(Request $request)
    {
      $nip = $request->input('nip');
      if (tambahPegawai::find($nip)) {
        $absen = new absen;
          $absen->masuk = null;
          $absen->keluar = null;
          $absen->istirahat_mulai = null;
          $absen->istirahat_selesai = date('Y-m-d H:i:s');
          $absen->tanggal = date("Y-m-d");

          $absen->nip = $nip;
          $absen->save();
          return redirect('/');
      }
      else
      {
        return redirect('/');
      }
          
      // } 
    }


}
