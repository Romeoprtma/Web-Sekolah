<?php

namespace App\Http\Controllers;

use App\Models\IsiPesan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class IsiPesanController extends Controller
{
    /**
     * Menampilkan daftar pesan dan kelas.
     */
    public function index(Request $request)
    {
        if ($request->is('isiPesan*')) {
            return view('siswa.isiPesan');
        } elseif ($request->is('isiPesanGuru*')) {
            return view('guru.isiPesanGuru');
        } elseif ($request->is('lihatPesanGuru*')) {
            $pesans = IsiPesan::orderBy('created_at', 'asc')->get();
            return view('guru.lihatPesanGuru')->with('lihatPesan', $pesans);
        } else {
                $pesans = IsiPesan::orderBy('created_at', 'asc')->get();
                return view('siswa.lihatPesan')->with('lihatPesan', $pesans);
            } 
        }
    

    /**
     * Menyimpan pesan baru ke dalam penyimpanan.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'pesan' => 'required',
        ]);

        IsiPesan::create($request->all());

        return redirect()->route('isiPesan.index')
            ->with('success', 'Pesan dan Kesan berhasil dikirim.');
    }
}

