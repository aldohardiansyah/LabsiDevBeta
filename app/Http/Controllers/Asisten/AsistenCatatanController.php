<?php

namespace App\Http\Controllers\Asisten;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Catatan;
use Carbon\Carbon;

class AsistenCatatanController extends Controller
{


    public function index()
    {
        $id = Auth::user()->id;
        $data = Catatan::where('id_asisten',$id)->get();
        return view('asisten.catatan',get_defined_vars());
    }

    public function insert(Request $request)
    {
        $id = Auth::user()->id;
        Catatan::create([
          'id_asisten'=> $id,
          'judul_catatan' => $request['judul_catatan'],
          'jenis_catatan' => $request['jenis_catatan'],
          'isi' => $request['isi']
      ]);

        return redirect()->route('asisten_catatan')->with('status', 'Semester Baru Berhasil Ditambahkan');
    }

    public function delete(Request $request)
    {
        $id = $request['iddata'];
        Catatan::where('id',$id)->delete();

        return redirect()->route('asisten_catatan')->with('status', 'Data Berhasil Dihapus');
    }



}
