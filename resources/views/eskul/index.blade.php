@extends('layout')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Daftar Ekstrakurikuler</h1>
        <a href="{{ route('eskul.create') }}" class="btn btn-primary">Tambah Eskul</a>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Eskul</th>
                <th>Guru</th>
                <th>Ruangan</th>
                <th>Jadwal</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($eskuls as $eskul)
                <tr>
                    <td>{{ $eskul->nama_eskul }}</td>
                    <td>{{ $eskul->guru }}</td>
                    <td>{{ $eskul->ruangan }}</td>
                    <td>{{ $eskul->jadwal }}</td>
                    <td>{{ $eskul->deskripsi }}</td>
                    <td class="d-flex">
                        <a href="{{ route('eskul.show', $eskul->id) }}" class="btn btn-info btn-sm me-2">Lihat</a>
                        <a href="{{ route('eskul.edit', $eskul->id) }}" class="btn btn-warning btn-sm me-2">Edit</a>
                        <form action="{{ route('eskul.destroy', $eskul->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection