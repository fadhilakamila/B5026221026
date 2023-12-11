@extends('master')

@section('title','Edit Data Karyawan')

@section('konten')

	<h3>Edit Data Karyawan</h3>

    <div class="container">
        <div class="row mt-5">
            <div class="col">
                @foreach($karyawan as $k)
                <form action="/karyawan/update" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $k->kodepegawai }}">
                    <div class="row mb-3">
                        <label for="kodepegawai" class="col-sm-2 col-form-label">Kode Pegawai</label>
                        <div class="col-sm-10">
                            <input type="number" id="kodepegawai" name="kodepegawai" value="{{ $k->kodepegawai }}" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="namalengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                        <input type="text" id="namalengkap" name="namalengkap" value="{{ $k->namalengkap }}" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="divisi" class="col-sm-2 col-form-label">Divisi</label>
                        <div class="col-sm-10">
                            <input type="text" id="divisi" name="divisi" value="{{ $k->divisi }}" class="form-control" >
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="departemen" class="col-sm-2 col-form-label">Departemen</label>
                        <div class="col-sm-10">
                            <input type="text" id="departemen" name="departemen" value="{{ $k->departemen }}" class="form-control" >
                        </div>
                    </div>
                    <input class="btn btn-success" type="submit" value="Simpan Perubahan">
                    {{-- <button href="/masker/update" type="submit" class="btn btn-success">Simpan Data</button> --}}
                </form>
                @endforeach
            </div>
        </div>
    </div>
    <br>
    <br>
    <a href="/karyawan" class="btn btn-primary btn-sm">Kembali</a>

@endsection
