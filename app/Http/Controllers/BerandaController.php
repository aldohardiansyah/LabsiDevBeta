<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Semester;
use App\Informasi;


class BerandaController extends Controller
{


    public function index()
    {   $semesteraktif = Semester::where('status',1)->first();//CEKSEMESTER AKTIF

        $data=Informasi::where('kategori','Public')->orderBy('tgl_buat', 'DESC')->limit(4)->get();
        $datapalingbaru=Informasi::orderBy('tgl_buat', 'DESC')->limit(1)->first();
        return view('index', get_defined_vars());
    }



}
