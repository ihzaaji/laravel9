@extends('index')
@section('mhs')

    <div class="container">
        <div class="row justify-content-center">
        <div class="col-4">
            <h1 class="text text-center" style="margin-top: 70px ">DATA MAHASISWA</h1>
            <ol class="list-group list-group-numbered">
                
                @foreach ($mahasiswa as $mhs)
                <li class="list-group-item" style="background-color: #e3f2fd;">{{$mhs}}</li>
                @endforeach
            </ol>
        </div>
        </div>
    </div>

@stop