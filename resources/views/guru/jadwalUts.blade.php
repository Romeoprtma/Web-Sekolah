@extends('layouts.mainGuru')

@section('jadwalUts')
<div class="relative mt-[400px]">
    <div class="ocean absolute top-0 left-0 w-full h-[500px] z-0">
        <div class="wave"></div>
        <div class="wave wave2"></div>
    </div>
</div>

<div class="relative bg-[#006633] pt-[30px] pb-[200px] z-10 flex flex-wrap justify-center">
    <div class="overflow-x-auto">
        <h1 class="text-center text-white mb-5 text-[35px] font-bold">JADWAL UTS</h1>
        <div class="overflow-x-auto">
            <table class="w-full max-w-3xl min-w-full leading-normal mb-[200px] bg-white shadow-lg rounded-lg overflow-hidden">
                <thead>
                    <tr>
                        <th class="px-5 py-3 border-b-2 border-gray-300 bg-gray-50 text-left text-xs md:text-sm lg:text-base font-semibold text-gray-700 uppercase tracking-wider">
                            NO
                        </th>
                        <th class="px-5 py-3 border-b-2 border-gray-300 bg-gray-50 text-left text-xs md:text-sm lg:text-base font-semibold text-gray-700 uppercase tracking-wider">
                            HARI
                        </th>
                        <th class="px-5 py-3 border-b-2 border-gray-300 bg-gray-50 text-left text-xs md:text-sm lg:text-base font-semibold text-gray-700 uppercase tracking-wider">
                            MULAI
                        </th>
                        <th class="px-5 py-3 border-b-2 border-gray-300 bg-gray-50 text-left text-xs md:text-sm lg:text-base font-semibold text-gray-700 uppercase tracking-wider">
                            SELESAI
                        </th>
                        <th class="px-5 py-3 border-b-2 border-gray-300 bg-gray-50 text-left text-xs md:text-sm lg:text-base font-semibold text-gray-700 uppercase tracking-wider">
                            MATA PELAJARAN
                        </th>
                        <th class="px-5 py-3 border-b-2 border-gray-300 bg-gray-50 text-left text-xs md:text-sm lg:text-base font-semibold text-gray-700 uppercase tracking-wider">
                            RUANG KELAS
                        </th>
                        <th class="px-5 py-3 border-b-2 border-gray-300 bg-gray-50 text-left text-xs md:text-sm lg:text-base font-semibold text-gray-700 uppercase tracking-wider">
                            PENGAWAS
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection