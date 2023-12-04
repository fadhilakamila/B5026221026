@extends('master')

@section('title','Data Pegawai')

@section('konten')

	<h3>Edit Pegawai</h3>

    <div class="container">
        <div class="row mt-5">
            <div class="col-4">
                <div class="kotak-kosong mt-0 ml-0"></div>
            </div>
            <div class="col-8">
                @foreach($pegawai as $p)
                <form action="/pegawai/update" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $p->pegawai_id }}">
                    <div class="row mb-3">
                        <label for="pegawai_nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" id="nama" name="nama" value="{{ $p->pegawai_nama }}" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="pegawai_jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                        <div class="col-sm-10">
                        <input type="text" id="jabatan" name="jabatan" value="{{ $p->pegawai_jabatan }}" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="pegawai_umur" class="col-sm-2 col-form-label">Umur</label>
                        <div class="col-sm-10">
                            <input type="number" id="umur" name="umur" value="{{ $p->pegawai_umur }}" class="form-control" >
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="pegawai_alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" id="alamat" name="alamat" value="{{ $p->pegawai_alamat }}" class="form-control" >
                        </div>
                    </div>
                    <button href="/pegawai/update" type="submit" class="btn btn-primary">Simpan Data</button>
                </form>
                @endforeach
            </div>
        </div>
    </div>

    <a href="/pegawai" class="btn btn-primary btn-sm">Kembali</a>

@endsection
