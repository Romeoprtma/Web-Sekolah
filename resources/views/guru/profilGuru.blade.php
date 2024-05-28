@extends('layouts.mainGuru')

@section('profilGuru')


<section class="text-center py-[50px] md:py-[100px] px-[20px] md:px-[50px] lg:px-[200px] flex flex-col md:flex-row justify-center items-center">
    <div class="card mb-[20px] md:mb-0 md:mr-[50px] lg:mr-[100px] shadow-lg rounded-lg overflow-hidden h-full w-full max-w-[500px] md:max-w-full">
        <img src="img/k_sekolah.jpg" alt="foto kepala sekolah" class="w-full h-auto object-cover">
    </div>
    
    <div class="max-w-[600px] w-full md:w-auto">
        <h1 class="text-[25px] text-left md:text-[35px] md:text-center font-bold">SELAMAT DATANG DI SMP AL ABROR</h1>
        <p class="text-justify text-[15px] mt-[20px] text-slate-500">
            Perkenalkan Nama Saya Ahmad Baihaqi, S, Pd Sebagai kepala sekolah SMP Al-Abror, saya dengan bangga menyambut Anda ke dalam lingkungan pendidikan kami yang penuh semangat dan dedikasi. SMP Al-Abror adalah tempat di mana kami tidak hanya mengajarkan pengetahuan, tetapi juga membentuk karakter siswa-siswa kami agar menjadi individu yang berilmu pengetahuan dan berakhlak mulia.
            <br>
            Di SMP Al-Abror, kami memiliki komitmen yang kuat untuk memberikan pendidikan berkualitas yang melampaui batas kelas. Kami menyadari bahwa pendidikan adalah kunci untuk membuka pintu menuju masa depan yang cerah, dan itulah mengapa kami selalu berusaha memberikan pengalaman belajar yang terbaik bagi setiap siswa kami.
            <br>
            Dengan dukungan dari tenaga pengajar yang berdedikasi dan fasilitas yang memadai, kami berusaha menciptakan lingkungan belajar yang inspiratif dan mendukung pertumbuhan serta perkembangan setiap individu. Kami juga menekankan pentingnya pengembangan karakter dan nilai-nilai moral yang kuat dalam setiap aspek kegiatan sekolah kami.
            <br>
            Melalui website ini, kami berharap dapat berbagi informasi yang bermanfaat tentang program pendidikan, kegiatan ekstrakurikuler, dan berbagai prestasi siswa yang telah kami raih. Kami juga ingin menjalin hubungan yang lebih erat dengan para orang tua dan masyarakat, sehingga bersama-sama kita dapat menciptakan lingkungan pendidikan yang lebih baik.
            <br>
            Terima kasih atas kunjungan Anda ke website SMP Al-Abror. Mari bergabung bersama kami dalam perjalanan pendidikan yang penuh inspirasi dan prestasi!
            <br><br>
            Salam hormat,
            <br>
            [Ahmad Baihaqi. S. Pd]
            <br>
            Kepala Sekolah SMP Al-Abror Srengseng
        </p>
    </div>
</section>

<section class="bg-[#006633] w-full h-auto mt-[150px] md:mt-[200px] text-white relative">
    <div class="ocean absolute top-0 left-0 w-full h-[500px] z-0">
        <div class="wave sm:mt-[5px] xl:mt-[10px]"></div>
        <div class="wave wave2 sm:mt-[5px] xl:mt-[10px]"></div>
    </div>
    <div class="relative pt-16 md:pt-20 px-8 md:px-20 mt-[120px] z-10">
        <h1 class="text-[24px] md:text-[32px] lg:text-[42px] pb-[20px] font-bold">SEJARAH SINGKAT SMP AL ABROR</h1>
        <p class="pb-[50px] md:pb-[70px] lg:pb-[100px] text-gray-200">
            SMP AL-ABROR Srengseng didirikan oleh Ketua Yayasan Pendidikan Islam Al-Abror, KH. Abdullah Bin KH. Amsyir, pada tanggal 19 November 1992. Saat ini, sekolah ini terus berkembang di bawah pengelolaan putra beliau, Ustadz Ahmad Baihaqi. SMP AL-ABROR berkomitmen untuk menyediakan pendidikan yang berkualitas tinggi dengan mengintegrasikan ilmu pengetahuan dan nilai-nilai keagamaan.
        </p>
    </div>
</section> 

<section class="bg-white w-full h-auto pb-20 md:pb-32 mt-10 md:mt-20">
    <h1 class="font-bold text-[#006633] text-center text-2xl md:text-3xl lg:text-4xl xl:text-5xl px-8 md:px-20 pb-8 md:pb-12">VISI DAN MISI SMP AL ABROR</h1>

    <div class="bg-white mx-auto md:mx-0 flex flex-col md:flex-row justify-center items-center">
        <div class="mb-12 md:mb-0 md:mr-8">
            <h1 class="font-bold text-[#006633] text-center text-xl md:text-2xl pb-4 md:pb-8">VISI</h1>
            <p class="text-slate-500 text-center">Membentuk generasi yang berilmu pengetahuan dan berakhlakul karimah.</p>
        </div>

        <div class="md:ml-8">
            <h1 class="font-bold text-[#006633] text-center text-xl md:text-2xl pb-4 md:pb-8">MISI</h1>
            <ol class="list-decimal list-inside px-8 md:px-20 text-slate-500">
                <li class="mb-4">Menyediakan lingkungan belajar yang kondusif dan inspiratif.</li>
                <li class="mb-4">Mendorong peserta didik untuk mencapai prestasi terbaik dalam akademik dan ekstrakurikuler.</li>
                <li class="mb-4">Mengintegrasikan nilai-nilai moral dan etika dalam setiap aspek pembelajaran.</li>
                <li>Membina kerjasama yang baik antara sekolah, orang tua, dan masyarakat.</li>
            </ol>
        </div>
    </div>
</section>


<section class="bg-[#006633] w-full h-auto pb-16 md:pb-20 text-white">
    <h1 class="font-bold pt-16 md:pt-20 text-3xl md:text-4xl lg:text-5xl xl:text-6xl px-8 md:px-20 pb-4 md:pb-8">KURIKULUM</h1>
    <p class="px-8 md:px-20 text-gray-200 text-base md:text-lg lg:text-xl xl:text-2xl">SMP AL-ABROR mengikuti kurikulum nasional atau Kurikulum Merdeka yang dipadu dengan kurikulum keagamaan. Pendekatan ini diterapkan kepada siswa dan siswi dengan harapan dapat mencapai visi sekolah dalam membentuk generasi yang berilmu pengetahuan dan berakhlakul karimah.</p>
</section>


<section class="bg-white mt-10 md:mt-20 w-full h-auto pb-16 md:pb-20 font-bold text-[#006633]">
    <h1 class="text-3xl md:text-4xl lg:text-5xl xl:text-6xl px-8 md:px-20 pb-4 md:pb-8">FASILITAS</h1>
    <div class="px-8 md:px-20 grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="card">
            <img src="img/r_kelas.jpeg" alt="ruang kelas" class="w-full h-auto">
            <div class="card-body">
                <p class="text-slate-500">Ruang kelas yang nyaman dan dilengkapi dengan teknologi pembelajaran modern.</p>
            </div>
        </div>
        <div class="card">
            <img src="img/laboratorium.jpeg" alt="laboratorium" class="w-full h-auto">
            <div class="card-body">
                <p class="text-slate-500">Laboratorium Komputer</p>
            </div>
        </div>
        <div class="card">
            <img src="img/perpustakaan.jpeg" alt="perpustakaan" class="w-full h-auto">
            <div class="card-body">
                <p class="text-slate-500">Perpustakaan</p>
            </div>
        </div>
        <div class="card">
            <img src="img/lapangan.jpeg" alt="lapangan olahraga" class="w-full h-auto">
            <div class="card-body">
                <p class="text-slate-500">Lapangan Olahraga</p>
            </div>
        </div>
        <!-- Tambahkan card lainnya di sini jika ada -->
    </div>
</section>
    
<section class="bg-[#006633] w-full h-auto pb-16 md:pb-20 text-white">
    <h1 class="text-center font-bold pt-16 md:pt-20 text-3xl md:text-4xl lg:text-5xl xl:text-6xl px-8 md:px-20 pb-4 md:pb-8">PROGRAM UNGGULAN</h1>
    <div class="flex flex-col md:flex-row justify-center items-center md:space-x-8 px-8 md:px-20">
        <div class="mb-8 md:mb-0 md:ml-0 md:mr-10">
            <h2 class="text-2xl md:text-3xl text-center text-yellow-400 pb-3 md:pb-5">Program Akademik Intensif</h2>
            <p class="text-center text-gray-200">Bimbingan belajar tambahan untuk mata pelajaran inti guna meningkatkan prestasi akademik siswa.</p>
        </div>
        <div class="">
            <h2 class="text-2xl md:text-3xl text-center text-yellow-400 pb-3 md:pb-5">Program Karakter dan Moral</h2>
            <p class="text-center text-gray-200">Pembelajaran dan kegiatan yang berfokus pada pengembangan karakter dan moral siswa sesuai dengan nilai-nilai Islam.</p>
        </div>
    </div>
    <div class="mt-8 md:mt-12 px-8 md:px-20">
        <h2 class="text-2xl md:text-3xl text-center text-yellow-400 pb-3 md:pb-5">Kegiatan Ekstrakurikuler</h2>
        <p class="text-center text-gray-200">Berbagai pilihan kegiatan seperti olahraga, seni tari dan bela diri, hadroh, pidato dan kaligrafi, yang bertujuan mengembangkan bakat dan minat siswa.</p>
    </div>
</section>

<section class="bg-white w-full h-auto pb-16 md:pb-20 text-[#006633]">
    <h1 class="text-center font-bold pt-16 md:pt-20 text-3xl md:text-4xl lg:text-5xl xl:text-6xl px-8 md:px-20 pb-4 md:pb-8">PPDB SMP AL ABROR</h1>
    {{-- <h2 class="text-lg md:text-xl px-8 md:px-20 pb-4 md:pb-8">TENTANG PPDB</h2> --}}
    <div class="card flex justify-center border-none">
        <img src="img/PPDB1.jpg" alt="poster" class="w-[40%] h-[50%] max-w-[40%]">
    </div>
    <div class="card border-none">
        <img src="img/PPDB2.jpg" alt="banner" class="w-full h-auto max-w-full">
        <div class="card-body">
            <p class="text-slate-500"></p>
        </div>
    </div>
    <h2 class="text-center text-slate-900 pt-16 md:pt-20 text-lg md:text-xl px-8 md:px-20 pb-4 md:pb-8">FORM PENDAFTARAN : <a href="https://forms.gle/PaBz585oV1qAgyk79" class="cursor-pointer text-blue-500 hover:underline">KLIK DISINI</a></h2>
</section>


<section class="bg-[#006633] mt-10 md:mt-20 w-full h-auto pb-16 md:pb-20 font-bold text-white">
    <h1 class="text-3xl md:text-4xl pt-16 md:pt-20 lg:text-5xl xl:text-6xl px-8 md:px-20 pb-4 md:pb-8">KONTAK KAMI</h1>
    <div class="px-8 md:px-20">
        
        <!-- Lokasi -->
        <div class="mb-8 md:mb-10 flex items-start md:items-center">
            <img src="img/map-pin.svg" alt="map" class="w-8 h-8 md:w-10 md:h-10 mr-4"></img>
            <div>
                <h2 class="text-lg md:text-xl">Lokasi:</h2>
                <p class="text-base md:text-lg text-slate-200">Jalan Manggis No. 5A RT. 3/RW. 5 Srengseng Kembangan RT.3, Jl. Manggis Jl. Lapangan Bola No.5A, RT.3/RW.5, Srengseng, Kec. Kembangan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11630</p>
            </div>
        </div>

        <!-- Email -->
        <div class="mb-8 md:mb-10 flex items-start md:items-center">
            <img src="img/mail.svg" alt="mail" class="w-8 h-8 md:w-10 md:h-10 mr-4"></img>
            <div>
                <h2 class="text-lg md:text-xl">Email:</h2>
                <a href="mailto:Alabror.srengseng35@gmail.com" class="text-base md:text-lg text-slate-200">Alabror.srengseng35@gmail.com</a>
            </div>
        </div>

        <!-- No Telp -->
        <div class="flex items-start md:items-center">
            <img src="img/phone.svg" alt="phone" class="w-8 h-8 md:w-10 md:h-10 mr-4"></img>
            <div>
            <h2 class="text-lg md:text-xl">No Telp:</h2>
                <p class="text-base md:text-lg text-slate-200">(021) 5849903</p>
            </div>
        </div>
    </div>
</section>


<section class="bg-[#ffffff] w-[100%] h-[auto] pb-[10px]">
    {{-- <h1 class="text-[42px] px-[120px] pb-[20px]">ALAMAT</h1> --}}
    <div class="flex justify-center">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15865.798872858146!2d106.7616237!3d-6.204255!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f73b4305751d%3A0x54b2edcab434089e!2sSMP%20Al%20Abror!5e0!3m2!1sid!2sid!4v1707390737705!5m2!1sid!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>
@endsection




