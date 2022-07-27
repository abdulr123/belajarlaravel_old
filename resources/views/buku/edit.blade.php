@extends('layouts.main')

@section('container')
<h1>Edit Data Buku</h1>

<div class="border p-3">
    <form action="/buku/{{ $buku->id }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Judul Buku</label>
            <input type="text" class="form-control" name="judul" value="{{ $buku->judul }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Nama Penulis</label>
            <input type="text" class="form-control" name="penulis" value="{{ $buku->penulis }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Penerbit Buku</label>
            <input type="text" class="form-control" name="penerbit" value="{{ $buku->penerbit }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Tahun Terbit</label>
            <input type="text" class="form-control" name="tahun_terbit" value="{{ $buku->tahun_terbit }}">
        </div>

        <a href="/buku" class="btn btn-warning">Kembali</a>
        <button type="submit" class="btn btn-info">Edit</button>
    </form>
</div>

@endsection