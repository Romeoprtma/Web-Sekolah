<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>halaman guru</title>
</head>
<body class="bg-[#ffffff]  font-sans">

    @include('partials.navbarGuru')

    <div class="mt-4">
        @yield('profilGuru')
        @yield('index')
        @yield('isiPesan')
        @yield('inputDataGuru')
        @yield('lihatPesan')
        @yield('hasilDataGuru')
    </div>

    @include('partials.footer')

</body>
</html>