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

   public function store(Request $request)
{
    // validasi input
    $validated = $request->validate([
        'name'  => 'required|string|max:255',
        'nim'   => 'required|string|max:20',
        'prodi' => 'required|string|max:100',
        'email' => 'required|email',
        'nohp'  => 'required|string|max:15',
    ]);

    // simpan ke database
    Mahasiswa::create($validated);

    // redirect ke halaman index dengan pesan sukses
    return redirect()->route('mahasiswa.index')
                     ->with('success', 'Data mahasiswa berhasil ditambahkan!');
}

    public function edit($id)
{
    $mhs = Mahasiswa::findOrFail($id);
    return view('editmahasiswa', compact('mhs'));
}
    public function create()
{
    return view('tambahmahasiswa'); 
}
    
}


