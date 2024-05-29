<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <title>halaman Admin</title>
</head>
<body class="bg-[#ffffff] font-sans">
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    
    <div class="flex flex-col h-screen md:flex-row bg-gray-200">
        <!-- Sidebar -->
        <div class="bg-white w-full md:w-64 px-4 md:px-8 py-12">
            <h2 class="text-3xl font-semibold mb-8">Dashboard</h2>
            @include('admin.layouts.sidebar')
        </div>
     
        <!-- Main Content -->
        <div class="flex-1 pt-10 px-4 md:px-8">
            @yield('inputDataGuru')
            @yield('inputDataSiswa')
            @yield('hasilDataGuru')
            @yield('hasilDataSiswa')
            @yield('editGuru')
            @yield('editSiswa')
        </div>
     </div>
     
    <script>

        feather.replace();
    </script>
</body>
</html>
