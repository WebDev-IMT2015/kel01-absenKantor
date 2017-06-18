<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\setWaktu;

class setWaktuController extends Controller
{
    public function index()
   {
   		return view('admin_set');
   }

   public function simpan(Request $request)
   {
    	$masuk = $request->input('masuk');
    	$keluar = $request->input('keluar');
    	$waktu = new setWaktu;
    	$waktu->masuk = $masuk;
    	$waktu->keluar = $keluar;
    	$waktu->save();
    	return view('admin_set');

     //    //did($request);
   		// $id='1';
     //    $waktu = setWaktu::find($id);
     //    $waktu->masuk = $request->input('masuk');
     //    $waktu->keluar = $request->input('keluar');
     //    $waktu->save();
     //    return view('admin_set');
    }
}
