@extends('master')

@section('title','Edit Data Masker')

@section('konten')

	<h3>Edit Data Masker</h3>

    <div class="container">
        <div class="row mt-5">
            <div class="col">
                @foreach($masker as $m)
                <form action="/masker/update" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $m->kodemasker }}">
                    <div class="row mb-3">
                        <label for="kodemasker" class="col-sm-2 col-form-label">Kode Masker</label>
                        <div class="col-sm-10">
                            <input type="number" id="kodemasker" name="kodemasker" value="{{ $m->kodemasker }}" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="merkmasker" class="col-sm-2 col-form-label">Merk Masker</label>
                        <div class="col-sm-10">
                        <input type="text" id="merkmasker" name="merkmasker" value="{{ $m->merkmasker }}" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="stockmasker" class="col-sm-2 col-form-label">Stock Masker</label>
                        <div class="col-sm-10">
                            <input type="number" id="stockmasker" name="stockmasker" value="{{ $m->stockmasker }}" class="form-control" >
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
                        <div class="col-sm-10">
                            <input type="text" id="tersedia" name="tersedia" value="{{ $m->tersedia }}" class="form-control" >
                        </div>
                    </div>
                    <input class="btn btn-success" type="submit" value="Simpan Data">
                    {{-- <button href="/masker/update" type="submit" class="btn btn-success">Simpan Data</button> --}}
                </form>
                @endforeach
            </div>
        </div>
    </div>
    <br>
    <br>
    <a href="/masker" class="btn btn-primary btn-sm">Kembali</a>

@endsection
