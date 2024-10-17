@extends('layout')

@section('content')
    <h1>Edit Ekstrakurikuler</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('eskul.update', $eskul->id) }}" method="POST" class="mt-3">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama_eskul" class="form-label">Nama Eskul Produktif</label>
            <input type="text" name="nama_eskul" class="form-control" value="{{ $eskul->nama_eskul }}" required>
        </div>

        <div class="mb-3">
            <label for="guru" class="form-label">Guru</label>
            <input type="text" name="guru" class="form-control" value="{{ $eskul->guru }}" required>
        </div>

        <div class="mb-3">
            <label for="ruangan" class="form-label">Ruangan</label>
            <input type="text" name="ruangan" class="form-control" value="{{ $eskul->ruangan }}" required>
        </div>

        <div class="mb-3">
            <label for="jadwal" class="form-label">Jadwal</label>
            <input type="text" name="jadwal" class="form-control" value="{{ $eskul->jadwal }}" required>
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" class="form-control">{{ $eskul->deskripsi }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection