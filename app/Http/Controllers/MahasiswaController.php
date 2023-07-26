<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();

        return "Selamat Routing Anda Sudah Benar";
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        $mahasiswa = new Mahasiswa();
        $mahasiswa->nim = $request->input('nim');
        $mahasiswa->nama = $request->input('nama');
        $mahasiswa->jenis_kelamin = $request->input('jenis_kelamin');
        $mahasiswa->foto = $request->input('foto');
        $mahasiswa->jurusan = $request->input('jurusan');
        $mahasiswa->tmp_lahir = $request->input('tmp_lahir');
        $mahasiswa->tgl_lahir = $request->input('tgl_lahir');
        $mahasiswa->alamat = $request->input('alamat');
        $mahasiswa->nama_ibu = $request->input('nama_ibu');
        $mahasiswa->email = $request->input('email');
        $mahasiswa->hp = $request->input('hp');

        $mahasiswa->save();

        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil ditambahkan');
    }

    public function show($id)
    {
        $mahasiswa = Mahasiswa::find($id);

        return view('mahasiswa.show', compact('mahasiswa'));
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);

        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->nim = $request->input('nim');
        $mahasiswa->nama = $request->input('nama');
        $mahasiswa->jenis_kelamin = $request->input('jenis_kelamin');
        $mahasiswa->foto = $request->input('foto');
        $mahasiswa->jurusan = $request->input('jurusan');
        $mahasiswa->tmp_lahir = $request->input('tmp_lahir');
        $mahasiswa->tgl_lahir = $request->input('tgl_lahir');
        $mahasiswa->alamat = $request->input('alamat');
        $mahasiswa->nama_ibu = $request->input('nama_ibu');
        $mahasiswa->email = $request->input('email');
        $mahasiswa->hp = $request->input('hp');

        $mahasiswa->save();

        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil diupdate');
    }

    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil dihapus');
    }
}