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

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('admin.users')
            ->with('success', 'Movie deleted successfully');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.useredit', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        if ($request->isMethod('POST')) {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required',
            ]);
            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }
            
            $user = User::find($id);
            if ($user != null) { 
                $user->name = $request->name;
                $user->email = $request->email;
                $user->password = $request->password;
                $user->role = $request->role;
        
                $user->save();
                return redirect()->route('admin.users')
                ->with('success', 'Movie updated successfully');
            } 
            else
            {
                return redirect()->route('admin.users')
                ->with('Error', 'Movie not update');
            }         
        }       
    }

    
}