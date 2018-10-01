<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pendaftaranasisten;
use App\Semester;
use App\Menu;


class PendaftaranController extends Controller
{

    public function index()
    {
        $semesteraktif=Semester::where('status',1)->first();//CEKSEMESTER AKTIF
        $cekmenuaktif=Menu::where('id',1)->first();//CEK MENU AKTIF
          if ($cekmenuaktif->status == 1) {
            return view('pendaftaran', get_defined_vars());
          }
          else {
            return view('pendaftaran_close', get_defined_vars());
          }

    }

    public function insert(Request $request)
    {
        $semesteraktif=Semester::where('status',1)->first();//CEKSEMESTER AKTIF

        $this->validate($request, [
          'nama_lengkap' => 'required',
          'photo' => 'mimes:jpeg,jpg,png|max:1500'
          // 'kode_barang'    => 'required',
          // 'kategori'    => 'required',
          // 'gudang'    => 'required',
          // 'stok'    => 'required',
          // 'satuan'    => 'required',
            ]);
        $npm = $request['npm'];
        //DEKLARASI FILE UPLOAD
        $filecv = $npm.'cv.pdf';
        $filephoto = $npm.'.jpg';
        $filesurat = $npm.'surat.pdf';
        $filenilai = $npm.'nilai.pdf';
        $request->file('cv')->storeAs('public/uploads',$filecv);
        $request->file('photo')->storeAs('public/uploads',$filephoto);
        $request->file('surat')->storeAs('public/uploads',$filesurat);
        $request->file('nilai')->storeAs('public/uploads',$filenilai);

        Pendaftaranasisten::create([
          'nama_lengkap' => $request['nama_lengkap'],
          'kelas' => $request['kelas'],
          'npm' => $request['npm'],
          'tempat_lahir' => $request['tempat_lahir'],
          'tgl_lahir' => $request['tgl_lahir'],
          'jenis_kelamin' => $request['jenis_kelamin'],
          'kewarganegaraan' => $request['kewarganegaraan'],
          'agama' => $request['agama'],
          'alamat' => $request['alamat'],
          'email' => $request['email'],
          'no_tlp' => $request['no_tlp'],
          'ipk' => $request['ipk'],
          'kemampuan' => $request['kemampuan'],
          'semester' => $semesteraktif->kode_semester,
          'foto' => $filephoto,
          'nilai' => $filenilai,
          'cv' => $filecv,
          'surat' => $filesurat


        ]);

        return redirect()->route('beranda')->with('status', 'Pendaftaran Berhasil, Info Selanjutnya Akan Dikirimkan Langsung Ke Nomor Anda');
    }




}
