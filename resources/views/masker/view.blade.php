@extends('master')

@section('title','Data Masker')

@section('konten')

    <h3>Data Masker</h3>

    {{-- === NIDA === --}}
    {{-- <div class="container">
        <div class="row">
            <div class="col">
                @foreach ($masker as $m)
                Kode Masker     :   {{ $m->kodemasker }}<br>
                Merk Masker     :   {{ $m->merkmasker }}
                Stock Masker    :   {{ $m->stockmasker }}
                Tersedia        :   {{ $m->tersedia }}
                @endforeach
            </div>
        </div>
    </div> --}}


    {{-- === KAYLA ===  --}}
    <div class="container">
        @foreach($masker as $m)
        <div class="row mt-5">
            <div class="col">
                <form>
                    {{ csrf_field() }}
                    <div class="row mb-3">
                        <label for="kodemasker" class="col-sm-6 col-form-label">Kode Masker</label>
                        <div class="col-sm-6">
                            <label type="number" id="kodemasker" name="kodemasker" class="form-label" value="">{{ $m->kodemasker }}</label>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="merkmasker" class="col-sm-6 col-form-label">Merk Masker</label>
                        <div class="col-sm-6">
                            <label type="text" id="merkmasker" name="merkmasker" class="form-label" value="">{{ $m->merkmasker }}</label>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="stockmasker" class="col-sm-6 col-form-label">Stock Masker</label>
                        <div class="col-sm-6">
                            <label type="number" id="stockmasker" name="stockmasker" class="form-label" value="">{{ $m->stockmasker }}</label>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="tersedia" class="col-sm-6 col-form-label">Tersedia</label>
                        <div class="col-sm-6">
                            <label type="number" id="tersedia" name="tersedia" class="form-label" value="">{{ $m->tersedia }}</label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        @endforeach
    </div>

    {{-- === YIMMI === --}}
    {{-- <div class="container">
        @foreach($masker as $m)
        <div class="row mt-5">
            <div class="col">
                <form>
                    {{ csrf_field() }}
                    <div class="row mb-3">
                        <label for="kodemasker" class="col-sm-6 col-form-label">Kode Masker</label>
                        <div class="col-sm-6">
                            <input type="number" id="kodemasker" name="kodemasker" class="form-control" value="{{ $m->kodemasker }}" readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="merkmasker" class="col-sm-6 col-form-label">Merk Masker</label>
                        <div class="col-sm-6">
                            <input type="text" id="merkmasker" name="merkmasker" class="form-control" value="{{ $m->merkmasker }}" readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="stockmasker" class="col-sm-6 col-form-label">Stock Masker</label>
                        <div class="col-sm-6">
                            <input type="number" id="stockmasker" name="stockmasker" class="form-control" value="{{ $m->stockmasker }}" readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="tersedia" class="col-sm-6 col-form-label">Tersedia</label>
                        <div class="col-sm-6">
                            <input type="number" id="tersedia" name="tersedia" class="form-control" value="{{ $m->tersedia }}" readonly>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        @endforeach
    </div> --}}

    <br>
    <a href="/masker" class="btn btn-primary btn-sm">Kembali</a>

@endsection
