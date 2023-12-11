<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CounterController extends Controller
{
    public function showCounter()
    {
        // Update jumlah terlebih dahulu
        DB::table('counter')->increment('Jumlah');

        // Ambil nilai Jumlah setelah diupdate
        $jumlahPengunjung = DB::table('counter')->where('ID', 1)->value('Jumlah');

        // Tampilkan view dengan data jumlah pengunjung
        return view('counter', ['jumlahPengunjung' => $jumlahPengunjung]);
    }
}
