<?php

namespace App\Http\Controllers;

//import Model "Album
use App\Models\Album;

//import Model "User
use App\Models\User;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class AlbumController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get albums
        $albums = Album::latest()->paginate(5);

        //render view with albums
        return view('albums.index', compact('albums'));
    }

     /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        $users = User::all();
        return view('albums.create', compact('users'));

        if (!auth()->check()) {
            return redirect()->route('login')->with(['error' => 'Anda harus login terlebih dahulu!']);
        }
        
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'nama_album'    => 'required',
            'deskripsi'     => 'required',
            'tglbuat'       => 'required|date',
            'ttl_foto'      => 'required'
        ]);

        //create post
        Album::create([
            'nama_album'    => $request->nama_album,
            'deskripsi'     => $request->deskripsi,
            'tglbuat'       => $request->tgl_buat ?? now()->toDateString(),
            'ttl_foto'      => $request->ttl_foto,
            'userid'        => auth()->id() // ID user dari pengguna yang login
        ]);

        //redirect to index
        return redirect()->route('albums.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * show
     *
     * @param  mixed $albumid
     * @return View
     */
    public function show(string $albumid): View
    {
        //get album by ID
        $album = Album::findOrFail($albumid);

        //render view with post
        return view('albums.show', compact('album'));
    }

    /**
     * edit
     *
     * @param  mixed $albumid
     * @return View
     */
    public function edit(string $albumid): View
    {
        //get post by ID
        $album = Album::findOrFail($albumid);
        $users = User::all();

        //render view with post
        return view('albums.edit', compact('album'));
    }
    
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $albumid
     * @return RedirectResponse
     */
    public function update(Request $request, $albumid): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'nama_album'    => 'required',
            'deskripsi'     => 'required',
            'tglbuat'       => 'required|date',
            'ttl_foto'      => 'required'
        ]);

        //get post by ID
        $album = Album::findOrFail($albumid);

        //update guru
        $album->update([
            'nama_album'    => $request->nama_album,
            'deskripsi'     => $request->deskripsi,
            'tglbuat'       => date('Y-m-d', strtotime($request->tglbuat)), // Konversi ke format YYYY-MM-DD
            'ttl_foto'      => $request->ttl_foto,
            'userid'        => auth()->id() // ID user dari pengguna yang login
        ]);

        //redirect to index
        return redirect()->route('albums.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * destroy
     *
     * @param  mixed $album
     * @return void
     */
    public function destroy($albumid): RedirectResponse
    {
        //get post by ID
        $album = Album::findOrFail($albumid);

        //delete post
        $album->delete();

        //redirect to index
        return redirect()->route('albums.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}