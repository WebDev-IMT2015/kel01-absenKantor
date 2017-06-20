<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\absen;

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

   	public function absenMasuk()
   	{
   		$tanggal = date("Y-m-d");
   		$jam = date("h:i:sa");
   		$nip = $request->input('nip');
      	// if(absen::find($nip){
      	// 	if(absen::find($tanggal)){
      	// 		$absen = absen::find($tanggal);
      	// 		$absen->masuk = $jam;
      	// 		$absen->save();
      	// 	}else{
      	// 		$absen = new absen;
      	// 		$absen->masuk = $jam;
      	// 		$absen->tanggal = $tanggal;
      	// 		$absen->nip = $nip;
      	// 	}
       //  	return redirect('admin');
      	// }else{
        	$absen = new absen;
      		$absen->masuk = $jam;
      		$absen->tanggal = $tanggal;
   			$absen->nip = $nip;
   		    return redirect('admin');
      // } 
   	}

}
