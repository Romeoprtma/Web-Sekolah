@extends('layouts.main')

@section('hasilDataSiswas')
<div class="relative mt-[400px]">
    <div class="ocean absolute top-0 left-0 w-full h-[500px] z-0">
        <div class="wave"></div>
        <div class="wave wave2"></div>
    </div>
</div>

  <section class="relative bg-[#006633] pt-[30px] pb-10 z-10">
    <h1 class="text-center text-white mb-5 text-[35px] font-bold">Table Data Siswa</h1>
        <table class="w-full max-w-3xl min-w-full leading-normal  mb-[200px] bg-white shadow-lg rounded-lg overflow-hidden">
            <thead>
                <tr>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 tracking-wider">
                        NIS
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 tracking-wider">
                        NAMA
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 tracking-wider">
                        ALAMAT
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 tracking-wider">
                        MASUK TAHUN AJAR
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 tracking-wider">
                        ASAL SEKOLAH DASAR
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($siswas as $siswa)
                    <tr>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            {{ $siswa->nis }}
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            {{ $siswa->nama }}
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            {{ $siswa->alamat }}
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            {{ $siswa->th_ajar }}
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            {{ $siswa->asal_sekolah }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
</section>
@endsection

