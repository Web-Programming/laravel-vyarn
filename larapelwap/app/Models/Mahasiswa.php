<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    // jika nama table berbeda
    protected $table = "mahasiswas";

    protected $fillable = ['npm', 'nama',
     'tempat_lahir', 'tanggal_lahir'];
    // mengatur yang tidak perlu di isi
    protected $guarded = [];
}
