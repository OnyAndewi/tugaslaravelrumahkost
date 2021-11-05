<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        $user = DB::select('select * from tb_user', [1]);
        return view('layouts/data_user-template', ['user' => $user]);
    }

    public function insert_data_user(){
        return view('layouts/insert_data_user-template');
    }

    public function simpan_data_user(Request $request){
        DB::table('tb_user')->insert([
            'nama' => $request->nama,
            'asal' => $request->asal,
            'no_telepon' => $request->no_telepon
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/data_user');
    }

    public function update_data_user(Request $request){
        $id = $request->id;
        $user = DB::select('select * from tb_user where id = '.$request->id.'', [1]);
        return view('layouts/update_data_user-template',['user' => $user]);
    }

    public function edit_data_user(Request $request){
        DB::table('tb_user')
                ->where('id', $request->id)
                ->update(['nama' => $request->nama, 'asal' => $request->asal, 'no_telepon' => $request->no_telepon]);
        // alihkan halaman ke halaman pegawai
        return redirect('/data_user');
    }

    
    public function delete_data_user(Request $request){
        $id = $request->id;
        DB::table('tb_user')->where('id', '=', $id)->delete();
        // alihkan halaman ke halaman pegawai
        return redirect('/data_user');
    }

    
}
