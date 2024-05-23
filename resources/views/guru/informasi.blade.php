@extends('layouts.mainGuru')

@section('informasi')
<div class="relative mt-[400px]">
    <div class="ocean absolute top-0 left-0 w-full h-[500px] z-0">
        <div class="wave"></div>
        <div class="wave wave2"></div>
    </div>
</div>

<div class="relative bg-[#006633] pt-[30px] pb-[200px] z-10 flex flex-wrap justify-center">
    <h1 class="w-full text-4xl text-center text-white font-bold mb-8">Informasi</h1>
    <div class="mt-4 w-[30%] px-4">
        <a href="{{ url('/jadwalUts') }}" class="block p-6 bg-white rounded-xl shadow-md hover:bg-gray-100 transition duration-300">
            <h2 class="text-xl font-semibold mb-2">Jadwal UTS</h2>
            <p class="text-gray-500">Klik di sini untuk melihat jadwal UTS/UAS.</p>
        </a>
    </div>
    <div class="mt-4 w-[30%] px-4">
        <a href="{{ url('/jadwalUas') }}" class="block p-6 bg-white rounded-xl shadow-md hover:bg-gray-100 transition duration-300">
            <h2 class="text-xl font-semibold mb-2">Jadwal UAS</h2>
            <p class="text-gray-500">Klik di sini untuk melihat jadwal UTS/UAS.</p>
        </a>
    </div>
</div>

@endsection
