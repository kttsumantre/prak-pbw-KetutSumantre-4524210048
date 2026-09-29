@extends('layouts.app')

@section('content')
<div class="p-5 mb-4 bg-white rounded-3 shadow-sm border">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold text-primary">Selamat Datang di LaraPress!</h1>
        <p class="col-md-8 fs-4 text-secondary">Website keren yang dibangun menggunakan framework Laravel 12 dan desain modern dari Bootstrap.</p>
        <a href="{{ url('/about') }}" class="btn btn-primary btn-lg" type="button">Pelajari Tentang Kami</a>
    </div>
</div>
@endsection