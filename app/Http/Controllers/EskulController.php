<?php

namespace App\Http\Controllers;

use App\Models\Eskul;
use Illuminate\Http\Request;

class EskulController extends Controller
{
    public function index()
    {
        $eskuls = Eskul::all();
        return view('eskul.index', compact('eskuls'));
    }

    public function create()
    {
        return view('eskul.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_eskul' => 'required',
            'guru' => 'required',
            'ruangan' => 'required',
            'jadwal' => 'required',
        ]);

        Eskul::create($request->all());

        return redirect()->route('eskul.index')
            ->with('success', 'Eskul berhasil ditambahkan.');
    }

    public function show(Eskul $eskul)
    {
        return view('eskul.show', compact('eskul'));
    }

    public function edit(Eskul $eskul)
    {
        return view('eskul.edit', compact('eskul'));
    }

    public function update(Request $request, Eskul $eskul)
    {
        $request->validate([
            'nama_eskul' => 'required',
            'guru' => 'required',
            'ruangan' => 'required',
            'jadwal' => 'required',
        ]);

        $eskul->update($request->all());

        return redirect()->route('eskul.index')
            ->with('success', 'Eskul berhasil diperbarui.');
    }

    public function destroy(Eskul $eskul)
    {
        $eskul->delete();

        return redirect()->route('eskul.index')
            ->with('success', 'Eskul berhasil dihapus.');
    }
}
