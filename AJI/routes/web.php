<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\pageController;

Route::get('/', [pageController::class, 'index']);
Route::get('/mahasiswa', [pageController::class,'tampil']);

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

/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('/home');
});

Route::get('/mahasiswa', function () {
    $arrMahasiswa = ["Ihza Dirgantara Aji","Maulana Hadinata","Rudi Irawan","Lisa Permata","Rizal Mahendra"];

    return view('mahasiswa')->with('mahasiswa', $arrMahasiswa);
});

Route::get('/dosen', function () {
    $arrDosen = ["Maemun Saleh S.Kom","Saeful Hamdi M.Kom","Haerul Fahmi M.Kom","jihadul Akbar S.Kom"];

    return view('dosen')->with('dosen', $arrDosen);
});

Route::get('/gallery', function () {
    return view('gallery');
});
*/

Route::get('/mahasiswa', function () {
    return view('index');
});



