<section class="text-center my-[20px] text-black">
    <h1 class="font-bold">SMP AL ABROR</h1>
    <h6 class="text-slate-500">Jl. Manggis No. 5A RT. 003/05, Srengseng, Kembangan, Kota Jakarta Barat, Prov. D.K.I. Jakarta, 11630</h6>
</section>
<nav class="flex justify-center items-center font-bold bg-white" style="position: fixed; top: 0; width: 100%; z-index: 100;">   
    <h1 class="text-[20px] w-[800] ml-[5px] mr-[200px]">
        SMP AL ABROR
    </h1>
    <ul class="flex justify-center items-center my-[20px] text-[14px] text-slate-500">
        <li class="ml-[50px] mr-[54px]">
            <a href="/">
                <p class=" hover:text-black">
                    PROFIL
                </p>
            </a>
        </li>
        <li class="mr-[54px]">
            <a href="/inputDataSiswa">
                <p class=" hover:text-black">
                    INPUT DATA
                </p>
            </a>
        </li>
        <li class="mr-[54px]">
            <a href="/hasilData">
                <p class=" hover:text-black">
                    HASIL DATA
                </p>
            </a>
        </li>
        <li class="mr-[54px]">
            <a href="/isiPesan">
                <p class=" hover:text-black">
                    ISI PESAN DAN KESAN
                </p>
            </a>
        </li>
        <li class="mr-[54px]">
            <a href="/lihatPesan">
                <p class=" hover:text-black">
                    LIHAT PESAN
                </p>
            </a>
        </li>
                <button class="leading-[20px] hover:text-black text-black bg-[#F7C151] bg-opacity-[80%] hover:bg-opacity-100 rounded-[50px] gap-[10px] pt-[10px] pr-[24px] pb-[10px] pl-[24px] hover:b" onclick="logout()">
    LOGOUT
</button>
<script>
    function logout() {
        window.location.href = "login";
    }
</script>
    </ul>
</nav>

<!-- tambahkan kelas untuk posisi, lebar, dan z-index navbar -->
<nav class="fixed w-full z-10">
  <!-- tambahkan kelas untuk transisi dan warna navbar -->
  <div class="transition-all duration-500 ease-in-out bg-white">
    <!-- isi navbar -->
  </div>
</nav>

