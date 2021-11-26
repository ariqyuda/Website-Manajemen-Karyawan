<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{

    public function datakaryawan()
    {
        $data_karyawan = DB::table('data_karyawan')->get();
        return view('karyawan-dashboard-data',['data_karyawan'=>$data_karyawan]);

    }

    public function cariData(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table siswa sesuai pencarian data
		$data_karyawan = DB::table('data_karyawan')
		->where('nama_karyawan','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data siswa ke view showdata
		return view('karyawan-dashboard-data',['data_karyawan' => $data_karyawan]);
 
	}

}

