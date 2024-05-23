@extends('layouts.mainGuru')

@section('hasilDataGuru')

<div class="relative mt-[400px]">
    <div class="ocean absolute top-0 left-0 w-full h-[500px] z-0">
        <div class="wave"></div>
        <div class="wave wave2"></div>
    </div>
</div>

<div class="relative bg-[#006633] pt-[30px] pb-10 z-10">
    <div class="overflow-x-auto">
        <h1 class="text-center text-white mb-5 text-[35px] font-bold">Data Guru</h1>
        <div class="overflow-x-auto">
            <table class="w-full max-w-3xl min-w-full leading-normal mb-[200px] bg-white shadow-lg rounded-lg overflow-hidden">
                <thead>
                    <tr>
                        <th class="px-5 py-3 border-b-2 border-gray-300 bg-gray-50 text-left text-xs md:text-sm lg:text-base font-semibold text-gray-700 uppercase tracking-wider">
                            NIP
                        </th>
                        <th class="px-5 py-3 border-b-2 border-gray-300 bg-gray-50 text-left text-xs md:text-sm lg:text-base font-semibold text-gray-700 uppercase tracking-wider">
                            NAMA
                        </th>
                        <th class="px-5 py-3 border-b-2 border-gray-300 bg-gray-50 text-left text-xs md:text-sm lg:text-base font-semibold text-gray-700 uppercase tracking-wider">
                            JABATAN
                        </th>
                        <th class="px-5 py-3 border-b-2 border-gray-300 bg-gray-50 text-left text-xs md:text-sm lg:text-base font-semibold text-gray-700 uppercase tracking-wider">
                            ALAMAT
                        </th>
                        <th class="px-5 py-3 border-b-2 border-gray-300 bg-gray-50 text-left text-xs md:text-sm lg:text-base font-semibold text-gray-700 uppercase tracking-wider">
                            PENDIDIKAN TERAKHIR
                        </th>
                        <th class="px-5 py-3 border-b-2 border-gray-300 bg-gray-50 text-left text-xs md:text-sm lg:text-base font-semibold text-gray-700 uppercase tracking-wider">
                            MAPEL YANG PERNAH DI AJAR
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @foreach ($gurus as $guru)
                    <tr class="hover:bg-gray-100">
                        <td class="px-5 py-5 border-b border-gray-200 text-xs md:text-sm lg:text-base ">
                            <span class="block">{{ $guru->nip }}</span>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 text-xs md:text-sm lg:text-base ">
                            <span class="block">{{ $guru->nama }}</span>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 text-xs md:text-sm lg:text-base ">
                            <span class="block">{{ $guru->jabatan }}</span>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 text-xs md:text-sm lg:text-base ">
                            <span class="block">{{ $guru->alamat }}</span>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 text-xs md:text-sm lg:text-base ">
                            <span class="block">{{ $guru->pend_akhir }}</span>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 text-xs md:text-sm lg:text-base ">
                            <span class="block">{{ $guru->mapel_ajar }}</span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
