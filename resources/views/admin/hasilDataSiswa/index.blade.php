@extends('admin.layouts.mainAdmin')

@section('hasilDataSiswa')
<table class="min-w-full leading-normal">
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
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-right text-xs font-semibold text-gray-600 tracking-wider">
                AKSI
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
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-right">
                    <a href="{{ route('hasilDataSiswa.edit', $siswa->id) }}" class="text-blue-600 hover:text-blue-900 inline-block">
                        <i data-feather="edit"></i>
                    </a>
                    <form action="{{ route('hasilDataSiswa.destroy', $siswa->id) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:text-red-900">
                            <i data-feather="trash-2"></i>
                        </button>
                    </form>
                </td>
                
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
