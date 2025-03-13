@extends('layout.mainlayout')

@section('title', 'Product')

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
        <h3>List Barang</h3>
    </div>

    <div class="container my-3 d-flex w-100 justify-content-between">
        @if (Auth::user()->role_id != 1)
        @else
        <div class="d-flex">
            <a href="/product-add" class="btn btn-dark">&plus; Tambah Barang</a>
        </div>
        @endif
    </div>

    <div class="container row-flex justify-content-end">
        <div class="my-2 col-12 col-sm-8 col-md-5">
            <form action="" method="get">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" autocomplete="off" name="search" value="{{ request()->get('search', old('search')) }}"  placeholder=" Cari barang....">
                    <button type="submit" class="input-group-text btn btn-dark"><i class="fa fa-search"></i></button>
                </div>
            </form>
        </div>


        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Kode Barang</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Rilis</th>
                    @if (Auth::user()->role_id != 1)
                        @else
                    <th scope="col">Aksi</th>
                    @endif
                </tr>
            </thead>
            <tbody>

                @foreach ($productList as $data)
                <tr>
                    <td scope="row">{{ $loop->iteration ?? 'tidak diisi' }}</td>
                    <td>{{ $data->kd_barang ?? 'tidak diisi' }}</td>
                    <td>{{ $data->name ?? 'tidak diisi' }}</td>
                    <td>{{ $data->description ?? 'tidak diisi' }}</td>
                    <td>Rp. {{ number_format($data->price, 0 ,',', '.') }}/item</td>
                    <td>{{ $data->tgl_rilis ?? 'tidak diisi' }}</td>
                    @if (Auth::user()->role_id != 1)
                    @else
                    <td>
                        {{-- <a href="" class="btn btn-primary">Detail</a> --}}
                        <a href="product-edit/{{ $data->id }}" class="btn btn-warning">Ubah</a>
                        <a href="product-delete/{{ $data->id }}" class="btn btn-danger">Hapus</a>
                    </td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="my-5">
            {{ $productList->withQueryString()->links() }}
        </div>
    </div>

</div>

@endsection
