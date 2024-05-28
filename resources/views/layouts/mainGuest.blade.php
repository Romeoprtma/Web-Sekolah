<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://unpkg.com/feather-icons"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
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

        function login() {
      window.location.href = "/login";
    }
  
    function toggleMenu() {
            const navLinks = document.querySelector('.nav-links');
            navLinks.classList.toggle('hidden');
        }
    
  
    document.querySelectorAll('nav ul li a').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        e.preventDefault();
  
        document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
        });
  
        if (window.innerWidth <= 768) {
          let menuIcon = document.querySelector('ion-icon[name="close"]');
          if (menuIcon) {
            toggleMenu(menuIcon);
          }
        }
      });
    });

    // Tambahkan kode JavaScript untuk menandai tombol navigasi yang aktif
    </script>
</body>
</html>