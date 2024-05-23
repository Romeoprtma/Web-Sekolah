
    <nav class="fixed top-0 left-0 right-0 flex flex-col md:flex-row justify-center items-center font-bold bg-[#FFFFFF] p-4 z-50">
        <div class="flex justify-between w-full md:w-auto items-center">
            <h1 class="text-[20px] ml-2 md:mr-[200px] w-full md:w-auto text-left md:text-left">
                SMP AL ABROR
            </h1>
            <div class="burger-menu md:hidden cursor-pointer" onclick="toggleMenu()">
                <i data-feather="menu"></i>
            </div>
        </div>
        <ul class="nav-links flex flex-col md:flex-row justify-center items-center my-[20px] text-[12px] text-slate-500">
            <li class="mt-2 md:mt-0 md:mr-[54px]">
                <a href="{{ url('/profilGuru') }}" class="{{ Request::is('profilGuru') ? 'active' : '' }}">
                    <p class="rounded-md px-4 py-2">
                        PROFIL
                    </p>
                </a>
            </li>
            <li class="dropdown mt-2 md:mt-0 md:mr-[54px] relative">
                <a href="/informasi" class="{{ Request::is('informasi') ? 'active' : '' }}">
                    <p class="rounded-md px-4 py-2">
                        INFORMASI
                    </p>
                </a>
                {{-- <div class="dropdown-content absolute bg-white shadow-lg mt-2 rounded-lg">
                    <a href="{{ url('/informasi') }}" class="{{ Request::is('informasi') ? 'active' : '' }}">Jadwal UTS/UAS</a>
                </div> --}}
            </li>
            <li class="mt-2 md:mt-0 md:mr-[54px]">
                <a href="{{ url('/hasilDataGuru') }}" class="{{ Request::is('hasilDataGuru') ? 'active' : '' }}">
                    <p class="rounded-md px-4 py-2">
                        HASIL DATA
                    </p>
                </a>
            </li>
            {{-- <li class="mt-2 md:mt-0 md:mr-[54px]">
                <a href="{{ url('/isiPesanGuru') }}" class="{{ Request::is('isiPesanGuru') ? 'active' : '' }}">
                    <p class="rounded-md px-4 py-2">
                        ISI PESAN DAN KESAN
                    </p>
                </a>
            </li> --}}
            <li class="mt-2 md:mt-0 md:mr-[54px]">
                <a href="{{ url('/lihatPesanGuru') }}" class="{{ Request::is('lihatPesanGuru') ? 'active' : '' }}">
                    <p class="rounded-md px-4 py-2">
                        LIHAT PESAN
                    </p>
                </a>
            </li>
            <li class="mt-4 md:mt-0">
                <button class="leading-[20px] hover:text-black text-black bg-[#F7C151] bg-opacity-[80%] hover:bg-opacity-100 rounded-[50px] gap-[10px] pt-[10px] pr-[24px] pb-[10px] pl-[24px]" onclick="logout()">
                    LOGOUT
                </button>
            </li>
        </ul>
    </nav>
