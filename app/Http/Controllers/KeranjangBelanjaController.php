<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class keranjangBelanjaController extends Controller
{
    public function index()
	{
		$keranjangbelanja = DB::table('keranjangbelanja')
						->orderBy('ID', 'asc')->get();
		return view('indexKeranjangBelanja',['keranjangbelanja' => $keranjangbelanja]);

	}

    public function add()
	{
    	return view('beli');
	}

    public function store(Request $request)
	{
		DB::table('keranjangbelanja')->insert([
			// 'ID' => $request->KodePembelian, // gak perlu, karena auto-increment
			'KodeBarang' => $request->KodeBarang,
			'Jumlah' => $request->JumlahPembelian,
			'Harga' => $request->harga
		]);

		return redirect('/keranjangbelanja');

	}

    public function hapus($id)
	{
		DB::table('keranjangbelanja')->where('ID',$id)->delete();

		return redirect('/keranjangbelanja');
	}
}
