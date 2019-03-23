<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class MainController extends Controller
{
    public function result() {
        $test = DB::select("SELECT * FROM hasil WHERE verifikasi=? AND id_user=?", [0, Auth::user()->id]);
        $testverified = DB::select("SELECT * FROM hasil WHERE verifikasi=? AND id_user=?", [1, Auth::user()->id]);
        $dtest = DB::select("SELECT * FROM hasil WHERE verifikasi=? AND id_dokter=?", [0, Auth::user()->id]);
        $dtestverified = DB::select("SELECT * FROM hasil WHERE verifikasi=? AND id_dokter=?", [1, Auth::user()->id]);
        return view('main/results', [
            'test' => $test, 
            'testverified' => $testverified,
            'dtest' => $dtest,
            'dtestverified' => $dtestverified
        ]);
    }

    public function hasPost(Request $req) {
        DB::update("UPDATE hasil SET posted=? WHERE id_hasil=?", [1, $req->id_post]);
        return redirect()->route('result.main');
    }

    public function deletePost(Request $req) {
        DB::update("UPDATE hasil SET posted=? WHERE id_hasil=?", [0, $req->id_post]);
        return redirect()->route('result.main');
    }

    public function verifikasi(Request $req) {
        DB::update("UPDATE hasil SET verifikasi=? WHERE id_hasil=?", [1, $req->id_hasil]);
        return redirect()->route('result.main');
    }
}
