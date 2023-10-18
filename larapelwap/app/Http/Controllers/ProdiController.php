<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    //
    public function index()
    {
        $kampus = "Universitas Multi Data Palembang";
        return view('prodi.index')->with('kampus',$kampus);
    }
}
