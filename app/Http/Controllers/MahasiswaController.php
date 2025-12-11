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
            "title" => "Tambah Data Mahasiswa", 
        ]);
    }

    public function insertdata(Request $request)
    {
        Mahasiswa::create($request->all());
        return redirect()->route('mahasiswa')->with('success', '');
    }
}
