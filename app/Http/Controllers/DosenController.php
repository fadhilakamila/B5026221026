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
        $umur = 18;
        return view('biodata',['nama' => $nama, 'alamat' => $alamat, 'umur']);
        // 'nama', 'alamat', dan 'umur' merupakan variable yang diambil dari file 'biodata'
        // $nama, $alamat, $umur merupakan variable yang diambil dari line 13, 14, 15
    }

}
