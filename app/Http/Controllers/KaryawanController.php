<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class KaryawanController extends Controller
{
    public function index() {
        $karyawan = DB::table('karyawan')->get(); // get() untuk mengambil data
        return view('karyawan.index', ['karyawan' => $karyawan]);
    }

    public function add()
	{
        return view('karyawan.add');
	}

    public function store(Request $request)
	{

        // $request->validate([
        //     'kodepegawai' => [
        //         'required',
        //         'max:5',
        //         Rule::unique('karyawan', 'kodepegawai')->whereNull('deleted_at'), // Validasi unique
        //     ],
        //     'namalengkap' => 'required|regex:/^[A-Z\s]+$/',
        //     'divisi' => 'required',
        //     'departemen' => 'required',
        // ], [
        //     'kodepegawai.unique' => 'Kode Pegawai sudah ada di tabel.',
        // ]);

        // DB::table('karyawan')->insert([
        //     'kodepegawai' => $request->kodepegawai,
        //     'namalengkap' => $request->namalengkap,
        //     'divisi' => $request->divisi,
        //     'departemen' => $request->departemen
        // ]);

        // return redirect('/karyawan');

        // $existingKaryawan = DB::table('karyawan')
        // ->where('kodepegawai', $request->kodepegawai)
        // ->first();

        // if ($existingKaryawan) {
        //     // Kode Pegawai SUDAH ADA di tabel
        //     return redirect('/karyawan/add')->with('error', 'Kode Pegawai sudah ada di tabel.');
        // }

        // $add = DB::table('karyawan')->insert([
        // 'kodepegawai' => $request->kodepegawai,
        // 'namalengkap' => $request->namalengkap,
        // 'divisi' => $request->divisi,
        // 'departemen' => $request->departemen
        // ]);

        // return redirect('/karyawan');

        // $request->validate([
        //     'kodepegawai' => [
        //         'required',
        //         'max:5',
        //         Rule::unique('karyawan', 'kodepegawai'), // Menambahkan validasi unique
        //     ],
        //     'namalengkap' => 'required|regex:/^[A-Z\s]+$/',
        //     'divisi' => 'required',
        //     'departemen' => 'required',
        // ]);

        // $request->validate([
        //     'kodepegawai' => [
        //         'required',
        //         'max:5',
        //         Rule::unique('karyawan', 'kodepegawai'), // Menambahkan validasi unique
        //     ],
        //     'namalengkap' => 'required|regex:/^[A-Z\s]+$/',
        //     'divisi' => 'required',
        //     'departemen' => 'required',
        // ]);

        DB::table('karyawan')->insert([
			'kodepegawai' => $request->kodepegawai,
			'namalengkap' => $request->namalengkap,
			'divisi' => $request->divisi,
			'departemen' => $request->departemen
		]);

        return redirect('/karyawan');

        // $cekdata='kodepegawai';
        // $ada=mysqli_query($cekdata,) or die(mysqli_error());

        // if(mysqli_num_rows($ada)>0) {
        //     return redirect('karyawan.add')->with('alert','Kode Pegawai SUDAH ADA di tabel');
        // } else {
        //     return redirect('/karyawan');
        // }

        // if($request->stockmasker>0){
        //     $tersedia='y';
        // }else {
        //     $tersedia='n';
        // }

        // $request->validate([
        //     'kodepegawai' => [
        //         'required',
        //         'max:5',
        //         Rule::unique('karyawan', 'kodepegawai'), // Menambahkan validasi unique
        //     ],
        //     'namalengkap' => 'required|regex:/^[A-Z\s]+$/',
        //     'divisi' => 'required',
        //     'departemen' => 'required',
        // ]);

        // Karyawan::add($request->all());

		// return redirect('/karyawan');
	}

    public function delete($id)
	{
		DB::table('karyawan')->where('kodepegawai',$id)->delete();
		return redirect('/karyawan');
	}

    public function view($id)
	{
		$karyawan = DB::table('karyawan')->where('kodepegawai',$id)->get();
		return view('karyawan.view',['karyawan' => $karyawan]);
	}

    public function edit($id)
	{
		$karyawan = DB::table('karyawan')->where('kodepegawai',$id)->get();
		return view('karyawan.edit',['karyawan' => $karyawan]);

	}

	public function update(Request $request)
	{

		DB::table('karyawan')->where('kodepegawai',$request->id)->update([
			'kodepegawai' => $request->kodepegawai,
			'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
		]);

		return redirect('/karyawan');
	}
}
