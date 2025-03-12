@extends('layout.mainlayout')

@section('tilte', 'Dashboard')

@section('content')
@if (session('successlogin'))
<script>
    Swal.fire({
        position: "top-end",
        icon: "success",
        title: "Berhasil Login",
        showConfirmButton: false,
        timer: 1500
        });
</script>
@endif


<div class="container py-5 mt-5">
    <div class="col-lg-12 mb-3">
        <h2>Selamat Datang, <strong>{{ Auth::user()->name }}</strong> . Anda adalah <strong class="text-warning">{{
                Auth::user()->role['name'] }}</strong>.</h2>
    </div>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1 fs-3">
                                <Strong>Total Barang</Strong>
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800 fs-3">{{ $totalProducts }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-archive fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if (Auth::user()->role_id != 1)
        @else
        <div class="col-xl-3 col-md-6">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1 fs-3">
                                <Strong>Total User</Strong>
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800 fs-3">{{ $totalUsers }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection
