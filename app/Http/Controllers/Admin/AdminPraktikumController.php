<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//MODEL
use App\Praktikum;
use App\Semester;
use App\Jurusan;

class AdminPraktikumController extends Controller
{


    public function index()
    {
        $data = Praktikum::with('jurusan')->orderBy('matkul')->get();
        return view('admin.praktikum.praktikum', get_defined_vars());
    }


    public function detail($id)
    {
        $data=Praktikum::where('id',$id)->with('jurusan')->first();
        return view('admin.praktikum.praktikum_detail', get_defined_vars());
    }


    public function add()
    {
        $jurusan=Jurusan::all();
        $semesteraktif = Semester::where('status',1)->first();//CEKSEMESTER AKTIF
        return view('admin.praktikum.praktikum_add', get_defined_vars());
    }


    public function insert(Request $request)
    {
        $jurusan=Jurusan::all();
        $semesteraktif=Semester::where('status',1)->first();//CEKSEMESTER AKTIF
        Praktikum::create([
            'kode_matkul'=>  $request['kode_matkul'],
            'kode_praktikum'=>  $request['kode_praktikum'],
            'matkul'=>  $request['matkul'],
            'semester'=>  $request['semester'],
            'id_jurusan'=>  $request['jurusan'],
            'tingkat'=>  $request['tingkat'],
            'aplikasi' => $request['aplikasi'],
            'materi'=>  $request['materi']
        ]);
        //Buat Notif
        $matkul = $request['matkul'];
        return redirect()->route('admin_praktikum')->with('status', 'Praktikum Mata Kuliah '. strtoupper($matkul) .' Berhasil Ditambahkan');
    }


    public function update($id)
    {
        $data=Praktikum::where('id',$id)->with('jurusan')->first();
        $jurusan=Jurusan::all();
        return view('admin.praktikum.praktikum_edit', get_defined_vars());
    }


    public function edit(Request $request)
    {
        $semesteraktif=Semester::where('status',1)->first();//CEKSEMESTER AKTIF
        $id = $request['id'];
        $matkul = $request['matkul'];
        Praktikum::where('id', $id)->update([
            'kode_matkul'=>  $request['kode_matkul'],
            'kode_praktikum'=>  $request['kode_praktikum'],
            'matkul'=>  $request['matkul'],
            'semester'=>  $request['semester'],
            'id_jurusan'=>  $request['jurusan'],
            'tingkat'=>  $request['tingkat'],
            'materi' =>  $request['materi']
        ]);

        //Buat Notif
        return redirect()->route('admin_praktikum')->with('status', 'Praktikum Mata Kuliah '. strtoupper($matkul) .' Berhasil Diupdate');
    }


    public function delete(Request $request)
    {
        $id = $request['iddata'];
        Praktikum::where('id',$id)->delete();
        return redirect()->route('admin_praktikum')->with('status', 'Data Berhasil Dihapus');
    }


}
