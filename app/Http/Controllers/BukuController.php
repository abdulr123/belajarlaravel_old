<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        return view('buku', [
            "title" => "Buku",
            //Buku disini digunakan untuk menampilkan semua data pada Model Buku
            "buku" => Buku::all()
        ]);
    }
}
