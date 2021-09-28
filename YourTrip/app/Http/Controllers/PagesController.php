<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('landpage.index');
    }

    public function wisata()
    {
        return view('landpage.wisata');
    }

    public function akomodasi()
    {
        return view('landpage.akomodasi');
    }

    public function gallery()
    {
        return view('landpage.gallery');
    }

    public function contacts()
    {
        return view('landpage.contacts');
    }
}
