<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//MODEL
use App\Semester;
use App\Menu;

class AdminMenuController extends Controller
{


    public function index()
    {
        $menu = Menu::all();
        // dd($data);
        return view('admin.menuaktif.menuaktif',get_defined_vars());
    }

    public function aktivasi($id)
    {
        $menu = Menu::where('id',$id)->update(['status'=>1]);
        // dd($menu);
        return redirect()->route('admin_menu')->with('status', 'Perubahan Status Menu Berhasil');
    }

    public function nonaktif($id)
    {
        $menu = Menu::where('id',$id)->update(['status'=>0]);
        // dd($menu);
        return redirect()->route('admin_menu')->with('status', 'Perubahan Status Menu Berhasil');
    }


}
