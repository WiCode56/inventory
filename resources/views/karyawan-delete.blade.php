@extends('layout.mainlayout')

@section('title', 'Karyawan Delete')

@section('content')
<div class="container-fluid" style="margin-top: 75px;">
    <div class="container mt-5">
        <h3>Apakah Anda Yakin Menghapus Karyawan : <Strong> {{ $karyawan['name'] }} </Strong>?</h3>
        <form class="" style="display:inline-block" action="/karyawan-destroy/{{ $karyawan->id }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Hapus</button>
        </form>
        <a href="/karyawan" class="btn btn-secondary">Batal</a>

    </div>
</div>
@endsection
