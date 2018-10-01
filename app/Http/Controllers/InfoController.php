<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Semester;
use App\Informasi;

class InfoController extends Controller
{


    public function index()
    {
        $semesteraktif=Semester::where('status',1)->first();//CEKSEMESTER AKTIF
        $datapalingbaru=Informasi::where('kategori','Public')->orderBy('tgl_buat', 'DESC')->limit(1)->first();
        $data=Informasi::where('kategori','Public')->where('id', '!=', $datapalingbaru->id)->orderBy('tgl_buat', 'DESC')->get();
        $data2=Informasi::orderBy('tgl_buat', 'DESC')->get();
        return view('info', get_defined_vars());
    }


    public function detail($id)
    {
        $semesteraktif=Semester::where('status',1)->first();//CEKSEMESTER AKTIF
        $data = Informasi::where('id', $id)->with('user')->first();
        return view('info_detail',get_defined_vars());
    }

    public function search(Request $request)
    {
        $semesteraktif=Semester::where('status',1)->first();//CEKSEMESTER AKTIF
        $judul = $request['judul'];
        $kosong = "Data Yang Anda Cari Tidak Ada";
        $data = Informasi::where('kategori','Public')->where('judul','like','%'.$judul.'%')->orderBy('tgl_buat', 'DESC')->get();
        return view('info_result',get_defined_vars());
    }

}
