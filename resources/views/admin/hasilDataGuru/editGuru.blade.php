<!-- resources/views/admin/inputDataSiswa/edit.blade.php -->

@extends('admin.layouts.mainAdmin')

@section('editGuru')
<form method="POST" action="{{ route('hasilDataGuru.update', $data->nip) }}" class="w-full max-w-screen-md mx-auto p-4 bg-white rounded-lg shadow-md">
  @csrf
  @method('PUT')
  <h1 class="text-4xl font-bold text-black my-5">EDIT DATA GURU</h1>
  
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="text-lg block uppercase tracking-wide text-gray-700 font-bold mb-2" for="nip">
        Nomor Induk Kepegawaian
      </label>
      <div class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
        {{ $data->nip }}
      </div>
    </div>
  </div>

  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-lg font-bold mb-2" for="nama">
        Nama
      </label>
      <input id="nama" name="nama" type="text" value="{{ $data->nama }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" required>
    </div>
  </div>

  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-lg font-bold mb-2" for="jabatan">
        Jabatan
      </label>
      <div class="relative">
        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="jabatan" name="jabatan" required>
          <option value="" disabled>Pilih jabatan Anda</option>
          <option value="Kepala Sekolah" {{ $data->jabatan == 'Kepala Sekolah' ? 'selected' : '' }}>Kepala Sekolah</option>
          <option value="Wakil Kepala Sekolah" {{ $data->jabatan == 'Wakil Kepala Sekolah' ? 'selected' : '' }}>Wakil Kepala Sekolah</option>
          <option value="Guru" {{ $data->jabatan == 'Guru' ? 'selected' : '' }}>Guru</option>
          <option value="Tenaga Pendidik" {{ $data->jabatan == 'Tenaga Pendidik' ? 'selected' : '' }}>Tenaga Pendidik</option>
          <option value="Staf" {{ $data->jabatan == 'Staf' ? 'selected' : '' }}>Staf</option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M5.516 7.548c-0.436-0.446-1.043-0.481-1.576-0.028l-4.048 3.446c-0.347 0.295-0.385 0.874-0.089 1.22l5.193 5.152c0.436 0.446 1.043 0.481 1.576 0.028l4.048-3.446c0.347-0.295 0.385-0.874 0.089-1.22l-5.193-5.152z"/>
            <path d="M14.484 7.548c0.436-0.446 1.043-0.481 1.576-0.028l4.048 3.446c0.347 0.295 0.385 0.874 0.089 1.22l-5.193 5.152c-0.436 0.446-1.043 0.481-1.576 0.028l-4.048-3.446c-0.347-0.295-0.385-0.874-0.089-1.22l5.193-5.152z"/>
          </svg>
        </div>
      </div>
    </div>
  </div>

  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-lg font-bold mb-2" for="alamat">
        Alamat
      </label>
      <input id="alamat" name="alamat" type="text" value="{{ $data->alamat }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" required>
    </div>
  </div>

  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-lg font-bold mb-2" for="pend_akhir">
        Pendidikan Terakhir
      </label>
      <input id="pend_akhir" name="pend_akhir" type="text" value="{{ $data->pend_akhir }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" required>
    </div>
  </div>

  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-lg font-bold mb-2" for="mapel_ajar">
        Mata Pelajaran Yang Pernah Diajar
      </label>
      <input id="mapel_ajar" name="mapel_ajar" type="text" value="{{ $data->mapel_ajar }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" required>
    </div>
  </div>

  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <button type="submit" class="leading-5 font-bold hover:text-white text-black bg-yellow-500 bg-opacity-80 hover:bg-opacity-100 rounded-full gap-2 py-2 px-6">
        UBAH
      </button>
    </div>
  </div>
</form>
@endsection
