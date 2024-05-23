  <!-- resources/views/admin/inputDataSiswa/edit.blade.php -->

  @extends('admin.layouts.mainAdmin')

  @section('editSiswa')
  <form method="POST" action="{{ route('hasilDataSiswa.update', $siswas->id) }}" class="w-full max-w-screen-md mx-auto border-solid p-4 bg-white rounded-lg shadow-md">
      @csrf
      @method('PUT')
      <h1 class="text-[42px] font-bold text-black my-[20px]">EDIT DATA SISWA</h1>

      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
          <label class="text-[16px] block uppercase tracking-wide text-gray-700 font-bold mb-2" for="nis">
            Nomor Induk Siswa
          </label>
          <input id="nis" name="nis" type="text" value="{{ $siswa->nis }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" required>
        </div>
      </div>

      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-[16px] font-bold mb-2" for="nama">
            Nama
          </label>
          <input id="nama" name="nama" type="text" value="{{ $siswa->nama }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" required>
        </div>
      </div>

      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-[16px] font-bold mb-2" for="alamat">
            Alamat
          </label>
          <input id="alamat" name="alamat" type="text" value="{{ $siswa->alamat }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" required>
        </div>
      </div>

      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-[16px] font-bold mb-2" for="th_ajar">
            Masuk Tahun Ajar
          </label>
          <input id="th_ajar" name="th_ajar" type="text" value="{{ $siswa->th_ajar }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" required>
        </div>
      </div>

      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-[16px] font-bold mb-2" for="asal_sekolah">
            Asal Sekolah Dasar
          </label>
          <input id="asal_sekolah" name="asal_sekolah" type="text" value="{{ $siswa->asal_sekolah }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" required>
        </div>
      </div>

      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
          <button type="submit" class="leading-[20px] font-bold hover:text-white text-black bg-[#F7C151] bg-opacity-[80%] hover:bg-opacity-100 rounded-[50px] gap-[10px] pt-[10px] pr-[24px] pb-[10px] pl-[24px]">
            PERBARUI
          </button>
        </div>
      </div>
  </form>
  @endsection
