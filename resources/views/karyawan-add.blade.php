@extends('layout.mainlayout')

@section('title','Karyawan')

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

    <form action="karyawan-tambah" method="POST">
    @csrf
    <div class="container d-flex justify-content-center" style="margin-top:100px;">
        <div class="card" style="width: 38rem;">
            <div class="card-body ">
                <input type="hidden" id="role_id" name="role_id" value="2" class="form-control" required>
                <div class="container-fluid">
                    <h5 class="card-title text-center">Tambah Karyawan</h5>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" name="password" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="container my-3 d-flex justify-content-center">
                <button class="btn btn-dark mx-3" type="submit">Tambah</button>
                <a href="karyawan" class="btn btn-danger mx-3">Batal</a>
            </div>
        </div>

        </form>
    </div>
</div>
@endsection
