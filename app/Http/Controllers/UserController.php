<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class UserController extends Controller
{
    public function updateUser(Request $req) {
        $id_user = $req->id_user;
        $nama = $req->nama;
        $email = $req->email;
        DB::update("UPDATE users SET name=?, email=? WHERE id=?", [$nama, $email, $id_user]);
        return redirect()->route('home');
    }
    
    public function upgradeUser(Request $req) {
        $member = $req->member;
        DB::update("UPDATE users SET member=? WHERE id=?", [$member, Auth::user()->id]);
        return redirect()->route('home');
    }
}
