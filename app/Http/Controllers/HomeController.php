<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * dashboard
     *
     * 
     */
    public function index()
    {
        return View('layout.home');
    }
}
