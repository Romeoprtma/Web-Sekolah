<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class="bg-[#ffffff]  font-sans">

    @include('partials.navbarSiswa')

    <div class="mt-4">
        @yield('profilSiswa')
        @yield('isiPesan')
        @yield('inputDataSiswa')
        @yield('lihatPesan')
        @yield('hasilData')
    </div>

    @include('partials.footer')

</body>
</html>