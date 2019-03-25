<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
        $nama = "Insan Nurzaman";
        $pelajaran = ["Algoritma dan Pemograman", "Kalkulus", "Pemograman Web"];
        return view('biodata',['namasiapa'=> $nama, 'matkul'=> $pelajaran]);
    }
}
