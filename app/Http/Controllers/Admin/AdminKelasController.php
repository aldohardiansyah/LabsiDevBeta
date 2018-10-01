<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//MODEL
use App\Semester;
use App\Jurusan;
use App\Kelas;

class AdminKelasController extends Controller
{


    public function index()
    {
        $data = Kelas::with('jurusan')->get();
        $datajurusan = Jurusan::all();
        return view('admin.kelas.kelas',get_defined_vars());
    }


    public function add(Request $request)
    {
        $datajurusan = Jurusan::all();
        return view('admin.kelas.kelas_add',get_defined_vars());
    }

    public function insert(Request $request)
    {
        $data = Kelas::create([
            'kelas' => $request['kelas'],
            'id_jurusan' => $request['jurusan'],
            'kampus' => $request['kampus']
        ]);

        return redirect()->route('admin_kelas')->with('status', 'Data Berhasil Ditambahkan');
    }

    public function edit(Request $request)
    {
        $id = $request['id'];

        $data = Kelas::where('id',$id)->update([
            'kelas' => $request['kelas'],
            'kampus' => $request['kampus']
        ]);

        return redirect()->route('admin_kelas')->with('status', 'Data Berhasil Diubah');
    }

    public function delete(Request $request)
    {
        $id = $request['iddata2'];
        Kelas::where('id',$id)->delete();
        return redirect()->route('admin_kelas')->with('status', 'Data Berhasil Dihapus');
    }



//CONTROLLER JURUSAN

    public function addJurusan(Request $request)
    {
        $data = Jurusan::create([
            'kode_jurusan' => $request['kodejurusan'],
            'jurusan' => $request['jurusan'],
            'fakultas' => $request['fakultas']
        ]);

        return redirect()->route('admin_kelas')->with('status', 'Data Berhasil Ditambahkan');
    }

    public function editJurusan(Request $request)
    {
        $id = $request['id'];

        $data = Jurusan::where('id',$id)->update([
            'kode_jurusan' => $request['kode'],
            'jurusan' => $request['jurusan'],
            'fakultas' => $request['fakultas']
        ]);

        return redirect()->route('admin_kelas')->with('status', 'Data Berhasil Diubah');
    }

    public function deleteJurusan(Request $request)
    {
        $id = $request['iddata'];
        Jurusan::where('id',$id)->delete();
        return redirect()->route('admin_kelas')->with('status', 'Data Berhasil Dihapus');
    }




}
