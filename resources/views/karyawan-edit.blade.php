@extends('layout.mainlayout')

@section('title', 'Edit Product')

@section('content')
<div class="container-fluid mt-3">
    <h2 class="text-center">Mengubah Data Karyawan</h2>

    <form action="/karyawan/{{ $karyawan['id'] }}" method="POST">
    @method('PUT')
    @csrf
    <div class="container mt-5 d-flex justify-content-center">
        <div class="card" style="width: 38rem;">
            <div class="card-body ">
                <div class="container-fluid">
                    <h5 class="card-title text-center">Update Produk</h5>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" id="name" name="name" value="{{ $karyawan['name'] }}" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" value="{{ $karyawan['email'] }}" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="container my-3 d-flex justify-content-center">
                <button class="btn btn-dark mx-3" type="submit">Update</button>
                <a href="/karyawan" class="btn btn-danger mx-3">Batal</a>
            </div>
        </div>


    </form>
</div>
@endsection
