@extends('layouts.main')

@section('inputDataSiswa')
<section class="bg-[#006633] pb-[10px]">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path  fill="#ffffff" fill-opacity="1" d="M0,160L40,144C80,128,160,96,240,106.7C320,117,400,171,480,165.3C560,160,640,96,720,74.7C800,53,880,75,960,112C1040,149,1120,203,1200,208C1280,213,1360,171,1400,149.3L1440,128L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path></svg>
   <form class="w-full max-w-7xl mx-auto mt-[100px] mb-[200px] border-solid p-4 bg-white rounded-lg shadow-md">
    <div>
        <h1 class="text-[42px] font-bold text-black my-[20px]">FORM SISWA</h1>
    </div>  
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="text-[16px] block uppercase tracking-wide text-gray-700 font-bold mb-2" for="nis">
        Nomor Induk Siswa
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="nis" type="text" placeholder="Masukkan nomor induk siswa Anda">
    </div>
  </div>
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-[16px] font-bold mb-2" for="name">
        Nama
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="name" type="text" placeholder="Masukkan nama Anda">
    </div>
  </div>
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-[16px] font-bold mb-2" for="address">
        Alamat
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="address" type="text" placeholder="Masukkan alamat Anda">
    </div>
  </div>
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-[16px] font-bold mb-2" for="year">
        Masuk Tahun Ajar
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="year" type="text" placeholder="Masukkan tahun ajar Anda">
    </div>
  </div>
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-[16px] font-bold mb-2" for="school">
        Asal Sekolah Dasar
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="school" type="text" placeholder="Masukkan asal sekolah dasar Anda">
    </div>
  </div>
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <button class="leading-[20px] font-bold hover:text-white text-black bg-[#F7C151] bg-opacity-[80%] hover:bg-opacity-100 rounded-[50px] gap-[10px] pt-[10px] pr-[24px] pb-[10px] pl-[24px] hover:b">
            DAFTAR
      </button>
    </div>
  </div>
</form>


 </section>
@endsection

