<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Hasil;
use App\Soal;
use DB;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countsoal = DB::select("SELECT count(*) AS semua FROM soal");
        $countsoaldokter = DB::select("SELECT count(*) AS doktersoal FROM soal WHERE id_psikolog=?", [Auth::user()->id]);
        $counttest = DB::select("SELECT count(*) AS testtotal FROM hasil WHERE id_user=?", [Auth::user()->id]);
        $countverified = DB::select("SELECT count(*) AS verifiedtotal FROM hasil WHERE verifikasi=? AND id_user=?", [1, Auth::user()->id]);
        $hasilku = DB::select("SELECT * FROM hasil WHERE id_user=? AND posted=? ORDER BY nilai", [Auth::user()->id, 1]);
        $hasil = DB::select("SELECT * FROM hasil WHERE posted=? ORDER BY nilai", [1]);
        $allsoal = DB::select("SELECT * FROM soal");
        $soal = DB::select("SELECT * FROM soal WHERE id_psikolog=?", [Auth::user()->id]);
        return view('home', ['hasil' => $hasil, 
            'allsoal' => $allsoal, 
            'soal' => $soal,
            'countsoal' => $countsoal[0],
            'countsoaldokter' => $countsoaldokter[0],
            'counttest' => $counttest[0],
            'countverified' => $countverified[0],
            'hasil' => $hasil,
            'hasilku' => $hasilku
        ]);
    }
}
