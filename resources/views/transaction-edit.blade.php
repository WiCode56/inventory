@extends('layout.mainlayout')

@section('title', 'Edit Product')

@section('content')
<div class="container-fluid mt-3">
    <h2 class="text-center">Mengubah Data Produk</h2>

    <form action="/product/{{ $product['id'] }}" method="POST">
    @method('PUT')
    @csrf
    <div class="container mt-5 d-flex justify-content-center">
        <div class="card" style="width: 38rem;">
            <div class="card-body ">
                <div class="container-fluid">
                    <h5 class="card-title text-center">Update Produk</h5>
                    <div class="form-group mt-3">
                        <label for="kd_barang">Kode Barang</label>
                        <input type="text" class="form-control" id="kd_barang" name="kd_barang" value="{{ $product['kd_barang'] }}" placeholder="Masukan Kode Barang.....">
                    </div>
                    <div class="form-group mt-3">
                        <label for="name">Nama Barang</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $product['name'] }}" placeholder="Masukan Nama Barang.....">
                    </div>
                    <div class="form-group mt-3">
                        <label for="description">Deskripsi</label>
                        <input type="text" class="form-control" id="description" name="description" value="{{ $product['description'] }}" placeholder="Masukan Deskripsi Barang.....">
                    </div>
                    <div class="form-group mt-3">
                        <label for="stock">Stok</label>
                        <input type="number" class="form-control" id="stock" name="stock" value="{{ $product['stock'] }}" placeholder="Masukan Jumlah Stok....." min="0">
                    </div>
                    <div class="form-group mt-3">
                        <label for="price">Harga</label>
                        <input type="number" class="form-control" id="price" name="price" value="{{ $product['price'] }}" placeholder="Masukan Harga Barang....." min="0">
                    </div>
                    <div class="form-group mt-3">
                        <label for="tgl_rilis">Tanggal Rilis</label>
                        <input type="datetime-local" class="form-control" id="tgl_rilis" name="tgl_rilis" value="{{ $product['tgl_rilis'] }}" placeholder="Masukan Tanggal Rilis.....">
                    </div>
                </div>
            </div>
            <div class="container my-3 d-flex justify-content-center">
                <button class="btn btn-dark mx-3" type="submit">Update</button>
                <a href="/product" class="btn btn-danger mx-3">Batal</a>
            </div>
        </div>


    </form>
</div>
@endsection
