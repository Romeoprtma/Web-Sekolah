@extends('admin.layouts.mainAdmin')

@section('inputDataSiswa')
<form method="POST" action="{{ route('inputDataSiswa.store') }}" class="w-full max-w-screen-md mx-auto p-4 bg-white rounded-lg shadow-md">
    @csrf
    <h1 class="text-4xl font-bold text-black my-5">FORM SISWA</h1>

    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
            <label class="text-lg block uppercase tracking-wide text-gray-700 font-bold mb-2" for="nis">
                Nomor Induk Siswa
            </label>
            <input id="nis" name="nis" type="text" placeholder="Masukkan nomor induk siswa Anda" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" required>
        </div>
    </div>

    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-lg font-bold mb-2" for="nama">
                Nama
            </label>
            <input id="nama" name="nama" type="text" placeholder="Masukkan nama Anda" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" required>
        </div>
    </div>

    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-lg font-bold mb-2" for="alamat">
                Alamat
            </label>
            <input id="alamat" name="alamat" type="text" placeholder="Masukkan alamat Anda" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" required>
        </div>
    </div>

    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-lg font-bold mb-2" for="th_ajar">
                Masuk Tahun Ajar
            </label>
            <input id="th_ajar" name="th_ajar" type="text" placeholder="Masukkan tahun ajar Anda" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" required>
        </div>
    </div>

    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-lg font-bold mb-2" for="asal_sekolah">
                Asal Sekolah Dasar
            </label>
            <input id="asal_sekolah" name="asal_sekolah" type="text" placeholder="Masukkan asal sekolah dasar Anda" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" required>
        </div>
    </div>

    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
            <button type="submit" class="leading-5 font-bold hover:text-white text-black bg-yellow-500 bg-opacity-80 hover:bg-opacity-100 rounded-full gap-2 py-2 px-6">
                DAFTAR
            </button>
        </div>
    </div>
</form>
@endsection
