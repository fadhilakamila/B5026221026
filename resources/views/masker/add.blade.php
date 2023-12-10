@extends('master')

@section('title','Tambah Masker')

@section('konten')

    <h3>Tambah Masker</h3>

    {{-- NIDA --}}
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <form action="/masker/store" method="post">
                    {{ csrf_field() }}
                    <div class="row mb-3">
                        <label for="merkmasker" class="col-sm-6 col-form-label">Masukkan Merk Masker</label>
                        <div class="col-sm-6">
                            <input type="text" id="merkmasker" name="merkmasker" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="stockmasker" class="col-sm-6 col-form-label">Masukkan Stock Masker</label>
                        <div class="col-sm-6">
                            <input type="number" id="stockmasker" name="stockmasker" class="form-control" >
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="tersedia" class="col-sm-6 col-form-label">Tersedia</label>
                        <div class="col-sm-6">
                            <input type="text" id="tersedia" name="tersedia" class="form-control" >
                        </div>
                    </div>
                    <input class="btn btn-success" type="submit" value="Simpan">
                </form>
            </div>
        </div>
    </div>
    {{-- YIMMI --}}

    <br>
    <br>
    <a href="/masker" class="btn btn-primary btn-sm">Kembali</a>

@endsection
