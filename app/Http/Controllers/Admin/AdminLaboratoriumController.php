<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//MODEL
use App\Semester;
use App\Laboratorium;

class AdminLaboratoriumController extends Controller
{


    public function index()
    {
        $data = Laboratorium::orderBy('kampus')->orderBy('laboratorium')->get();
        return view('admin.laboratorium.lab', get_defined_vars());
    }


    public function insert(Request $request)
    {
        $id = $request['id'];
        Laboratorium::create([
            'laboratorium' => $request['laboratorium'],
            'kampus' => $request['kampus'],
            'keterangan' => $request['keterangan']
        ]);

        return redirect()->route('admin_laboratorium')->with('status', 'Data Berhasil Ditambahkan');
    }


    public function edit(Request $request)
    {
        $id = $request['id'];

        Laboratorium::where('id',$id)->update([
            'kampus' => $request['kampus'],
            'laboratorium' => $request['laboratorium'],
            'keterangan' => $request['keterangan'],

        ]);

        return redirect()->route('admin_laboratorium')->with('status', 'Data Laboratorium Berhasil Dirubah');
    }


    public function delete(Request $request)
    {
        $id = $request['iddata'];
        Laboratorium::where('id',$id)->delete();
        return redirect()->route('admin_laboratorium')->with('status', 'Data Berhasil Dihapus');
    }



}
