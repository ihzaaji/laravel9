<!DOCTYPE html>
<html lang="en">
<head>
    @include('head')
</head>
<body>
    <div>
        @include('nav')
    </div>
    <div class="content">
        @yield('mhs')
        @yield('dosen')
        @yield('gallery')
    </div>

    <div class=" text-center">
        @include('footer')
    </div>
    
</body>
</html>