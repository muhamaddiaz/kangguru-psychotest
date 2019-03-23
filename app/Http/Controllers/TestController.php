<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class TestController extends Controller
{
    public function mulaiTest(Request $req) {
        if(Auth::user()->member == "Bronze") {
            $soal = DB::select("SELECT * FROM soal LIMIT 10");
        } else {
            $soal = DB::select("SELECT * FROM soal");
        }
        $dokter = DB::select("SELECT * FROM users WHERE isPsycholog=?", [1]);
        return view('staticpages/test', ['soal' => $soal, 'dokter' => $dokter]);
    }

    public function prosesTest(Request $req) {
        $id_dokter = $req->id_dokter;
        if(Auth::user()->member == "Bronze") {
            $test = DB::select("SELECT * FROM soal LIMIT 10");
        } else {
            $test = DB::select("SELECT * FROM soal");
        }
        $point = 0;
        foreach($test as $t) {
            if($t->kunci_jawaban == $req->input('jawab'.$t->id_soal)) {
                $point += 50;
            } else {
                $point += 10;
            }
        }
        DB::insert("INSERT INTO hasil(id_user, id_dokter, nilai) VALUES(?, ?, ?)", [Auth::user()->id, $id_dokter, $point]);
        return redirect()->route('home');
    }
}
