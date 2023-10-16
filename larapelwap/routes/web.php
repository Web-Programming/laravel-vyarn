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

// buat route halaman dosen

Route::get('/dosen', function () {
    return view('dosen');
});


Route::get('/dosen/index', function() {
  return view ('dosen.index');
});


// route fakultas

Route::get('fakultas', function(){
  //return view ('fakultas.index', ["ilkom" => "Fakultas Ilmu Komputer dan 
  //Rekayasa"]);
//   return view('fakultas.index', ["fakultas" => ["Fakultas Ilmu Komputer dan
//    Rekayasa", "Fakultas Ekonomi dan Bisnis"]]);
//return view('fakultas.index')->with("fakultas", ["Fakultas Ilmu Komputer
//dan Rekayasa", "Fakultas Ekonomi dan Bisnis"]);
// $fakultas = ["Fakultas Ilmu Komputer dan Rekayasa", "Fakultas Ekonomi dan Bisnis"];
// return view ('fakultas.index', compact('fakultas'));

$kampus = "Universitas Multi Data Palembang";
//$fakultas = [];
$fakultas = ["Fakultas Ilmu Komputer dan Rekayasa", "Fakultas Ekonomi dan Bisnis"];
return view('fakultas.index', compact('fakultas', 'kampus'));
});