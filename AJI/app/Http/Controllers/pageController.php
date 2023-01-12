<?php

namespace App\Http\Controller;

class pageController extends Controller

{
    public function index()
    {
        return view('welcome');
    }
    public function tampil(){
        $arrMahasiswa = ["yaya", "yuyu", "ysys"];
        return view('mahasiswa')->with('mahasiswa', $arrMahasiswa);
    }
}