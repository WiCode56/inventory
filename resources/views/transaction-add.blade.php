@extends('layout.mainlayout')

@section('title','Tambah Trasaksi')

@section('content')
<div class="container-fluid mt-3">


    {{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}

    <form action="product-tambah" method="POST">
    @csrf
    <div class="container d-flex justify-content-center" style="margin-top:100px;">
        <div class="card" style="width: 38rem;">
            <div class="card-body ">
                <div class="container-fluid">
                    <h5 class="card-title text-center">Tambah Produk</h5>
                    <div class="form-group mt-3">
                        <label for="name">Kategori Barang</label>
                        <input type="text" class="form-control" id="kd_barang" name="kd_barang" placeholder="Masukan Kode Barang.....">
                    </div>
                    <div class="form-group mt-3">
                        <label for="name">Kode Barang</label>
                        <input type="text" class="form-control" id="kd_barang" name="kd_barang" placeholder="Masukan Kode Barang.....">
                    </div>
                    <div class="form-group mt-3">
                        <label for="name">Nama Barang</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Masukan Nama Barang.....">
                    </div>
                    <div class="form-group mt-3">
                        <label for="name">Deskripsi</label>
                        <input type="text" class="form-control" id="description" name="description" placeholder="Masukan Deskripsi Barang.....">
                    </div>
                    <div class="form-group mt-3">
                        <label for="name">Stok</label>
                        <input type="number" class="form-control" id="stock" name="stock" placeholder="Masukan Jumlah Stok....." min="0">
                    </div>
                    <div class="form-group mt-3">
                        <label for="name">Harga</label>
                        <input type="number" class="form-control" id="price" name="price" placeholder="Masukan Harga Barang....." min="0">
                    </div>
                    <div class="form-group mt-3">
                        <label for="name">Tanggal Rilis</label>
                        <input type="datetime-local" class="form-control" id="tgl_rilis" name="tgl_rilis" placeholder="Masukan Tanggal Rilis.....">
                    </div>
                </div>
            </div>
            <div class="container my-3 d-flex justify-content-center">
                <button class="btn btn-dark mx-3" type="submit">Tambah</button>
                <a href="product" class="btn btn-danger mx-3">Batal</a>
            </div>
        </div>

        </form>
    </div>
</div>
@endsection
