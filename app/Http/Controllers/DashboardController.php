<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
        $jumlah_ruang_kos = DB::select('select count(id) as id from tb_ruang_kost', [1]);
        $jumlah_ruang_user = DB::select('select count(id) as id from tb_user', [1]);
        return view('layouts/admin-template',['jumlah_ruang_kos' => $jumlah_ruang_kos,'jumlah_ruang_user' => $jumlah_ruang_user]);
    }
    
}
