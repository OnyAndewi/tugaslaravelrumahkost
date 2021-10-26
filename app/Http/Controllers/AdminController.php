<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
        $admin = DB::select('select * from tb_admin', [1]);
        return view('layouts/data_admin-template', ['admin' => $admin]);
    }

    public function insert_data_admin(){
        return view('layouts/insert_data_admin-template');
    }

    public function simpan_data_admin(Request $request){
        DB::table('tb_admin')->insert([
            'nama' => $request->nama
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/data_admin');
    }

    public function update_data_admin(Request $request){
        $id = $request->id;
        $admin = DB::select('select * from tb_admin where id = '.$request->id.'', [1]);
        return view('layouts/update_data_admin-template',['admin' => $admin]);
    }

    public function edit_data_admin(Request $request){
        DB::table('tb_admin')
                ->where('id', $request->id)
                ->update(['nama' => $request->nama]);
        // alihkan halaman ke halaman pegawai
        return redirect('/data_admin');
    }

    public function delete_data_admin(Request $request){
        $id = $request->id;
        DB::table('tb_admin')->where('id', '=', $id)->delete();
        // alihkan halaman ke halaman pegawai
        return redirect('/data_admin');
    }

    
}
