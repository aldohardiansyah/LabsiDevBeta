<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Semester;
use App\Jadwalpraktikum;
use App\Kelas;
class JadwalController extends Controller
{


    public function index()
    {
        $semesteraktif=Semester::where('status',1)->first();//CEKSEMESTER AKTIF
        $kosong = 'Data Yang Dicari Tidak Ada';//PESAN DATA KOSONG
        $data= Jadwalpraktikum::where('semester',$semesteraktif->kode_semester)->with('praktikum')->with('kelas')->with('laboratorium')
            ->join('kelas','kelas.id','=','jadwal_praktikum.id_kelas')
            ->select('jadwal_praktikum.*') // Avoid selecting everything from the stocks table
            ->orderBy('kelas.kelas', 'ASC')
            ->get();
        // dd($data);
        return view('jadwal', get_defined_vars());
    }

    public function jadwal_Detail($id)
    {
        $semesteraktif=Semester::where('status',1)->first();//CEKSEMESTER AKTIF
        $data= Jadwalpraktikum::where('jadwal_praktikum.id',$id)->with('praktikum')->with('kelas')->with('laboratorium')->first();
        $hari = strtolower($data->hari);

        return view('jadwal_detail', get_defined_vars());
    }

    public function search(Request $request)
    {
        $semesteraktif=Semester::where('status',1)->first();//CEKSEMESTER AKTIF
        $kelas = $request['kelas'];
        $kosong = "Data Yang Anda Cari Tidak Ada";
        $kelasok = Kelas::where('kelas','like','%'.$kelas.'%')->first();

        $data = Jadwalpraktikum::where('id_kelas', $kelasok->id)->orderBy('hari', 'DESC')->get();
        return view('jadwal_result',get_defined_vars());
    }
}
