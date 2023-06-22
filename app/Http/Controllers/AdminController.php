<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function ShowUser()
    {
        $users = User::latest()->paginate(9);

        return view('admin.users.index', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 9);
    }
}