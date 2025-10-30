@extends('layouts.app')
@section('title', 'Tambah Buku')
@section('content')
    <h1>Tambah Buku</h1>

    <form action="{{ route('buku.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Judul</label>
            <input type="text" name="judul" value="{{ old('judul') }}" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Penulis</label>
            <input type="text" name="penulis" value="{{ old('penulis') }}" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Penerbit</label>
            <input type="text" name="penerbit" value="{{ old('penerbit') }}" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Tahun Terbit</label>
            <input type="number" name="tahun_terbit" value="{{ old('tahun_terbit') }}" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Jumlah</label>
            <input type="number" name="jumlah" value="{{ old('jumlah', 1) }}" class="form-control" min="1">
        </div>

        <button class="btn btn-success">Simpan</button>
        <a href="{{ route('buku.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection
