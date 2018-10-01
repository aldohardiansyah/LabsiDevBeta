<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//MODEL
use App\Semester;
use App\Jadwalpraktikum;
use App\Jadwalasisten;
use App\Praktikum;
use App\Kelas;
use App\Laboratorium;

class AdminJadwalPraktikumController extends Controller
{


    public function index()
    {
        $semesteraktif=Semester::where('status',1)->first();//CEKSEMESTER AKTIF
        $kosong = 'Data Kosong';//PESAN DATA KOSONG
        $data= Jadwalpraktikum::where('semester',$semesteraktif->kode_semester)->with('praktikum')->with('kelas')->with('laboratorium')
            ->join('kelas','kelas.id','=','jadwal_praktikum.id_kelas')
            ->select('jadwal_praktikum.*') // Avoid selecting everything from the stocks table
            ->orderBy('kelas.kelas', 'ASC')
            ->get();
        // dd($data);
        return view('admin.jadwalpraktikum.jadwalpraktikum', get_defined_vars());
    }

    public function add()
    {
        $semesteraktif = Semester::where('status',1)->first();//CEKSEMESTER AKTIF
        $datapraktikum = Praktikum::all();
        $datakelas = Kelas::all();
        $datalaboratorium = Laboratorium::all();
        // dd($data);
        return view('admin.jadwalpraktikum.jadwalpraktikum_add', get_defined_vars());
    }

    public function insert(Request $request)
    {
        $semesteraktif = Semester::where('status',1)->first();//CEKSEMESTER AKTIF

        $jadwal_praktikum = Jadwalpraktikum::create([
                                    'id_praktikum' => $request['id_praktikum'],
                                    'id_kelas' => $request['id_kelas'],
                                    'id_lab' => $request['id_lab'],
                                    'hari' => $request['hari'],
                                    'shift' => $request['shift'],
                                    'jam_mulai' => $request['jam_mulai'],
                                    'jam_selesai' => $request['jam_selesai'],
                                    'semester' => $semesteraktif->kode_semester
                                ]);
        return redirect()->route('admin_jadwalpraktikum')->with('status', 'Jadwal Praktikum Baru Berhasil Ditambahkan');
    }


    public function delete(Request $request)
    {
        $id = $request['iddata'];
        Jadwalpraktikum::where('id',$id)->delete();
        Jadwalasisten::where('id_jadwalpraktikum', $id)->delete();
        return redirect()->route('admin_jadwalpraktikum')->with('status', 'Data Berhasil Dihapus');
    }



}
