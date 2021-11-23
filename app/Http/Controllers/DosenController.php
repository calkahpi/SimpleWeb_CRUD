<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index() {
        $nama   = "pascal";
        $matkul = ["Algoritma", "Kalkulus" ,"WEB"];
        $jur    = "Teknik Informatika";
        return view("dosen" ,['data'=>$nama, 'mtkl'=>$matkul, 'jurusan'=>$jur]);
    }
    public function tambah() {
        return view("view1");
    }
    public function InputData(Request $request){
        $nama   = $request->input('nama');
        $alamat = $request->input('alamat');
        $phone  = $request->input('phone');

        $matkul =["$alamat","$phone"];
        $jur    ="";

        return view("dosen" ,['data'=>$nama, 'mtkl'=>$matkul, 'jurusan'=>$jur]);
    }
}
