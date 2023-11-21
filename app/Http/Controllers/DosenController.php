<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{

    public function index(){

        // membuat variable di php selalu pakai "$"
        $a = 7;
        $b = 3;
        $c = $a * $b;

        return "<h1>Hasil Perkalian : " . $c . "</h1>";
    }

    public function biodata(){
        $nama = "Fadhila Kamila Ismail";
        $alamat = "Surabaya";
        $umur = 19;
        return view('biodata',['nama' => $nama, 'alamat' => $alamat, 'umur' => $umur]);
        // 'nama', 'alamat', dan 'umur' merupakan variable yang diambil dari file 'biodata'
        // $nama, $alamat, $umur merupakan variable yang diambil dari line 13, 14, 15
    }


    // Di CRUD, nanti {$jam} untuk passing ID
    public function showjam($jam){ // parameter function berupa Primitive Data Type (bukan berupa class)
        return "<h2>Sekarang Jam: ". $jam ."<h2>";
    }

    public function formulir(){
        return view('formulir');
    }

    public function proses(Request $request){
        $nama = $request->input('nama');
        $alamat = $request->input('alamat');
        $nrp = $request->input('nrp');
        return "Anda telah mengisikan <br> Nama : ".$nama. ", Alamat : ".$alamat.",NRP :" .$nrp .$request;
    }
}
