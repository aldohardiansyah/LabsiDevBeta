<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//MODEL
use App\Semester;
use App\Aktivitas;
use App\Jadwalpraktikum;
use App\Informasi;
use Carbon\Carbon;

class AdminDashboardController extends Controller
{


    public function index()
    {   $semesteraktif=Semester::where('status',1)->first();//CEKSEMESTER AKTIF
        $kosong = 'Data Kosong';//PESAN DATA KOSONG
        $hari_en = Carbon::now()->format('l');//CEKHARI
            //CONVERTERHARI
            if ($hari_en=='Sunday') { $hari='Minggu'; }
            elseif ($hari_en=='Monday') { $hari='Senin'; }
            elseif ($hari_en=='Tuesday') { $hari='Selasa'; }
            elseif ($hari_en=='Wednesday') { $hari='Rabu'; }
            elseif ($hari_en=='Thursday') { $hari='Kamis'; }
            elseif ($hari_en=='Friday') { $hari='Jumat'; }
            else { $hari='Sabtu'; }

        //DATA JADWAL PRAKTIKUM
        $data= Jadwalpraktikum::where('semester',$semesteraktif->kode_semester)->where('hari', $hari)
            ->with('praktikum')->with('kelas')->with('laboratorium')
            ->join('kelas','kelas.id','=','jadwal_praktikum.id_kelas')
            ->select('jadwal_praktikum.*') // Avoid selecting everything from the stocks table
            ->orderBy('kelas.kelas', 'ASC')
            ->get();
        // dd($data);

        //DATA INFORMASI
        $datainformasi= Informasi::orderBy('tgl_buat', 'DESC')->limit(5)->get();


        //DATA AKTIVITAS
        $aktivitas=Aktivitas::orderBy('created_at', 'DESC')->limit(20)->get();


        return view('admin.dashboard', get_defined_vars());
    }



}
