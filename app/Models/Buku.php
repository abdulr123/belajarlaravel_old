<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    //untuk memberitahu laravel bahwa  
    protected $table = 'buku';

    //protected $fillable = ['id','judul','penulis','penerbit','tahun_terbit'];
    //jika field nya lebih dari 10 maka kita bisa menggunakan teknik seperti dibawah ini
    protected $guarded = [];
    //artinya guarded adalah semua field tidak ada yang dijaga, atau boleh di isi semuanya

}
