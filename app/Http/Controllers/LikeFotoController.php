<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LikeFoto;
use App\Models\Foto;
use App\Models\User;

class LikeFotoController extends Controller
{
    /**
     * Tampilkan daftar like foto.
     */
    public function index()
    {
        $likeFotos = LikeFoto::with(['foto', 'user'])->get();
        return view('like_fotos.index', compact('likeFotos'));
    }

    /**
     * Tampilkan form tambah like foto.
     */
    public function create()
    {
        $fotos = Foto::all();
        $users = User::all();
        return view('like_fotos.create', compact('fotos', 'users'));
    }

    /**
     * Simpan like foto ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'FotoID' => 'required|exists:fotos,fotoid',
            'UserID' => 'required|exists:users,userid',
            'TanggalLike' => 'required|date',
        ]);

        LikeFoto::create($request->all());

        return redirect()->route('like_fotos.index')->with('success', 'Like foto berhasil ditambahkan.');
    }

    /**
     * Tampilkan detail like foto.
     */
    public function show(LikeFoto $likeFoto)
    {
        return view('like_fotos.show', compact('likeFoto'));
    }

    /**
     * Tampilkan form edit like foto.
     */
    public function edit(LikeFoto $likeFoto)
    {
        $fotos = Foto::all();
        $users = User::all();
        return view('like_fotos.edit', compact('likeFoto', 'fotos', 'users'));
    }

    /**
     * Update like foto di database.
     */
    public function update(Request $request, LikeFoto $likeFoto)
    {
        $request->validate([
            'FotoID' => 'required|exists:fotos,fotoid',
            'UserID' => 'required|exists:users,userid',
            'TanggalLike' => 'required|date',
        ]);

        $likeFoto->update($request->all());

        return redirect()->route('like_fotos.index')->with('success', 'Like foto berhasil diperbarui.');
    }

    /**
     * Hapus like foto dari database.
     */
    public function destroy(LikeFoto $likeFoto)
    {
        $likeFoto->delete();
        return redirect()->route('like_fotos.index')->with('success', 'Like foto berhasil dihapus.');
    }
}
