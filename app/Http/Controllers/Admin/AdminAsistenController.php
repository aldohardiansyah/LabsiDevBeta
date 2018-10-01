<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

//MODEL
use App\Semester;
use App\Asisten;
use App\Jadwalasisten;
use App\User;
use App\Catatan;
use App\Resign;

class AdminAsistenController extends Controller
{


    public function index()
    {   $semesteraktif=Semester::where('status',1)->first();//CEKSEMESTER AKTIF
        $data = Asisten::where('status', 1)->orderBy('nama_lengkap')->get();
        return view('admin.asisten.asisten',get_defined_vars());
    }


    public function detail($id)
    {
        $data = Asisten::where('id', $id)->first();
        return view('admin.asisten.asisten_detail',get_defined_vars());
    }
    public function detail_resign($id)
    {
        $data = Asisten::where('id_user', $id)->first();
        return view('admin.asisten.asisten_detail',get_defined_vars());
    }


    public function getDownloadcv($npm)
    {
        $filename = $npm."cv.pdf";
        return response()->download(storage_path("app/public/uploads/".$filename));
    }
    public function getDownloadsurat($npm)
    {
        $filename = $npm."surat.pdf";
        return response()->download(storage_path("app/public/uploads/".$filename));
    }
    public function getDownloadnilai($npm)
    {
        $filename = $npm."nilai.pdf";
        return response()->download(storage_path("app/public/uploads/".$filename));
    }


    public function edit(Request $request)
    {
        $id = $request['id'];
        $nama = $request['nama_lengkap'];
        $jabatan = $request['jabatan'];
        $password = $request['password'];

            if ($jabatan == "PJ Shift") {
              $role = "PJ Shift";
            }
            else {
              $role = "Asisten";
            }
        Asisten::where('id',$id)->update(['jabatan' => $request['jabatan']]);
        $dataasisten = Asisten::where('id',$id)->first();
        if ($password)
        {
        User::where('id',$dataasisten->id_user)->update(['password' => Hash::make($password)]);
        }

        $getAsisten =  Asisten::where('id',$id)->first();
        $setrple = User::where('id', $getAsisten->id_user)->update(['role' => $role]);
        return redirect()->route('admin_asisten')->with('status', 'Update Data Berhasil, '. strtoupper($nama) .' sekarang adalah '. strtoupper($jabatan));
    }

    public function delete(Request $request)
    {
        $id = $request['iddata'];
        $idlogin = Asisten::where('id',$id)->first();
        Asisten::where('id',$id)->delete();
        User::where('id', $idlogin->id_user)->delete();
        Jadwalasisten::where('id_asisten',$id)->delete();
        Catatan::where('id_asisten',$id)->delete();

        return redirect()->route('admin_asisten')->with('status', 'Data Berhasil Dihapus');
    }


    public function resign()
    {
        $asistenresign = Resign::with('asisten')->get();
        return view('admin.asisten.asisten_resign',get_defined_vars());
    }

    public function revoke(Request $request)
    {
        $id = $request['iddata'];
        User::where('id', $id)->update(['password' => 'Akses Dicabut']);
        Asisten::where('id_user',$id)->update(['status' => 0]);
        return  redirect()->route('admin_asisten.resign')->with('status', 'Akun Berhasil di Revoke');
    }

}
