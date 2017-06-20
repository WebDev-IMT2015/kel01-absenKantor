<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\setWaktu;


class setWaktuController extends Controller
{
    public function index()
   	{
        $t = setWaktu::all();
        return view('admin_set')->with(compact('t'));
   	}

   	public function simpan(Request $request)
   {
        if(setWaktu::find('1')){
        	$db = setWaktu::find('1');
        	$db->masuk = $request->input('masuk');
            $db->keluar = $request->input('keluar');
            $db->mulai = $request->input('mulai');
            $db->selesai = $request->input('selesai');
            $db->toleransi = $request->input('toleransi');
        	$db->save();
        	return view('admin')->with('admin' , $todo);
        }else{
        	$masuk = $request->input('masuk');
        	$keluar = $request->input('keluar');
        	$mulai = $request->input('mulai');
    	    $selesai = $request->input('selesai');
        	$toleransi = $request->input('toleransi');
        	$waktu = new setWaktu;
        	$waktu->masuk = $masuk;
        	$waktu->keluar = $keluar;
        	$waktu->istirahat_mulai = $mulai;
        	$waktu->istirahat_selesai = $selesai;
        	$waktu->toleransi = $toleransi;
        	$waktu->save();
        	return view('admin');
        }
        
        
    }

}
