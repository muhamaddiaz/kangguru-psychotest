<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DokterController extends Controller
{
    public function buatSoal(Request $req) {
        $id = $req->id_dokter;
        $jenis_soal = $req->jenis_soal;
        $deskripsi_soal = $req->deskripsi_soal;
        $a = $req->A;
        $b = $req->B;
        $c = $req->C;
        $d = $req->D;
        $kunci_jawaban = $req->kunci_jawaban;
        DB::insert("INSERT INTO soal(id_psikolog, jenis_soal, deskripsi_soal, A, B, C, D, kunci_jawaban) VALUES(?, ?, ?, ?, ?, ?, ?, ?)", [
            $id,
            $jenis_soal, 
            $deskripsi_soal,
            $a,
            $b,
            $c,
            $d,
            $kunci_jawaban
        ]);
        return redirect()->route('home');
    }

    public function hapusSoal(Request $req) {
        $id_hapus = $req->id_hapus;
        DB::delete("DELETE FROM soal WHERE id_soal=?", [$id_hapus]);
        return redirect()->route('home');
    }
}
