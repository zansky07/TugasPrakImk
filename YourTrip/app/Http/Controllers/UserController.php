<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index()
    {
        $hotels = DB::table('hotels')->get();
        return view('dashboard.users.index', ['hotels' => $hotels]);
    }

    function wisata()
    {
        $wisatas = DB::table('wisatas')->get();
        return view('dashboard.users.wisata', ['wisatas' => $wisatas]);
    }

    function akomodasi()
    {
        $hotels = DB::table('hotels')->get();
        return view('dashboard.users.akomodasi', ['hotels' => $hotels]);
    }

    function hotel()
    {
        //$hotels = DB::table('hotels')->get();
        //return view('dashboard.user.index', ['hotels' => $hotels]);
        // return view('dashboard.admin.akun', ['users' => $user]);

    }

    function tiket()
    {
        return view('dashboard.users.tiket');
    }
}
