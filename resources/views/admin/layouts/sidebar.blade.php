<nav>
    <a href="/admin/inputDataGuru" class="flex items-center py-2.5 px-4 rounded transition duration-200 hover:bg-blue-500 hover:text-white {{ request()->is('admin/inputDataGuru') ? 'bg-blue-500 text-white' : '' }}">
        Input Data Guru
    </a>
    <a href="/admin/inputDataSiswa" class="flex items-center py-2.5 px-4 rounded transition duration-200 hover:bg-blue-500 hover:text-white {{ request()->is('admin/inputDataSiswa') ? 'bg-blue-500 text-white' : '' }}">
        Input Data Siswa
    </a>
    <a href="/admin/hasilDataGuru" class="flex items-center py-2.5 px-4 rounded transition duration-200 hover:bg-blue-500 hover:text-white {{ request()->is('admin/hasilDataGuru') ? 'bg-blue-500 text-white' : '' }}">
        Hasil Data Guru
    </a>
    <a href="/admin/hasilDataSiswa" class="flex items-center py-2.5 px-4 rounded transition duration-200 hover:bg-blue-500 hover:text-white {{ request()->is('admin/hasilDataSiswa') ? 'bg-blue-500 text-white' : '' }}">
        Hasil Data Siswa
    </a>
    <a href="/login" class="flex items-center py-2.5 px-4 rounded transition duration-200 hover:bg-blue-500 hover:text-white {{ request()->is('login') ? 'bg-blue-500 text-white' : '' }}">
        <span class="mr-3" data-feather='log-out'></span>
        Logout
    </a>
</nav>
