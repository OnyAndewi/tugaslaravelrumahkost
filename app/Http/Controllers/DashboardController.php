<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
        $jumlah_ruang_kos = DB::select('select * from tb_ruang_kost', [1]);
        return view('layouts/admin-template');
    }
    
}
