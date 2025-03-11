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
                        <label for="category_id">Kategori Barang</label>

                        <!-- Menampilkan nama kategori dalam input readonly -->
                        <input type="text" class="form-control" value="{{ $product->category->name ?? 'Kategori Tidak Ditemukan' }}" readonly>

                        <!-- Hidden input agar category_id tetap terkirim -->
                        <input type="hidden" name="category_id" value="{{ $product->category_id }}">

                        @error('category_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="kd_barang">Kode Barang</label>
                        <input type="text" class="form-control @error('kd_barang') is-invalid @enderror" id="kd_barang" name="kd_barang" value="{{ $product['kd_barang'] }}" readonly placeholder="Masukan Kode Barang.....">
                        @error('kd_barang')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="name">Nama Barang</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $product['name'] }}" placeholder="Masukan Nama Barang.....">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    {{-- <div class="form-group mt-3">
                        <label for="description">Deskripsi</label>
                        <input type="text" class="form-control" id="description" name="description" value="{{ $product['description'] }}" placeholder="Masukan Deskripsi Barang.....">
                    </div> --}}
                    <div class="form-group mt-3">
                        <label for="price">Harga</label>
                        <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ $product['price'] }}" placeholder="Masukan Harga Barang....." min="0">
                        @error('price')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="tgl_rilis">Tanggal Rilis</label>
                        <input type="datetime-local" class="form-control @error('tgl_rilis') is-invalid @enderror" id="tgl_rilis" name="tgl_rilis" value="{{ $product['tgl_rilis'] }}" placeholder="Masukan Tanggal Rilis.....">
                        @error('tgl_rilis')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="name">Deskripsi</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" placeholder="Masukan Deskripsi Barang.....">{{ $product['description'] }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
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
