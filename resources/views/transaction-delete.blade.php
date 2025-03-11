@extends('layout.mainlayout')

@section('title', 'Hapus Transaksi')

@section('content')
<div class="container-fluid" style="margin-top: 75px;">
    <div class="container mt-5">
        <h3>Apakah Anda Yakin Menghapus Product : <Strong> {{ $transaction['name'] }} </Strong>?</h3>
        <form class="" style="display:inline-block" action="/product-destroy/{{ $transaction->id }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Hapus</button>
        </form>
        <a href="/transacion" class="btn btn-secondary">Batal</a>

    </div>
</div>
@endsection
