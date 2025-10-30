@extends('layouts.app')
@section('title', 'Tambah Buku')
@section('content')
    <div class="py-4">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item">
                    <a href="#">
                        <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                            </path>
                        </svg>
                    </a>
                </li>
                <li class="breadcrumb-item"><a href="#">Buku</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Buku</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">Tambah Buku</h1>
                <p class="mb-0">Form untuk menambahkan data Buku baru.</p>
            </div>
            <div>
                <a href="" class="btn btn-primary"><i class="far fa-question-circle me-1"></i> Kembali</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 mb-4">
            <div class="card border-0 shadow components-section">
                <div class="card-body">
                    <form action="{{ route('buku.store') }}" method="POST">
                        @csrf
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="row mb-5">
                            <div class="col-lg-5 col-sm-6">
                                <!-- Judul -->
                                <div class="mb-3">
                                    <label for="judul" class="form-label">Judul</label>
                                    <input type="text" id="judul" name="judul" class="form-control"
                                        value="{{ old('judul') }}" required>
                                </div>
                                <!-- Penulis -->
                                <div class="mb-3">
                                    <label for="penulis" class="form-label">Penulis</label>
                                    <input type="text" id="penulis" name="penulis" class="form-control"
                                        value="{{ old('penulis') }}" required>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <!-- Penerbit -->
                                <div class="mb-3">
                                    <label for="penerbit" class="form-label">Penerbit</label>
                                    <input type="date" id="penerbit" name="penerbit" class="form-control"
                                        value="{{ old('penerbit') }}">
                                </div>
                                <!-- Tahun Terbit -->
                                <div class="mb-3">
                                    <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                                    <input type="date" id="tahun_terbit" name="tahun_terbit" class="form-control"
                                        value="{{ old('tahun_terbit') }}">
                                </div>
                                <!-- Jumlah -->
                                <div class="mb-3">
                                    <label for="jumlah" class="form-label">Jumlah Eksemplar</label>
                                    <input type="text" id="jumlah" name="jumlah" class="form-control"
                                        value="{{ old('jumlah') }}" required>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection
