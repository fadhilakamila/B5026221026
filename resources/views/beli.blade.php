@extends('master')

@section('title','Keranjang Belanja')

@section('konten')

    <h3>Beli Produk</h3>

    <div class="container">
        <form action="/keranjangbelanja/store" method="post">
            {{ csrf_field() }}
            <div class="row mb-3">
                <label for="KodeBarang" class="col-sm-2 col-form-label">Kode Barang</label>
                <div class="col-sm-10">
                    <input type="number" id="KodeBarang" name="KodeBarang" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <label for="Jumlah" class="col-sm-2 col-form-label">Jumlah Pembelian</label>
                <div class="col-sm-10">
                <input type="number" id="JumlahPembelian" name="JumlahPembelian" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <label for="Harga" class="col-sm-2 col-form-label">Harga per Item</label>
                <div class="col-sm-10">
                    <input type="number" id="harga" name="harga" class="form-control" >
                </div>
            </div>
            {{-- <button href="/keranjangbelanja" type="submit" class="btn btn-primary">Beli</button> --}}
            <a href="/keranjangbelanja" class="btn btn-primary">Kembali</a>
            <input class="btn btn-success" type="submit" value="Beli">
        </form>
    </div>



@endsection
