<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//MODEL
use App\Semester;

class AdminSemesterController extends Controller
{


    public function index()
    {
        $data=Semester::all();
        // dd($data);
        return view('admin.semester.semester',get_defined_vars());
    }


    public function insert(Request $request)
    {
        $updateaktif=Semester::where('status',1)->update(['status'=>0]);
        $tahun_ajaran = $request['tahun_ajaran'];
            $tahun_awal = substr($tahun_ajaran, 2 , 2);
            $tahun_akhir = substr($tahun_ajaran, 7, 2);
        $semester = $request['semester'];
            if ($semester=='Ganjil') { $kode='PTA'; }
            else {$kode='ATA'; }

        Semester::create([
          'tahun_ajaran'=> $tahun_ajaran,
          'semester' => $semester,
          'kode_semester' => $kode.' '.$tahun_awal.'/'.$tahun_akhir,
          'status' => 1
      ]);

        return redirect()->route('admin_semester')->with('status', 'Semester Baru Berhasil Ditambahkan');
    }


    public function edit(Request $request)
    {
        $updateaktif=Semester::where('status',1)->update(['status'=>0]);
        $idsemester = $request['id'];

        Semester::where('id',$idsemester)->update(['status' => 1]);

        return redirect()->route('admin_semester')->with('status', 'Semester Aktif Berhasil Dirubah');
    }


    public function delete(Request $request)
    {
        $id = $request['iddata'];
        Semester::where('id',$id)->delete();
        return redirect()->route('admin_semester')->with('status', 'Data Berhasil Dihapus');
    }




}
