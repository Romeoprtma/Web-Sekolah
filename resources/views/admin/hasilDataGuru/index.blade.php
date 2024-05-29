@extends('admin.layouts.mainAdmin')

@section('hasilDataGuru')
<div class="overflow-x-auto">
    <table class="min-w-full leading-normal">
        <thead>
            <tr>
                <th class="px-2 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-[10px] md:text-[12px] font-semibold text-gray-600 tracking-wider">
                    NIP
                </th>
                <th class="px-2 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-[10px] md:text-[12px] font-semibold text-gray-600 tracking-wider">
                    NAMA
                </th>
                <th class="px-2 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-[10px] md:text-[12px] font-semibold text-gray-600 tracking-wider">
                    JABATAN
                </th>
                <th class="px-2 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-[10px] md:text-[12px] font-semibold text-gray-600 tracking-wider">
                    ALAMAT
                </th>
                <th class="px-2 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-[10px] md:text-[12px] font-semibold text-gray-600 tracking-wider">
                    PENDIDIKAN TERAKHIR
                </th>
                <th class="px-2 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-[10px] md:text-[12px] font-semibold text-gray-600 tracking-wider">
                    MAPEL YANG PERNAH DI AJAR
                </th>
                <th class="px-2 py-3 border-b-2 border-gray-200 bg-gray-100 text-right text-[10px] md:text-[12px] font-semibold text-gray-600 tracking-wider">
                    ACTIONS
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($gurus as $guru)
            <tr>
                <td class="px-2 py-5 border-b border-gray-200 bg-white text-[10px] md:text-sm">{{ $guru->nip }}</td>
                <td class="px-2 py-5 border-b border-gray-200 bg-white text-[10px] md:text-sm">{{ $guru->nama }}</td>
                <td class="px-2 py-5 border-b border-gray-200 bg-white text-[10px] md:text-sm">{{ $guru->jabatan }}</td>
                <td class="px-2 py-5 border-b border-gray-200 bg-white text-[10px] md:text-sm">{{ $guru->alamat }}</td>
                <td class="px-2 py-5 border-b border-gray-200 bg-white text-[10px] md:text-sm">{{ $guru->pend_akhir }}</td>
                <td class="px-2 py-5 border-b border-gray-200 bg-white text-[10px] md:text-sm">{{ $guru->mapel_ajar }}</td>
                <td class="px-2 py-5 border-b border-gray-200 bg-white text-[10px] md:text-sm text-right">
                    <a href="{{ route('hasilDataGuru.edit', $guru->nip) }}" class="text-blue-600 hover:text-blue-900 inline-block">
                        <i data-feather="edit"></i>
                    </a>
                    <form action="{{ route('hasilDataGuru.destroy', $guru->nip) }}" method="POST" class="inline-block">
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
</div>
@endsection
