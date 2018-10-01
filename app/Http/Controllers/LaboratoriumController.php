<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Semester;

class LaboratoriumController extends Controller
{


    public function index()
    {   $semesteraktif=Semester::where('status',1)->first();//CEKSEMESTER AKTIF
        return view('lab', get_defined_vars());
    }



}
