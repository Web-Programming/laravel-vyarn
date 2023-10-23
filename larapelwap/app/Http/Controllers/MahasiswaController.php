<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function insertElq () {
        // $mahasiswa = new Mahasiswa;
        // $mahasiswa->npm = '2226250058';
        // $mahasiswa->nama_mahasiswa = "Karina";
        // $mahasiswa->tempat_lahir = "Bikini Bottom";
        // $mahasiswa->tanggal_lahir - date("23-04-2005");
        // $mahasiswa->save();  // nyimpen data mahasiswa
        // dump($mahasiswa); // melihat isi $mahasiswa

        // mask assigment (kalau datanya banyak)
        $mhs = Mahasiswa::insert(
        ['nama' => 'Karina',
        'npm' => '2226250058',
        'tempat_lahir' => 'Bikini Bottom',
        'tanggal_lahir' => '2005-04-23'
        ],
        ['nama' => 'Jane',
        'npm' => '2227280067',
        'tempat_lahir' => 'Rock Bottom',
        'tanggal_lahir' => '1998-04-09'
        ]
    );
    dump($mhs);
}

    public function updateElq ()
    {
        $mahasiswa = Mahasiswa::where('npm', '2227690087')->first();
        // cari data tabel mahasiswas berdasarkan npm
        $mahasiswa->nama = 'Jane';
        $mahasiswa->save(); // menyimpan data ke tabel mahasiswas
        dump($mahasiswa); // melihat isi $mahasiswa
    }

    public function deleteElq ()
    {
        $mahasiswa = Mahasiswa::where('npm', '1923240001')->first();
        $mahasiswa->delete();
        dump($mahasiswa);
    }

    public function selectElq()
    {
        $kampus = "Universitas Multi Data Palembang";
        $mahasiswa = Mahasiswa::all();
        // dump($allmahasiswa);
        return view('mahasiswa.index', ['allmahasiswa' => $mahasiswa, 'kampus' =>
        $kampus]);
    }
}
