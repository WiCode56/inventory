@extends('layout.mainlayout')

@section('title','Product')

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


    <div class="container d-flex justify-content-center" style="margin-top:100px;">
        <form action="{{ route('add.product') }}" method="POST">
            @csrf
            <div class="card" style="width: 38rem;">
                <div class="card-body py-4">
                    <div class="container-fluid">
                        <h5 class="card-title text-start">Tambah Produk</h5>
                        <div class="form-group mt-3">
                            <label for="category_id">Kategori Barang</label>
                            <select class="form-control @error('category_id') is-invalid @enderror" id="category_id"
                                name="category_id">
                                <option value="">-- Pilih Kategori --</option>
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}"
                                    data-prefix="{{ strtolower(substr($category->name, 0, 4)) }}">
                                    {{ $category->name }}
                                </option>
                                @endforeach
                                @error('category_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </select>
                        </div>

                        <div class="form-group mt-3">
                            <label for="kd_barang">Kode Barang</label>
                            <input type="text" class="form-control @error('kd_barang') is-invalid @enderror"
                                id="kd_barang" name="kd_barang" placeholder="Masukan Kode Barang....." readonly>
                            @error('kd_barang')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <script>
                            document.getElementById("category_id").addEventListener("change", function() {
                                let selectedOption = this.options[this.selectedIndex];
                                let prefix = selectedOption.getAttribute("data-prefix");

                                if (prefix) {
                                    fetch(`/get-latest-code?prefix=${prefix}`)
                                        .then(response => response.json())
                                        .then(data => {
                                            document.getElementById("kd_barang").value = prefix + '-' + data.next_number;
                                        })
                                        .catch(error => console.error('Error:', error));
                                } else {
                                    document.getElementById("kd_barang").value = "";
                                }
                            });
                        </script>

                        <div class="form-group mt-3">
                            <label for="name">Nama Barang</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" placeholder="Masukan Nama Barang.....">
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <label for="name">Harga</label>
                            <input type="number" class="form-control @error('price') is-invalid @enderror" id="price"
                                name="price" placeholder="Masukan Harga Barang....." min="0">
                            @error('price')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <label for="name">Tanggal Rilis</label>
                            <input type="datetime-local" class="form-control @error('tgl_rilis') is-invalid @enderror"
                                id="tgl_rilis" name="tgl_rilis" placeholder="Masukan Tanggal Rilis.....">
                            @error('tgl_rilis')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <label for="name">Deskripsi</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" name="description"
                                id="description" placeholder="Masukan Deskripsi Barang....."></textarea>
                            @error('description')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group text-end mt-3">
                            <button class="btn btn-dark" type="submit">Tambah</button>
                            <a href="product" class="btn btn-danger">Batal</a>
                        </div>
                    </div>


                </div>
            </div>

    </div>
    </form>
</div>
</div>
@endsection
