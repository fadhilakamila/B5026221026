<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class NilaiKuliahController extends Controller
{
    public function index() {
        $nilaikuliah = DB::table('nilaikuliah')->get(); // get() untuk mengambil data
        return view('nilaikuliah.index', ['nilaikuliah' => $nilaikuliah]);
    }

    public function add()
	{
        return view('nilaikuliah.add');
	}

    public function store(Request $request)
	{

		DB::table('nilaikuliah')->insert([
			'ID' => $request->ID,
			'NRP' => $request->NRP,
			'NilaiAngka' => $request->NilaiAngka,
			'SKS' => $request->SKS
		]);
		return redirect('/nilaikuliah');

	}

}
