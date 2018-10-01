<?php

namespace App\Http\Controllers\Asisten;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Asisten;
use Auth;
use Response;

class AsistenProfileController extends Controller
{


    public function index()
    {
        $data = Asisten::where('id_user', Auth::user()->id)->first();
        return view('asisten.profile',get_defined_vars());
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


    public function edit()
    {
        $data = Asisten::where('id_user', Auth::user()->id)->first();
        return view('asisten.profile_edit',get_defined_vars());
    }

}
