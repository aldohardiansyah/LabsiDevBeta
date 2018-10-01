<?php

namespace App\Http\Controllers\Asisten;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Carbon\Carbon;
use App\Semester;
use App\Asisten;
use App\Jadwalasisten;
use App\Jadwalpraktikum;
use App\Informasi;
use App\Isianjadwalasisten;
use App\Menu;

class AsistenDashboardController extends Controller
{


    public function index()
    {   $data = Asisten::where('id_user', Auth::user()->id)->first();
        $kosong = 'Data Kosong';//PESAN DATA KOSONG
        $asisten = Asisten::where('id_user', Auth::user()->id)->first();//AMBIL DATA ASISTEN
        $tanggal = Carbon::now()->format('d F Y'); // CEK TANGGAL
        $hari_en = Carbon::now()->format('l');//CEKHARI
            //CONVERTERHARI
            if ($hari_en=='Sunday') { $hari='Minggu'; }
            elseif ($hari_en=='Monday') { $hari='Senin'; }
            elseif ($hari_en=='Tuesday') { $hari='Selasa'; }
            elseif ($hari_en=='Wednesday') { $hari='Rabu'; }
            elseif ($hari_en=='Thursday') { $hari='Kamis'; }
            elseif ($hari_en=='Friday') { $hari='Jumat'; }
            else { $hari='Sabtu'; }
        $jadwalasisten = Jadwalasisten::where('id_asisten', $asisten->id)->with('jadwalpraktikum')->get();
        $informasi = Informasi::where('kategori', 'Asisten')->get();
        $cekmenu_daftarulang = Menu::where('id',2)->first(); //ID 2 Adalah Untuk Menu Daftar Ulang Asisten
        return view('asisten.dashboard', get_defined_vars());
    }


    public function isianjadwal()
    {
        $semesteraktif = Semester::where('status',1)->first();//CEKSEMESTER AKTIF
        $data = Asisten::where('id_user', Auth::user()->id)->first();
        $cekmenu_daftarulang = Menu::where('id',2)->first(); //ID 2 Adalah Untuk Menu Daftar Ulang Asisten
        $cekisianjadwal = Isianjadwalasisten::where('id_asisten', $data->id)->first();
        if ($cekmenu_daftarulang->status == 1) {
            if ($cekisianjadwal)
            {
                return redirect()->route('asisten_dashboard')->with('status', 'Anda Sudah Input Data !');
            }
            else
            {
                return view('asisten.isianjadwal', get_defined_vars());
            }
        }
        else {
          return view('asisten.isianjadwal_close', get_defined_vars());
        }

    }

    public function isianjadwalinsert(Request $request)
    {
        $semesteraktif = Semester::where('status',1)->first();//CEKSEMESTER AKTIF
        $asisten = Asisten::where('id_user', Auth::user()->id)->first();//AMBIL DATA ASISTEN
        Isianjadwalasisten::create([
            'senin'=>  $request['senin'],
            'selasa'=>  $request['selasa'],
            'rabu'=>  $request['rabu'],
            'kamis'=>  $request['kamis'],
            'jumat'=>  $request['jumat'],
            'sabtu'=>  $request['sabtu'],
            'minggu'=>  $request['minggu'],
            'id_asisten'=>  $asisten->id,
            'nama_lengkap'=>  $asisten->nama_lengkap,
            'jabatan' =>  $asisten->jabatan,
            'semester' => $semesteraktif->kode_semester
        ]);
        //Buat Notif
        return redirect()->route('asisten_dashboard')->with('status', 'Berkas Isian Jadwal Praktikum Periode '. $semesteraktif->semester .' Anda Berhasil Diinput');
    }

    public function jadwal_Detail($id)
    {
        $kosong = "Data Tidak Ada";
        $semesteraktif=Semester::where('status',1)->first();//CEKSEMESTER AKTIF
        $data= Jadwalpraktikum::where('jadwal_praktikum.id',$id)->with('praktikum')->with('kelas')->with('laboratorium')->first();
        $dataasisten = Jadwalasisten::where('id_jadwalpraktikum',$id)->with('asisten')->get();
        $hari = strtolower($data->hari);

        return view('asisten.jadwal_detail', get_defined_vars());
    }



}
