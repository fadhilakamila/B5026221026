<!-- DIHAPUS
<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body> -->

@extends('master') <!-- supaya master.blade.php terpanggil sebagai file utamanya -->

<!-- kalau hanya 1 kalimat -->
@section('title','Data Pegawai')

<!-- Kalau lebih dari 1 kalimat, pakai system block -->
@section('konten')

	<h3>DATA PEGAWAI</h3>

	<a href="/pegawai/tambah" class="btn btn-primary"> + Tambah Pegawai Baru</a>

	<br/>
    <p class="mt-3">Cari Data Pegawai berdasarkan Nama: </p>

    <form class="row" action="/pegawai/cari" method="GET">
        <div class="col-11">
            <input class="form-control" type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari', isset($cari) ? $cari : '') }}">
        </div>
        <div class="col-1">
            <input class="btn btn-primary" type="submit" value="CARI">
        </div>
    </form>

	<table class="table table-striped table-hover mt-4">
		<tr>
			<th>Nama</th> <!-- pastikan judul kolom pake th bukan td -->
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
                <a href="/pegawai/view/{{ $p->pegawai_id }}" class="btn btn-success">View</a>
                <a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning">Edit</a>
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $pegawai -> links() }}
@endsection
