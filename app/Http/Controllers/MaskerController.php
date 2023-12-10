<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MaskerController extends Controller
{
    public function index() {
        $masker = DB::table('masker')->get(); // get() untuk mengambil data
        return view('masker.index', ['masker' => $masker]);
    }

    public function add()
	{
        return view('masker.add');
	}

    public function store(Request $request)
	{
        if($request->stockmasker>0){
            $tersedia='y';
        }else {
            $tersedia='n';
        }

		DB::table('masker')->insert([
			// 'kodemasker' => $request->kodemasker,
			'merkmasker' => $request->merkmasker,
			'stockmasker' => $request->stockmasker,
			'tersedia' => $tersedia // $request artinya "ambil dari form", $tersedia udah pernah diambil di ifelse, makanya tidak perlu pakai $request lagi
		]);
		return redirect('/masker');

	}

    public function view($id)
	{
		$masker = DB::table('masker')->where('kodemasker',$id)->get();
		return view('masker.view',['masker' => $masker]);
	}

    public function edit($id)
	{
		$masker = DB::table('masker')->where('kodemasker',$id)->get();
		return view('masker.edit',['masker' => $masker]);

	}

	public function update(Request $request)
	{

		DB::table('masker')->where('kodemasker',$request->id)->update([
			'merkmasker' => $request->merkmasker,
			'stockmasker' => $request->stockmasker,
            'tersedia' => $request->tersedia,
		]);

		return redirect('/masker');
	}

    public function delete($id)
	{
		DB::table('masker')->where('kodemasker',$id)->delete();
		return redirect('/masker');
	}

    public function cari(Request $request)
	{
		$cari = $request->cari;

		$masker = DB::table('masker')
			->where('merkmasker','like',"%".$cari."%")
			->paginate();

		return view('masker.index',['masker' => $masker, 'cari' => $cari]);
	}
}
