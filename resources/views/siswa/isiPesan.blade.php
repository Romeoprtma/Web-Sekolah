@extends('layouts.main')

@section('isiPesan')
<div class="relative mt-[400px]">
  <div class="ocean absolute top-0 left-0 w-full h-[500px] z-0">
      <div class="wave"></div>
      <div class="wave wave2"></div>
  </div>
</div>

<div class="relative bg-[#006633] pt-[30px] pb-10 z-10">
<form action="{{ route('isiPesan.store') }}" method="POST" class="relative w-full max-w-6xl mx-auto mb-20 p-4 bg-white rounded-lg shadow-md">
  @csrf
  <div>
      <h1 class="text-3xl md:text-4xl font-bold text-black my-5">PESAN DAN KESAN</h1>
  </div>  
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="text-lg block uppercase tracking-wide text-gray-700 font-bold mb-2" for="nama">
        Nama
      </label>
      <input id="nama" type="text" placeholder="Masukkan Nama Anda" name="nama" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
    </div>
  </div>
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-lg font-bold mb-2" for="kelas">
        Kelas
      </label>
      <input id="kelas" type="text" placeholder="Masukkan Kelas Anda" name="kelas" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
    </div>
  </div>
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-lg font-bold mb-2" for="pesan">
        Isi Pesan dan Kesan
      </label>
      <textarea id="pesan" placeholder="Masukkan Pesan Dan Kesan Anda" name="pesan" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"></textarea>
    </div>
  </div>
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <button type="submit" class="leading-5 font-bold hover:text-white text-black bg-[#F7C151] bg-opacity-80 hover:bg-opacity-100 rounded-full py-2 px-6">
        KIRIM
      </button>
    </div>
  </div>
</form>
</div>
@endsection
