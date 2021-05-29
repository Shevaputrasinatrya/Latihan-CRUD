<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kelas;

class KelasController extends Controller
{
    public function index()
    {
        $kelas = kelas::all();
        return view('kelas.index', compact('kelas'));
    }

    public function tambah()
    {
        return view('kelas.tambah');
    }

    public function store(Request $request)
    {
        kelas::create($request->all());
        return redirect()->route('kelas.index');
    }

    public function edit($id)
    {
        $kelas = kelas::find($id);
        return view('kelas.edit', compact('kelas'));
    }
    public function update(Request $request,$id)
    {
        kelas::find($id)->update($request->all());
        return redirect()->route('kelas.index');
    }
    public function hapus($id)
    {
        kelas::destroy($id);
        return redirect()->route('kelas.index');
    }
}
