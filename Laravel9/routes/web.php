<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa1', function () {
    $arrMahasiswa1 = ["Risa Lestari","Rudi Hermawan","Bambang Kusumo","Lisa Permata","Gunawan"];

    return view('mahasiswa1')->with('mahasiswa', $arrMahasiswa1);
});

Route::get('/dosen', function () {
    $arrDosen = ["Maemun Saleh S.Kom","Saeful Hamdi M.Kom","Haerul Fahmi M.Kom","Khairul Imtihan M.Kom"];

    return view('dosen')->with('dosen', $arrDosen);
});

Route::get('/gallery', function () {
    return view('gallery');
});


//include
Route::get('/.', function () {

    return view('pages.content');
});










  












 


