<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Menampilkan daftar sumber daya.
     */
    public function index(Request $request)
    {
        if ($request->is('admin/inputDataSiswa*')) {
            $siswas = Siswa::all();
            return view('admin.inputDataSiswa.index', compact('siswas'));
        } elseif ($request->is('admin/hasilDataSiswa*')) {
            $siswas = Siswa::orderBy('created_at', 'asc')->get();
            return view('admin.hasilDataSiswa.index', compact('siswas'));
        } else {
            $siswas = Siswa::orderBy('created_at', 'asc')->get();
            return view('siswa.hasilDataSiswas', compact('siswas'));
        }
    }

    /**
     * Menampilkan formulir untuk membuat sumber daya baru.
     */
    public function create()
    {
        return view('admin.inputDataSiswa.create');
    }

    /**
     * Menyimpan sumber daya yang baru dibuat.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nis' => 'required|unique:siswas|max:16',
            'nama' => 'required|max:255',
            'alamat' => 'required|max:255',
            'th_ajar' => 'required|max:4',
            'asal_sekolah' => 'required|max:255'
        ]);

        Siswa::create($validatedData);

        return redirect()->route('hasilDataSiswa.index')->with('success', 'Data siswa berhasil ditambahkan.');
    }

    /**
     * Menampilkan sumber daya yang ditentukan.
     */
    public function show(Siswa $siswa)
    {
        $guru = Siswa::findOrFail($siswa);
        return view('admin.inputDataSiswa.show', compact('siswas'));
    }

    /**
     * Menampilkan formulir untuk mengedit sumber daya yang ditentukan.
     */
    public function edit(Siswa $siswa)
{
    return view('admin.hasilDataSiswa.editSiswa', compact('siswas'));
}


public function update(Request $request, Siswa $siswa)
{
    $validatedData = $request->validate([
        'nis' => 'required|max:8',
        'nama' => 'required|max:255',
        'alamat' => 'required|max:255',
        'th_ajar' => 'required|max:4',
        'asal_sekolah' => 'required|max:255'
    ]);

    $siswa->update($validatedData);

    return redirect()->route('hasilDataSiswa.index')->with('success', 'Data siswa berhasil diperbarui.');
}

    /**
     * Menghapus sumber daya yang ditentukan dari penyimpanan.
     */
    public function destroy(Siswa $siswa)
    {
        $siswa = Siswa::where('id', $siswa)->firstOrFail();
        $siswa->delete();
        return redirect()->route('hasilDataSiswa.index')->with('success', 'Data siswa berhasil dihapus.');
    }
}


