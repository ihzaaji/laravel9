@extends('index')
@section('dosen')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                <h1 class="text text-center" style="margin-top: 70px ">Data Dosen</h1>
                <ol class="list-group list-group-numbered">
                    @foreach ($dosen as $dos)
                        <li class="list-group-item">{{$dos}}</li>
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
@stop