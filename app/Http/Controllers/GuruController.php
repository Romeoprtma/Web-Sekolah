<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index(Request $request)
    {
        if ($request->is('admin/inputDataGuru*')) {
            $gurus = Guru::all();
            return view('admin.inputDataGuru.index', compact('gurus'));
        }elseif ($request->is('admin/hasilDataGuru*')) {
            $gurus = Guru::orderBy('created_at', 'asc')->get();
            return view('admin.hasilDataGuru.index', compact('gurus'));
        } else {
            $gurus = Guru::orderBy('created_at', 'asc')->get();
            return view('guru.hasilDataGuru', compact('gurus'));
        }
        
    }

    public function create()
    {
        return view('admin.inputDataGuru.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nip' => 'required|unique:gurus|max:16',
            'nama' => 'required|max:255',
            'jabatan' => 'required',
            'alamat' => 'required|max:255',
            'pend_akhir' => 'required|max:255',
            'mapel_ajar' => 'required|max:255'
        ]);

        Guru::create($validatedData);

        return redirect()->route('hasilDataGuru.index')->with('success', 'Data guru berhasil ditambahkan.');
    }

    public function show($nip)
    {
        $guru = Guru::findOrFail($nip);
        return view('admin.inputDataGuru.show', compact('guru'));
    }

    public function edit($nip)
    {
        $data = Guru::where('nip', $nip)->firstOrFail();
        return view('admin.hasilDataGuru.editGuru', compact('data'));
    }

    public function update(Request $request, $nip)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'jabatan' => 'required',
            'alamat' => 'required|max:255',
            'pend_akhir' => 'required|max:255',
            'mapel_ajar' => 'required|max:255'
        ]);

        $guru = Guru::where('nip', $nip)->firstOrFail();
        $guru->update($validatedData);
        return redirect()->route('hasilDataGuru.index')->with('success', 'Data guru berhasil diperbarui');
    }

    public function destroy($nip)
    {
        $guru = Guru::where('nip', $nip)->firstOrFail();
        $guru->delete();
        return redirect()->route('hasilDataGuru.index')->with('success', 'Data guru berhasil dihapus');
    }
}
