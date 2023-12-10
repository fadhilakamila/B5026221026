@extends('master')

@section('title','Tambah Data')

@section('konten')

    <h3>Tambah Data</h3>

    {{-- NIDA --}}
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <form action="/nilaikuliah/store" method="post">
                    {{ csrf_field() }}
                    <div class="row mb-3">
                        <label for="NRP" class="col-sm-6 col-form-label">Masukkan NRP</label>
                        <div class="col-sm-6">
                            <input type="text" id="NRP" name="NRP" class="form-control" >
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="NilaiAngka" class="col-sm-6 col-form-label">Nilai Angka</label>
                        <div class="col-sm-6">
                            <input type="number" id="NilaiAngka" name="NilaiAngka" class="form-control" >
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="SKS" class="col-sm-6 col-form-label">SKS</label>
                        <div class="col-sm-6">
                            <input type="number" id="SKS" name="SKS" class="form-control" >
                        </div>
                    </div>
                    <input class="btn btn-success" type="submit" value="Simpan">
                </form>
            </div>
        </div>
    </div>

    <br>
    <br>
    <a href="/nilaikuliah" class="btn btn-primary btn-sm">Kembali</a>

@endsection
