@extends('layout')

@section('content')
    <h1>Detail Ekstrakurikuler</h1>

    <div class="card mt-3">
        <div class="card-body">
            <h5 class="card-title">{{ $eskul->nama_eskul }}</h5>
            <p class="card-text"><strong>Guru:</strong> {{ $eskul->guru }}</p>
            <p class="card-text"><strong>Ruangan:</strong> {{ $eskul->ruangan }}</p>
            <p class="card-text"><strong>Jadwal:</strong> {{ $eskul->jadwal }}</p>
            <p class="card-text"><strong>Deskripsi:</strong> {{ $eskul->deskripsi }}</p>
            <a href="{{ route('eskul.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
@endsection