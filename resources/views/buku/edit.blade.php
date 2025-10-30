@extends('layouts.app')
@section('title', 'Edit Buku')
@section('content')
    <h1>Edit Buku</h1>

    <form action="{{ route('buku.update', $buku->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Judul</label>
            <input type="text" name="judul" value="{{ old('judul', $buku->judul) }}" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Penulis</label>
            <input type="text" name="penulis" value="{{ old('penulis', $buku->penulis) }}" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Penerbit</label>
            <input type="text" name="penerbit" value="{{ old('penerbit', $buku->penerbit) }}" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Tahun Terbit</label>
            <input type="number" name="tahun_terbit" value="{{ old('tahun_terbit', $buku->tahun_terbit) }}"
                class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Jumlah</label>
            <input type="number" name="jumlah" value="{{ old('jumlah', $buku->jumlah) }}" class="form-control"
                min="1">
        </div>

        <button class="btn btn-primary">Perbarui</button>
        <a href="{{ route('buku.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection
