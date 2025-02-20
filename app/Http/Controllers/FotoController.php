<?php

namespace App\Http\Controllers;

//import Model "Foto
use App\Models\Foto;

//import Model "User
use App\Models\User;

//import Model "Album
use App\Models\Album;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class FotoController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $fotos = Foto::latest()->paginate(5);

        //render view with posts
        return view('fotos.index', compact('fotos'));
    }

     /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        // Mengambil semua data album dari database
        $albums = Album::all();

        $user = Auth::user(); // Mendapatkan pengguna yang sedang login

        // Mengirim data album dan user ke view 'fotos.create'
        return view('fotos.create', compact('albums', 'user'));

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
            'gambar'            => 'required|image|max:2048',
            'deskripsi_foto'    => 'required',
            'tglunggah'         => 'required|date',
            'jumlah_foto'       => 'required'
        ]);

        //upload image
        $gambar = $request->file('gambar');
        $gambar->storeAs('public/fotos', $gambar->hashName());

        //create post
        Foto::create([
            'gambar'            => $gambar->hashName(),
            'deskripsi_foto'    => $request->deskripsi_foto,
            'tglunggah'         => date('Y-m-d', strtotime($request->tglunggah)), // Konversi ke format YYYY-MM-DD
            'jumlah_foto'       => $request->jumlah_foto,
            'albumid'           => $request->albumid,
            'userid'            => auth()->id() // ID user dari pengguna yang login
        ]);

        //redirect to index
        return redirect()->route('fotos.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * show
     *
     * @param  mixed $fotoid
     * @return View
     */
    public function show(string $fotoid): View
    {
        //get post by ID
        $foto = Foto::findOrFail($fotoid);

        //render view with post
        return view('fotos.show', compact('foto'));
    }

    /**
     * edit
     *
     * @param  mixed $fotoid
     * @return View
     */
    public function edit(string $fotoid): View
    {
        $user = Auth::user(); // Mendapatkan pengguna yang sedang login

        //get post by ID
        $foto = Foto::findOrFail($fotoid);

        // Mengambil semua data album dari database
        $albums = Album::all();

        //render view with post
        return view('fotos.edit', compact('foto', 'albums'));
    }
    
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $fotoid): RedirectResponse
    {

        //validate form
        $this->validate($request, [
            'gambar'            => 'required|image|max:2048',
            'deskripsi_foto'    => 'required',
            'tglunggah'         => 'required|date',
            'jumlah_foto'       => 'required',
            'albumid'           => 'required|exists:albums,albumid', // Validasi albumid
        ]);

        //get post by ID
        $foto = Foto::findOrFail($fotoid);

        //check if image is uploaded
        if ($request->hasFile('gambar')) {

            //upload new image
            $gambar = $request->file('gambar');
            $gambar->storeAs('public/fotos', $gambar->hashName());

            //delete old image
            Storage::delete('public/fotos/'.$foto->gambar);

            //update post with new gambar
            $foto->update([
                'gambar'             => $gambar->hashName(),
                'deskripsi_foto'    => $request->deskripsi_foto,
                'tglunggah'         => date('Y-m-d', strtotime($request->tglunggah)), // Konversi ke format YYYY-MM-DD
                'jumlah_foto'       => $request->jumlah_foto,
                'albumid'           => $request->albumid,
                'userid'            => auth()->id() // ID user dari pengguna yang login
            ]);

        } else {

            //update post without gambar
            $foto->update([
                'deskripsi_foto'    => $request->deskripsi_foto,
                'tglunggah'         => date('Y-m-d', strtotime($request->tglunggah)), // Konversi ke format YYYY-MM-DD
                'jumlah_foto'       => $request->jumlah_foto,
                'albumid'           => $request->albumid,
                'userid'            => auth()->id() // ID user dari pengguna yang login
            ]);
        }

        //redirect to index
        return redirect()->route('fotos.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * destroy
     *
     * @param  mixed $post
     * @return void
     */
    public function destroy($fotoid): RedirectResponse
    {
        //get post by ID
        $foto = Foto::findOrFail($fotoid);

        //delete image
        Storage::delete('public/fotos/'. $foto->gambar);

        //delete post
        $foto->delete();

        //redirect to index
        return redirect()->route('fotos.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
