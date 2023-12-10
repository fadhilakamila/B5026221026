@extends('master')

@section('title', 'Nilai Kuliah')

@section('konten')

    <h3>Nilai Kuliah</h3>

    <a href="/nilaikuliah/add" class="btn btn-primary"> + Tambah Data</a>

    <table class="table table-striped table-hover mt-4">
        <tr>
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>
        @foreach ($nilaikuliah as $nk)
            <tr>
                <td>{{ $nk->ID }}</td>
                <td>{{ $nk->NRP }}</td>
                <td>{{ $nk->NilaiAngka }}</td>
                <td>{{ $nk->SKS }}</td>
                <td>
                    @if($nk->NilaiAngka<=40)
                    D
                    @elseif ($nk->NilaiAngka>=41 && $nk->NilaiAngka<=60)
                    C
                    @elseif ($nk->NilaiAngka>=61 && $nk->NilaiAngka<=80)
                    B
                    @elseif ($nk->NilaiAngka>=80)
                    A
                    @endif
                </td>
                <td>{{ $nk->NilaiAngka * $nk->SKS }}</td>
            </tr>
        @endforeach
    </table>
@endsection
