<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function readMahasiswa()
    {
        $readMahasiswa = Mahasiswa::all();
        return view('mahasiswa.read', compact(['readMahasiswa']));
    }

    public function insertMahasiswa()
    {
        return view('mahasiswa.insert');
    }

    public function storeMahasiswa(Request $request)
    {
        Mahasiswa::create($request->except('_token', 'submit'));
        return redirect('/home');
    }

    public function editMahasiswa($id)
    {
        $readMahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.edit', compact(['readMahasiswa']));
    }

    public function updateMahasiswa($id, Request $request)
    {
        $readMahasiswa = Mahasiswa::find($id);
        $readMahasiswa->update($request->except('_token', 'submit'));
        return redirect('/home');
    }

    public function deleteMahasiswa($id)
    {
        $readMahasiswa = Mahasiswa::find($id);
        $readMahasiswa->delete();
        return redirect('/home');
    }
}
