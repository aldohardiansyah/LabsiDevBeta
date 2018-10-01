<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//MODEL
use App\Semester;
use App\Jadwalasisten;
use App\Jadwalpraktikum;
use App\Isianjadwalasisten;
use App\Jurusan;


class AdminJadwalAsistenController extends Controller
{


    public function index()
    {
        $semesteraktif=Semester::where('status',1)->first();//CEKSEMESTER AKTIF
        $kosong = 'Data Kosong';//PESAN DATA KOSONG
        $data = Jadwalasisten::where('semester',$semesteraktif->kode_semester)->with('jadwalpraktikum')->with('asisten')->orderBy('id_jadwalpraktikum')->orderBy('jabatan_tugas', 'DESC')->get();
        return view('admin.jadwalasisten.jadwalasisten',get_defined_vars());
    }

    public function add()
    {
        $semesteraktif=Semester::where('status',1)->first();//CEKSEMESTER AKTIF
        $data= Jadwalpraktikum::where('semester',$semesteraktif->kode_semester)->with('praktikum')->with('kelas')->with('laboratorium')
            ->join('kelas','kelas.id','=','jadwal_praktikum.id_kelas')
            ->select('jadwal_praktikum.*') // Avoid selecting everything from the stocks table
            ->orderBy('kelas.kelas', 'ASC')
            ->get();
        return view('admin.jadwalasisten.jadwalasisten_add', get_defined_vars());
    }

    public function add_detail1($id)
    {
        $semesteraktif=Semester::where('status',1)->first();//CEKSEMESTER AKTIF
        $data= Jadwalpraktikum::where('jadwal_praktikum.id',$id)->with('praktikum')->with('kelas')->with('laboratorium')->first();
        $hari = strtolower($data->hari);
        $shift = $data->shift;
            $pj = Isianjadwalasisten::where($hari,'like','%'.$shift.'%')->where('jabatan','PJ Shift')->get();
            $ketua = Isianjadwalasisten::where($hari,'like','%'.$shift.'%')->where('jabatan','Ketua Asisten')->get();
            $asisten = Isianjadwalasisten::where($hari,'like','%'.$shift.'%')->where('jabatan','Asisten')->get();
        return view('admin.jadwalasisten.jadwalasisten_add_detail1', get_defined_vars());
    }

    public function add_detail2($id)
    {
        $semesteraktif=Semester::where('status',1)->first();//CEKSEMESTER AKTIF
        $data= Jadwalpraktikum::where('jadwal_praktikum.id',$id)->with('praktikum')->with('kelas')->with('laboratorium')->first();
        $hari = strtolower($data->hari);
        $shift = $data->shift;
            $pj = Isianjadwalasisten::where($hari,'like','%'.$shift.'%')->where('jabatan','PJ Shift')->get();
            $ketua = Isianjadwalasisten::where($hari,'like','%'.$shift.'%')->where('jabatan','Ketua Asisten')->get();
            $asisten = Isianjadwalasisten::where($hari,'like','%'.$shift.'%')->where('jabatan','Asisten')->get();
        return view('admin.jadwalasisten.jadwalasisten_add_detail2', get_defined_vars());
    }


    public function insert_1(Request $request)
    {
        $jurusan=Jurusan::all();
        $semesteraktif=Semester::where('status',1)->first();//CEKSEMESTER AKTIF
        //INSERT PJ
        Jadwalasisten::create([
            'id_jadwalpraktikum'=>  $request['id_jadwalpraktikum'],
            'id_asisten'=>  $request['pjshift'],
            'jabatan_tugas'=>  'PJ Shift',
            'semester' => $semesteraktif->kode_semester
        ]);
        //INSERT KETUA
        Jadwalasisten::create([
            'id_jadwalpraktikum'=>  $request['id_jadwalpraktikum'],
            'id_asisten'=>  $request['ketuaasisten'],
            'jabatan_tugas'=>  'Ketua',
            'semester' => $semesteraktif->kode_semester
        ]);
        //INSERT ASISTEN
        Jadwalasisten::create([
            'id_jadwalpraktikum'=>  $request['id_jadwalpraktikum'],
            'id_asisten'=>  $request['asisten1'],
            'jabatan_tugas'=>  'Asisten',
            'semester' => $semesteraktif->kode_semester
        ]);
        //INSERT ASISTEN 2
        Jadwalasisten::create([
                    'id_jadwalpraktikum'=>  $request['id_jadwalpraktikum'],
                    'id_asisten'=>  $request['asisten2'],
                    'jabatan_tugas'=>  'Asisten',
                    'semester' => $semesteraktif->kode_semester
        ]);

        return redirect()->route('admin_jadwalasisten')->with('status', 'Jadwal Asisten Berhasil Ditambahkan');
    }


    public function insert_2(Request $request)
    {
        $jurusan=Jurusan::all();
        $semesteraktif=Semester::where('status',1)->first();//CEKSEMESTER AKTIF
        //INSERT PJ
        Jadwalasisten::create([
            'id_jadwalpraktikum'=>  $request['id_jadwalpraktikum'],
            'id_asisten'=>  $request['pjshift'],
            'jabatan_tugas'=>  'PJ Shift',
            'semester' => $semesteraktif->kode_semester
        ]);
        //INSERT KETUA
        Jadwalasisten::create([
            'id_jadwalpraktikum'=>  $request['id_jadwalpraktikum'],
            'id_asisten'=>  $request['ketuaasisten'],
            'jabatan_tugas'=>  'Ketua',
            'semester' => $semesteraktif->kode_semester
        ]);
        //INSERT ASISTEN
        Jadwalasisten::create([
            'id_jadwalpraktikum'=>  $request['id_jadwalpraktikum'],
            'id_asisten'=>  $request['asisten1'],
            'jabatan_tugas'=>  'Asisten',
            'semester' => $semesteraktif->kode_semester
        ]);
        //INSERT ASISTEN 2
        Jadwalasisten::create([
                    'id_jadwalpraktikum'=>  $request['id_jadwalpraktikum'],
                    'id_asisten'=>  $request['asisten2'],
                    'jabatan_tugas'=>  'Asisten',
                    'semester' => $semesteraktif->kode_semester
        ]);
        //INSERT ASISTEN 3
        Jadwalasisten::create([
                    'id_jadwalpraktikum'=>  $request['id_jadwalpraktikum'],
                    'id_asisten'=>  $request['asisten3'],
                    'jabatan_tugas'=>  'Asisten',
                    'semester' => $semesteraktif->kode_semester
        ]);
        //INSERT ASISTEN 4
        Jadwalasisten::create([
                    'id_jadwalpraktikum'=>  $request['id_jadwalpraktikum'],
                    'id_asisten'=>  $request['asisten4'],
                    'jabatan_tugas'=>  'Asisten',
                    'semester' => $semesteraktif->kode_semester
        ]);

        //INSERT ASISTEN 5
        Jadwalasisten::create([
                    'id_jadwalpraktikum'=>  $request['id_jadwalpraktikum'],
                    'id_asisten'=>  $request['asisten5'],
                    'jabatan_tugas'=>  'Asisten',
                    'semester' => $semesteraktif->kode_semester
        ]);

        return redirect()->route('admin_jadwalasisten')->with('status', 'Jadwal Asisten Berhasil Ditambahkan');
    }


    public function delete(Request $request)
    {
        $id = $request['iddata'];
        Jadwalasisten::where('id',$id)->delete();
        return redirect()->route('admin_jadwalasisten')->with('status', 'Data Berhasil Dihapus');
    }



}
