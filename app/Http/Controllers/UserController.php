<?php

namespace App\Http\Controllers;

//import Model "User
use App\Models\User;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $users = User::latest()->paginate(5);

        //render view with siswa
        return view('users.index', compact('users'));
    }

    /**
     * show
     *
     * @param  mixed $id
     * @return View
     */
    public function show(string $userid): View
    {
        //get post by ID
        $user = User::findOrFail($userid);

        //render view with post
        return view('users.show', compact('user'));
    }
}