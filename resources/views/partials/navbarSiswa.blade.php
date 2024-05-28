<nav class="fixed top-0 left-0 right-0 flex flex-col md:flex-row justify-between bg-white items-center p-4 z-50 shadow-md">
    <div class="flex justify-between w-full md:w-auto items-center">
        <h1 class="text-[20px] ml-2 md:mr-20">
            SMP AL ABROR
        </h1>
        <div class="burger-menu md:hidden cursor-pointer" onclick="toggleMenu()">
            <i data-feather="menu"></i>
        </div>
    </div>
    <ul class="nav-links hidden md:flex flex-col md:flex-row justify-center items-center mt-4 md:mt-0 text-[12px] text-slate-500">
        <li class="mx-4 my-2 md:my-0">
            <a href="{{ url('/profilSiswa') }}" class="{{ Request::is('profilSiswa') ? 'bg-yellow-400 text-black' : '' }} hover:bg-yellow-400 hover:text-black rounded-full px-4 py-2 duration-300">
                PROFIL
            </a>
        </li>
        <li class="mx-4 my-2 md:my-0">
            <a href="{{ url('/hasilDataSiswas') }}" class="{{ Request::is('hasilDataSiswas') ? 'bg-yellow-400 text-black' : '' }} hover:bg-yellow-400 hover:text-black rounded-full px-4 py-2 duration-300">
                HASIL DATA
            </a>
        </li>
        <li class="mx-4 my-2 md:my-0">
            <a href="{{ url('/isiPesan') }}" class="{{ Request::is('isiPesan') ? 'bg-yellow-400 text-black' : '' }} hover:bg-yellow-400 hover:text-black rounded-full px-4 py-2 duration-300">
                ISI PESAN DAN KESAN
            </a>
        </li>
        <li class="mx-4 my-2 md:my-0">
            <a href="{{ url('/lihatPesan') }}" class="{{ Request::is('lihatPesan') ? 'bg-yellow-400 text-black' : '' }} hover:bg-yellow-400 hover:text-black rounded-full px-4 py-2 duration-300">
                LIHAT PESAN
            </a>
        </li>
        <li class="mx-4 my-2 md:my-0">
            <a href="/login">
                <button class="leading-5 hover:text-black text-black bg-yellow-400 bg-opacity-80 hover:bg-opacity-100 rounded-full px-6 py-2" onclick="logout()">
                    LOGOUT
                </button>
            </a>
        </li>
    </ul>
</nav>