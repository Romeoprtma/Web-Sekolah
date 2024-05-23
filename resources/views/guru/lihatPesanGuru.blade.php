@extends('layouts.mainGuru')

@section('lihatPesanGuru')
<div class="relative mt-[400px]">
    <div class="ocean absolute top-0 left-0 w-full h-[500px] z-0">
        <div class="wave"></div>
        <div class="wave wave2"></div>
    </div>
</div>

<div class="relative bg-[#006633] pt-[30px] pb-[10px] z-10">
    <h1 class="text-center text-white mb-5 text-[35px] font-bold">Pesan dan Kesan</h1>
    <div class="overflow-x-auto">
        <table class="w-full max-w-3xl min-w-full leading-normal mb-[200px] bg-white shadow-lg rounded-lg overflow-hidden">
            <thead>
                <tr>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs md:text-sm lg:text-base font-semibold text-gray-600 tracking-wider">
                        NAMA
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs md:text-sm lg:text-base font-semibold text-gray-600 tracking-wider">
                        KELAS
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs md:text-sm lg:text-base font-semibold text-gray-600 tracking-wider">
                        ISI PESAN DAN KESAN
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($lihatPesan as $pesan)
                    <tr>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-xs md:text-sm lg:text-base">
                            {{ $pesan->nama }}
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-xs md:text-sm lg:text-base">
                            {{ $pesan->kelas }}
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-xs md:text-sm lg:text-base">
                            {{ $pesan->pesan }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
