@extends('layouts.main')

@section('container')
<h1>Tambah Data Buku</h1>

<div class="border p-3">
    <form action="/buku/save" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Judul Buku</label>
            <input type="text" class="form-control" name="judul" placeholder="Belajar Laravel 9">
        </div>
        <div class="mb-3">
            <label class="form-label">Nama Penulis</label>
            <input type="text" class="form-control" name="penulis" placeholder="Abdul Rahman, M.Kom">
        </div>
        <div class="mb-3">
            <label class="form-label">Penerbit Buku</label>
            <input type="text" class="form-control" name="penerbit" placeholder="Informatika Fakultas Teknik dan Komputer Universitas Baturaja">
        </div>
        <div class="mb-3">
            <label class="form-label">Tahun Terbit</label>
            <input type="text" class="form-control" name="tahun_terbit" placeholder="2022">
        </div>

        <button type="submit" class="btn btn-info">Simpan</button>
    </form>
</div>

@endsection