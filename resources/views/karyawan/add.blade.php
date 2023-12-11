@extends('master')

@section('title','Tambah Data Karyawan')

@section('konten')

    <h3>Tambah Data Karyawan</h3>

    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <form action="/karyawan/store" method="post">
                    {{ csrf_field() }}
                    <div class="row mb-3">
                        <label for="kodepegawai" class="col-sm-6 col-form-label">Kode Pegawai</label>
                        <div class="col-sm-6">
                            <input type="text" id="kodepegawai" name="kodepegawai" class="form-control" placeholder="Masukkan kode karyawan">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-sm-6 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-6">
                            <input type="text" id="namalengkap" name="namalengkap" class="form-control" placeholder="Masukkan nama lengkap karyawan">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="divisi" class="col-sm-6 col-form-label">Divisi</label>
                        <div class="col-sm-6">
                            <input type="text" id="divisi" name="divisi" class="form-control" placeholder="Masukkan divisi karyawan">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="departemen" class="col-sm-6 col-form-label">Departemen</label>
                        <div class="col-sm-6">
                            <input type="text" id="departemen" name="departemen" class="form-control" placeholder="Masukkan departemen karyawan">
                        </div>
                    </div>
                    <input class="btn btn-success" type="submit" value="SIMPAN">
                </form>
            </div>
        </div>
    </div>

    <br>
    <br>
    <a href="/karyawan" class="btn btn-primary btn-sm">Kembali</a>

@endsection
