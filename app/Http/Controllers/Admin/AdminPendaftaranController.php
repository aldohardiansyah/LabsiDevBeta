<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

//MODEL
use App\Pendaftaranasisten;
use App\Semester;
use App\User;
use App\Asisten;

use Carbon\Carbon;

class AdminPendaftaranController extends Controller
{


    public function index()
    {   $semesteraktif=Semester::where('status',1)->first();//CEKSEMESTER AKTIF
        $kosong = "Data Kosong";
        $data=Pendaftaranasisten::where('semester',$semesteraktif->kode_semester)->orderBy('status')->orderBy('nama_lengkap')->get();
        return view('admin.pendaftaran.pendaftaranasisten',get_defined_vars());
    }


    public function detail($id)
    {   $semesteraktif=Semester::where('status',1)->first();//CEKSEMESTER AKTIF
        $data=Pendaftaranasisten::where('id',$id)->first();
        return view('admin.pendaftaran.pendaftaranasisten_detail',get_defined_vars());
    }


    public function detail2($id)
    {   $semesteraktif=Semester::where('status',1)->first();//CEKSEMESTER AKTIF
        $data=Pendaftaranasisten::where('id',$id)->first();
        return view('admin.pendaftaran.pendaftaranasisten_detail2',get_defined_vars());
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


    public function reject($id)
    {   $semesteraktif=Semester::where('status',1)->first();//CEKSEMESTER AKTIF
        $data=Pendaftaranasisten::where('id',$id)->first();
        Pendaftaranasisten::where('id',$id)->update(['status' => 'Tidak Diterima']);
        return redirect()->route('admin_pendaftaran')->with('status', 'Calon asisten dengan nama '.strtoupper($data->nama_lengkap).' Dinyatakan : Tidak Diterima');
    }


    public function accept($id)
    {   $semesteraktif=Semester::where('status',1)->first();//CEKSEMESTER AKTIF
        $data=Pendaftaranasisten::where('id',$id)->first();
        $dataUser = User::create([
                        'name' => $data->nama_lengkap,
                        'username' => $data->npm,
                        'role' => 'Asisten',
                        'npm' => $data->npm,
                        'password' => Hash::make($data->npm),
                        'ava' => $data->foto
                    ]);

        Asisten::create([
          'id_user'=> $dataUser->id,
          'nama_lengkap' => $data->nama_lengkap,
          'kelas' => strtoupper($data->kelas),
          'npm' => strtoupper($data->npm),
          'jabatan' => 'Asisten',
          'tempat_lahir' => $data->tempat_lahir,
          'tgl_lahir' => $data->tgl_lahir,
          // 'jenis_id' => $data->jenis_id,
          // 'no_id' => $data->no_id,
          'jenis_kelamin' => $data->jenis_kelamin,
          'kewarganegaraan' => $data->kewarganegaraan,
          'agama' => $data->agama,
          'alamat' => $data->alamat,
          'email' => $data->email,
          'no_tlp' => $data->no_tlp,
          'ipk' => $data->ipk,
          'kemampuan' => $data->kemampuan,
          'semester' => $semesteraktif->kode_semester,
          'foto' => $data->foto,
          'nilai' => $data->nilai,
          'cv' => $data->cv,
          'surat' => $data->surat,
          'status' => 1,
          'created_at' => Carbon::now()

        ]);

        Pendaftaranasisten::where('id',$id)->update(['status'=>'Diterima']);

        return redirect()->route('admin_pendaftaran')->with('status', 'Calon asisten dengan nama '. strtoupper($data->nama_lengkap).' Dinyatakan : Diterima');
    }


}
