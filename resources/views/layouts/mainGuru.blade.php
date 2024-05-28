<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://unpkg.com/feather-icons"></script>
    @vite('resources/css/app.css')

    <title>Halaman Guru</title>
</head>
<body class="bg-[#ffffff] font-sans">

    @include('partials.navbarGuru')

    <div class="mt-4">
        @yield('profilGuru')
        @yield('jadwalUas')
        @yield('jadwalUts')
        @yield('index')
        @yield('informasi')
        @yield('hasilDataGuru')
        @yield('isiPesanGuru')
        @yield('lihatPesanGuru')
    </div>

    @include('partials.footer')

    <!-- Tambahkan script.js di sini -->
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        feather.replace();
        function toggleMenu() {
            const navLinks = document.querySelector('.nav-links');
            navLinks.classList.toggle('hidden');
        }

        function login() {
    window.location.href = "/login";
}
    </script>
</body>
</html>
