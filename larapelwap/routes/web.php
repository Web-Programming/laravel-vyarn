<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// buat route halaman profil

Route::get('/profile', function () {
    return view('profile');
});

// route dengan parameter

// Route::get('/ mahasiswa/{nama?}', function ($nama = 'Karina') {
//     echo "<h2>hlow smwanya</h2>";
//     echo "Nama saya $nama";
// });
 // route dengan parameter >1

 Route::get('/mahasiswa/{nama?}/{pekerjaan?}', function ($nama = 'Karina', $pekerjaan
  = 'mahasiswa'){
    echo "<h2>Hloww smwanyh</h2>";
    echo "Nama saya $nama, sebagai $pekerjaan";
  });

  //redirect

  Route::get("/hubungi", function(){
    echo "<h1Contact Us</h1>";
  })->name('/call');

  Route::redirect("/contact", "/hubungi");

  Route::get("/halo", function(){
    echo "<a href=", route('call'), "'>", "</a>";
  });

  Route::prefix('/dosen')->group(function(){
    Route::get('/jadwal', function() {
        echo "<h2>jadwal</h2>";
    });

    Route::get('/jadwal', function() {
        echo "<h2>materi perkuliahan</h2>";
    });
    });