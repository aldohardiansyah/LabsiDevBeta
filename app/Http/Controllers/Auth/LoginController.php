<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Carbon\Carbon;
use Auth;
use App\Aktivitas;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('login');
    }

    public function authenticated()
    {
        $iduser = Auth::user()->id;
        $namauser = Auth::user()->name;
        //buat rubah tanggal jadi indo
        $tanggal = Carbon::now()->format('d F Y');
        $jam = Carbon::now()->format('H:i');
        $data = Aktivitas::create([
            'id_user' => $iduser,
            'aktivitas' => $namauser.' login pada '. $tanggal . ' jam ' . $jam,
            'created_at' => Carbon::now()
        ]);

    }

}
