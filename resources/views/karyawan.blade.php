@extends('layout.mainlayout')

@section('title', 'Karyawan')

@section('content')


<div class="container-fluid px-5">
    @if (session('successtambah'))
    <script>
        Swal.fire({
        position: "top-end",
        icon: "success",
        title: "Data berhasil ditambahkan",
        showConfirmButton: false,
        timer: 1500
        });
    </script>
    @elseif (session('successupdate'))
    <script>
        Swal.fire({
        position: "top-end",
        icon: "success",
        title: "Data berhasil diUpdate",
        showConfirmButton: false,
        timer: 1500
        });
    </script>
    @elseif(session('success'))
    <script>
        Swal.fire({
        position: "top-end",
        icon: "success",
        title: "Data berhasil dihapus",
        showConfirmButton: false,
        timer: 1500
        });
    </script>
    @endif
    {{-- @if (Session::has('success'))
            <div class="alert alert-success" role="alert" id="success-alert">
                {{ Session::get('message') }}
            </div>
    @elseif (Session::has('error'))
            <div class="alert alert-danger" role="alert">
                {{ Session::get('message') }}
            </div>
    @endif --}}

    <div class="container d-flex justify-content-between" style="margin-top: 75px;">
        <h3>List Karyawan</h3>
    </div>

    <div class="container my-3 d-flex w-100 justify-content-between">
        @if (Auth::user()->role_id != 1)
        @else
        <div class="d-flex">
            <a href="/karyawan-add" class="btn btn-dark">&plus; Tambah Karyawan</a>
        </div>
        @endif
    </div>

    <div class="container d-flex justify-content-end">
        <div class="my-2 col-12 col-sm-8 col-md-5">
            <form action="" method="get">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="search" placeholder=" Cari karyawan....">
                    <button type="submit" class="input-group-text btn btn-dark"><i class="fa fa-search"></i></button>
                </div>
            </form>
        </div>
    </div>

    <table class="table table-bordered table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                @if (Auth::user()->role_id != 1)
                    @else
                <th scope="col">Aksi</th>
                @endif
            </tr>
        </thead>
        <tbody>

            @foreach ($karyawanList as $data)
            <tr>
                <td scope="row">{{ $loop->iteration }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->email }}</td>

                @if (Auth::user()->role_id != 1)
                @else
                <td>
                    {{-- <a href="" class="btn btn-primary">Detail</a> --}}
                    <a href="karyawan-edit/{{ $data->id }}" class="btn btn-warning ms-3">Ubah</a>
                    <a href="karyawan-delete/{{ $data->id }}" class="btn btn-danger ms-3">Hapus</a>
                </td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="my-5">
        {{ $karyawanList->withQueryString()->links() }}
    </div>

</div>

@endsection
