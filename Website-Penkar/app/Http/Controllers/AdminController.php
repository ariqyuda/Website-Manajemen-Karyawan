<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class AdminController extends Controller
{
    public function home()
    {
        $data_karyawan = DB::table('data_karyawan')->get();
        return view('admin-dashboard-home', ['data_karyawan'=>$data_karyawan]);

    }

    public function dataKaryawan()
    {
        $data_karyawan = DB::table('data_karyawan')->get();
        return view('admin-dashboard-data',['data_karyawan'=>$data_karyawan]);

    }

    public function cariDataKaryawan(Request $request)
	{
		$cari = $request->cari;
 
		$data_karyawan = DB::table('data_karyawan')
		->where('nama_karyawan','like',"%".$cari."%")
		->paginate();
 
		return view('admin-dashboard-data',['data_karyawan' => $data_karyawan]);
 
	}

    public function insertDataKaryawan(Request $request)
    {

        DB::table('data_karyawan')->insert([
            'id_karyawan'=>$request->id_karyawan,
            'nama_karyawan'=>$request->nama_karyawan,
            'jk_karyawan'=>$request->jk_karyawan,
            'tgl_lahir_karyawan'=>$request->tgl_lahir_karyawan,
            'alamat_karyawan'=>$request->alamat_karyawan,
            'no_hp_karyawan'=>$request->no_hp_karyawan
        ]);

        return back();
    }

    public function editDataKaryawan($id)
	{
		// mengambil data dosen berdasarkan id yang dipilih
		$data_karyawan = DB::table('data_karyawan')->where('id_karyawan',$id)->get();
		// passing data dosen yang didapat ke view EditDataDosen.blade.php
		return view('admin-dashboard-data-edit',['data_karyawan' => $data_karyawan]);

	}

    public function updateDataKaryawan(Request $request)
	{
        
        DB::table('data_karyawan')->where('id_karyawan',$request->id_karyawan)->update([
            'nama_karyawan'=>$request->nama_karyawan,
            'tgl_lahir_karyawan'=>$request->tgl_lahir_karyawan,
            'alamat_karyawan'=>$request->alamat_karyawan,
            'no_hp_karyawan'=>$request->no_hp_karyawan
        ]);

		return redirect('data-karyawan');
	}

    public function hapusDataKaryawan($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('data_karyawan')->where('id_karyawan',$id)->delete();
			
		// alihkan halaman ke halaman pegawai
		return redirect('data-karyawan');
	}
}
