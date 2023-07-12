<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function ShowUser()
    {
        $user = User::latest()->paginate(9);

        return view('admin.users', compact('user'))
            ->with('i', (request()->input('page', 1) - 1) * 9);
    }

    
}