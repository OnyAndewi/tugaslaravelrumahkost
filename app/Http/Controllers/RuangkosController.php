<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RuangkosController extends Controller
{
    public function index(){
        $ruang_kos = DB::select('select * from tb_ruang_kost', [1]);
        return view('layouts/data_ruang_kos-template', ['ruang_kos' => $ruang_kos]);
    }

    public function insert_data_ruang_kos(){
        return view('layouts/insert_data_ruang_kos-template');
    }

    public function simpan_data_ruang_kos(Request $request){
        DB::table('tb_ruang_kost')->insert([
            'nama' => $request->nama,
            'luas' => "",
            'fitur' => "",
            'harga' => ""
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/data_ruang_kos');
    }

    public function update_data_ruang_kos(Request $request){
        $id = $request->id;
        $ruang_kos = DB::select('select * from tb_ruang_kost where id = '.$request->id.'', [1]);
        return view('layouts/update_data_ruang_kos-template',['ruang_kos' => $ruang_kos]);
    }

    public function edit_data_ruang_kos(Request $request){
        DB::table('tb_ruang_kost')
                ->where('id', $request->id)
                ->update(['nama' => $request->nama]);
        // alihkan halaman ke halaman pegawai
        return redirect('/data_ruang_kos');
    }

    
    public function delete_data_ruang_kos(Request $request){
        $id = $request->id;
        DB::table('tb_ruang_kost')->where('id', '=', $id)->delete();
        // alihkan halaman ke halaman pegawai
        return redirect('/data_ruang_kos');
    }

    
}
