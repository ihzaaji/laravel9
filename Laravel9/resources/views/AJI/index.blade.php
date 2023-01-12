<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{'title'}}</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/assets/img/logo.jpg" alt="Bootstrap" width="30" height="24">
            </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="/mahasiswa">Data Mahasiswa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="/dosen">Data Dosen</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="/gallery">Gallery</a>
            </li>
            </ul>
        </div>
        </div>
    </nav>



    <div class="content">
        @yield('rumah')
        @yield('mhs')
        @yield('dosen')
        @yield('gallery')
    </div>

    <footer class="bg-secondary text-white fixed-bottom">
        <div class="text-center p-3" style="background-color: rgb(4, 204, 249);">
        © 2020 Copyright:
        </div>
    </footer>
    
</body>
</html>