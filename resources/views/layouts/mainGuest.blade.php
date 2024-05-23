<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://unpkg.com/feather-icons"></script>
    @vite('resources/css/app.css')
    <title>Selamat Datang</title>
</head>
<body class="bg-[#ffffff]  font-sans">

    @include('partials.navbarGuest')

    <div class="mt-4">
        @yield('home')
        {{-- @yield('sejarah')
        @yield('visiMisi')
        @yield('kurikulum')
        @yield('fasilitas')
        @yield('programUnggulan')
        @yield('ppdb')
        @yield('kontak') --}}
    </div>

    @include('partials.footer')
    <script>
        feather.replace();

    // Tambahkan kode JavaScript untuk menandai tombol navigasi yang aktif
    </script>
</body>
</html>