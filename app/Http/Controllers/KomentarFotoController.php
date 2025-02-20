<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KomentarFoto;
use App\Models\Foto;
use App\Models\User;

class KomentarFotoController extends Controller
{
    public function index()
    {
        $komentar = KomentarFoto::with(['foto', 'user'])->get();
        return view('komentarfoto.index', compact('komentar'));
    }

    public function create()
    {
        $fotos = Foto::all();
        $users = User::all();
        return view('komentarfoto.create', compact('fotos', 'users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'FotoID' => 'required|exists:fotos,fotoid',
            'UserID' => 'required|exists:users,userid',
            'IsiKomentar' => 'required',
            'TanggalKomentar' => 'required|date',
        ]);

        KomentarFoto::create($request->all());
        return redirect()->route('komentarfoto.index')->with('success', 'Like foto berhasil ditambahkan.');
    }

    public function show(KomentarFoto $komentarfoto)
    {
        return view('komentarfoto.show', compact('komentarfoto'));
    }


    public function edit(KomentarFoto $komentarfoto)
    {
        $fotos = Foto::all();
        $users = User::all();
        return view('komentarfoto.edit', compact('komentarfoto', 'fotos', 'users'));
    }

    public function update(Request $request, KomentarFoto $komentarfoto)
    {
        $request->validate([
            'FotoID' => 'required|exists:fotos,fotoid',
            'UserID' => 'required|exists:users,userid',
            'IsiKomentar' => 'required',
            'TanggalKomentar' => 'required|date',
        ]);

        $komentarfoto->update($request->all());
        return redirect()->route('komentarfoto.index')->with('success', 'Komentar foto berhasil diperbarui.');
    }

    public function destroy(KomentarFoto $komentarfoto)
    {
        $komentarfoto->delete();
        return redirect()->route('komentarfoto.index')->with('success', 'Komentar foto berhasil dihapus.');
    }
}