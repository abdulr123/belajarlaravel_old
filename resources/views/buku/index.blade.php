@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Halaman Detail Buku') }}</div>

                <div class="card-body">
                    <a href="/buku/create"class="btn btn-primary">Tambah Data</a>
                    <table class="table caption-top">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul Buku</th>
                            <th>Penulis Buku</th>
                            <th>Penerbit Buku</th>
                            <th>Tahun Terbit</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        
                        @php $no = 1; @endphp
                        @foreach ($buku as $b)   
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $b->judul }}</td>
                            <td>{{ $b->penulis }}</td>
                            <td>{{ $b->penerbit }}</td>
                            <td>{{ $b->tahun_terbit }}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <div>                                  
                                    <a href="/buku/{{ $b->id }}/edit" class="btn btn-warning me-2 ">Edit</a>
                                    </div>   
                                                                                               
                                    <form action="/buku/{{ $b->id }}" method="POST">
                                        @csrf
                                        <input type="submit" class="btn btn-danger" value="Hapus">
                                    </form>
                                    
                                    
                                </div>

                            </td>
                        </tr>
                        
                        @endforeach
                    </table>
                    @endsection

                </div>
            </div>
        </div>
    </div>
</div>
