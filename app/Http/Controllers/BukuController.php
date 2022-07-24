<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{

    public function index()
    {
        $data = [
            'title' => "Details Buku",
            'buku' => Buku::all()
        ];
        return view('buku.index')->with($data);
    }

    public function create()
    {
        $data = [
            'title' => "Insert Data Buku"
        ];
        return view('buku.create')->with($data);
    }

    public function save(Request $request)
    {
        //dd($request->except(['_token', 'submit']));
        //yang tidak masukan kedalam database adalah _token dan submit
        Buku::create($request->except(['_token', 'submit']));
        return redirect('/buku');
    }
}
