<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        $title = 'Data Mahasiswa';

        return view('mahasiswa', compact('mahasiswa', 'title'));
    }

    public function tambahmahasiswa()
    {
        return view('tambahmahasiswa', [
            'title' => 'Tambah Data Mahasiswa',
        ]);
    }

    public function insertdata(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'name'  => 'required|string|max:255',
            'nim'   => 'required|string|max:50',
            'prodi' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'nohp'  => 'required|string|max:20',
        ]);

        // Simpan data yang sudah tervalidasi
        Mahasiswa::create($validated);

        // Redirect ke halaman daftar mahasiswa dengan pesan sukses
        return redirect()->route('mahasiswa')->with('success', 'Data mahasiswa berhasil ditambahkan');
    }
}
