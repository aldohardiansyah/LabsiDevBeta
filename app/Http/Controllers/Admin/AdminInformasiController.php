<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
//MODEL
use App\Semester;
use App\Users;
use App\Informasi;

class AdminInformasiController extends Controller
{


    public function index()
    {   $semesteraktif=Semester::where('status',1)->first();//CEKSEMESTER AKTIF
        $data=Informasi::all();
        return view('admin.informasi.info',get_defined_vars());
    }


    public function add()
    {   $semesteraktif=Semester::where('status',1)->first();//CEKSEMESTER AKTIF
        return view('admin.informasi.info_add',get_defined_vars());
    }


    public function detail($id)
    {   $semesteraktif=Semester::where('status',1)->first();//CEKSEMESTER AKTIF
        $data = Informasi::where('id', $id)->with('user')->first();
        return view('admin.informasi.info_detail',get_defined_vars());
    }


    public function insert(Request $request)
    {   $semesteraktif=Semester::where('status',1)->first();//CEKSEMESTER AKTIF

        $id = Auth::user()->id;
        $isi = $request['isi'];

        if ($request['photo'])
        {
            $filephoto = 'info'.$id.'.jpg';
            $request->file('photo')->storeAs('public/uploads',$filephoto);
        }
        else {
            $filephoto = 'info.jpg';
        }

        Informasi::create([
          'judul' => $request['judul'],
          'photo' => $filephoto,
          'slug' => substr($isi,0,150),
          'kategori' => $request['kategori'],
          'isi' => $request['isi'],
          'id_user' => $id ]);

        return redirect()->route('admin_informasi')->with('status', 'Informasi Baru Berhasil Ditambahkan');
    }


    public function delete(Request $request)
    {
        $id = $request['iddata'];
        $idlogin = Informasi::where('id',$id)->first();
        Informasi::where('id',$id)->delete();

        return redirect()->route('admin_informasi')->with('status', 'Data Berhasil Dihapus');
    }

}
