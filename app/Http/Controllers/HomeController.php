<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Employee;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $count = DB::table('daftar_pesertas')->count();
        $htl = DB::table('daftar_pesertas')->where('jurusan', $request->jurusan = "Perhotelan")->count();
        $mmd = DB::table('daftar_pesertas')->where('jurusan', $request->jurusan = "Multimedia")->count();
        $rpl = DB::table('daftar_pesertas')->where('jurusan', $request->jurusan = "Rekayasa Perangkat Lunak")->count();
        $tkj = DB::table('daftar_pesertas')->where('jurusan', $request->jurusan = "Teknik Komputer dan Jaringan")->count();
        $tbg = DB::table('daftar_pesertas')->where('jurusan', $request->jurusan = "Tataboga")->count();
        $bdp = DB::table('daftar_pesertas')->where('jurusan', $request->jurusan = "Bisnis Daring dan Pemasaran")->count();
        $otkp = DB::table('daftar_pesertas')->where('jurusan', $request->jurusan = "Otomatisasi Tata Kelola Perkantoran")->count();
        return view('admins.home', [
            'count' => $count,
            'htl' => $htl,
            'mmd' => $mmd,
            'rpl' => $rpl,
            'tkj' => $tkj,
            'tbg' => $tbg,
            'bdp' => $bdp,
            'otkp' => $otkp,
        ]);
    }
}
