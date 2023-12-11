@extends('master')

@section('title', 'Karyawan')

@section('konten')

    <h3>Karyawan</h3>

    <table class="table table-striped table-hover mt-4">
        <tr>
            <th>Kode Pegawai</th>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Departemen</th>
            <th>Action</th>
        </tr>
        @foreach ($karyawan as $k)
            <tr>
                <td>{{ $k->kodepegawai }}</td>
                <td>{{ strtoupper($k->namalengkap) }}</td>
                <td>{{ $k->divisi }}</td>
                <td>{{ strtolower($k->departemen) }}</td>
                <td>
                    <a href="/karyawan/delete/{{ $k->kodepegawai }}" class="btn btn-danger">Hapus Data</a>
                </td>
            </tr>
        @endforeach
    </table>
    <br>
    <a href="/karyawan/add" class="btn btn-primary"> + Tambah Data</a>
@endsection
