@extends('index')
@section('mhs')
@section('title','data mhs')

    <div class="container">
        <div class="row justify-content-center">
        <div class="col-4">
            <h1 class="text text-center" style="margin-top: 70px ">Data Mahasiswa</h1>
            <ol class="list-group list-group-numbered">
                
                @foreach ($mahasiswa as $mhs)
                <li class="list-group-item">{{$mhs}}</li>
                @endforeach
            </ol>
        </div>
        </div>
    </div>

@stop