@extends('master')

@section('title', 'Tugas Pra EAS')

@section('konten')

    <h3>MASKER</h3>

    <a href="/masker/add" class="btn btn-primary"> + Tambah Masker Baru</a>

    <br/>
    <p class="mt-3">Cari Data Masker berdasarkan Merk: </p>

    <form class="row" action="/masker/cari" method="GET">
        <div class="col-11">
            <input class="form-control" type="text" name="cari" placeholder="Cari Masker .."
                value="{{ old('cari', isset($cari) ? $cari : '') }}">
        </div>
        <div class="col-1">
            <input class="btn btn-primary" type="submit" value="CARI">
        </div>
    </form>

    <table class="table table-striped table-hover mt-4">
        <tr>
            <th>Kode Masker</th>
            <th>Merk Masker</th>
            <th>Stock Masker</th>
            <th>Tersedia</th>
            <th>Action</th>
        </tr>
        @foreach ($masker as $m)
            <tr>
                <td>{{ $m->kodemasker }}</td>
                <td>{{ $m->merkmasker }}</td>
                <td>{{ $m->stockmasker }}</td>
                <td>
                    {{-- NIDA --}}{{ $m->tersedia }}
                    {{-- YIMMI --}} {{-- <input class="form-check-input" type="checkbox" value="" {{ $m->tersedia === 'Y'? 'checked' : '' }} id="flexCheckDefault"> --}}
                </td>
                <td>
                    <a href="/masker/view/{{ $m->kodemasker }}" class="btn btn-success">View</a>
                    <a href="/masker/edit/{{ $m->kodemasker }}" class="btn btn-warning">Edit</a>
                    <a href="/masker/delete/{{ $m->kodemasker }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
