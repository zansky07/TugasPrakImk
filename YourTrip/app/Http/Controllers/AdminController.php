<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class AdminController extends Controller
{
    function index()
    {
        return view('dashboard.admin.index');
    }
    function akun()
    {
        $users = DB::table('users')->get();
        return view('dashboard.admin.akun', ['users' => $users]);
        // return view('dashboard.admin.akun', ['users' => $user]);
    }

    public function create()
    {
        return view('dashboard.admin.create');
    }

    public function edit($id)
    {
        $user =  DB::table('users')->where('id', $id)->first();

        return view('dashboard.admin.edit', ['user' => $user]);
    }

    function tiket()
    {
        $tickets = DB::table('tickets')->paginate(6);
        return view('dashboard.admin.tiket', ['tickets' => $tickets]);
    }
}
