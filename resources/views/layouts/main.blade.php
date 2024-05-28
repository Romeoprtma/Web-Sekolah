<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://unpkg.com/feather-icons"></script>
    @vite('resources/css/app.css')
    <title>Halaman Siswa</title>
</head>
<body class="bg-[#ffffff]  font-sans">

    @include('partials.navbarSiswa')

    <div class="mt-4">
        @yield('profilSiswa')
        @yield('hasilDataSiswas')
        @yield('isiPesan')
        @yield('lihatPesan')
    </div>

    @include('partials.footer')
    <script>
        feather.replace();

        function toggleMenu() {
            const navLinks = document.querySelector('.nav-links');
            navLinks.classList.toggle('hidden');
        }
    </script>
</body>
</html>