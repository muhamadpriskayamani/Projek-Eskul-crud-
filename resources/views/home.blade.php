@extends('layout')

@section('content')
<div class="jumbotron text-center bg-light p-5">
    <h1 class="display-4">Selamat Datang di Eskul Produktif!</h1>
    <p class="lead">Temukan dan ikuti ekstrakurikuler yang menarik sesuai minat dan bakatmu.</p>
    <hr class="my-4">
    <p>Website ini menyediakan berbagai fitur untuk mengelola dan menemukan ekstrakurikuler di sekolahmu.</p>
    <a class="btn btn-primary btn-lg" href="{{ route('eskul.index') }}" role="button">Lihat Daftar Eskul</a>
</div>

<!-- Fitur Unggulan -->
<div class="row mt-5">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Daftar Eskul</h5>
                <p class="card-text">Lihat seluruh daftar ekstrakurikuler yang tersedia di sekolahmu.</p>
                <a href="{{ route('eskul.index') }}" class="btn btn-primary">Lihat Eskul</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Tambah Eskul</h5>
                <p class="card-text">Tambah ekstrakurikuler baru dengan mudah melalui fitur tambah eskul.</p>
                <a href="{{ route('eskul.create') }}" class="btn btn-success">Tambah Eskul</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Manajemen Eskul</h5>
                <p class="card-text">Kelola ekstrakurikuler yang ada, termasuk edit dan hapus data eskul.</p>
                <a href="{{ route('eskul.index') }}" class="btn btn-warning">Kelola Eskul</a>
            </div>
        </div>
    </div>
</div>
@endsection