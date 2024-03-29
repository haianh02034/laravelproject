<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use Exception;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view('sign_in');
    }
    public function postLogin(Request $request)
    {
        $validatedData = $request->validate([
            'sign-in-email' => 'required|email',
            'sign-in-passwd' => 'required',
        ]);
        if ($validatedData['sign-in-email'] === 'admin@admin.com' && $validatedData['sign-in-passwd'] === 'haianh2003') {
            // Xác thực thành công, đăng nhập với tài khoản admin
            // Điều hướng tới trang dashboard hoặc trang chính của ứng dụng
            return redirect()->intended('/admin/dashboard');
        } else {
            $user = User::where('email', $validatedData['sign-in-email'])->first();
    
            if ($user && Hash::check($validatedData['sign-in-passwd'], $user->password)) {
                // Xác thực thành công
                Auth::login($user);
                return redirect()->intended('/index.html');
            } else {
                // Xác thực thất bại
                return redirect()->back()->withErrors([
                    'signin' => 'Invalid credentials',
                ]);
            }
        }
    }
    public function getLogout()
    {
        Auth::logout();
        return redirect()->intended('/sign_in.html');
    }
    public function getRegister()
    {
        return view('register');
    }
    public function postRegister(Request $request)
    {
        $validatedData = $request->validate([
            'sign-up-name' => 'required',
            'sign-up-email' => 'required|email|unique:users,email',  
            'sign-up-passwd' => 'required|min:8',            
        ], [
            'sign-up-email.unique' => 'The email has already been taken.',        
        ]);
        $user = new User;
        $user->name = $validatedData['sign-up-name'];
        $user->email = $validatedData['sign-up-email'];
        // $user->avatar = $validatedData[''];  
        $user->role = 'user';
        $user->password = Hash::make($validatedData['sign-up-passwd']);
        $user->save();
        return redirect()->back()->with('success', 'You have successfully created an account.');
    }
//login-goole
    public function login()
    {
        return view('sign_in');
    }
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->stateless()->user();
        $findUser = User::where('email', $user->getEmail())->first();
        if ($findUser) {
            Auth::login($findUser);
            return redirect()->intended('/index.html');
        } else {
            $newUser = new User;
            $newUser->provider_name = "Google";
            $newUser->provider_id = $user->getId();
            $newUser->name = $user->getName();
            $newUser->email = $user->getEmail();
            // $newUser->email_verified_at = now();
            $newUser->role = 'user';
            $newUser->save();
            Auth::login($newUser);
            return redirect()->intended('index.html');
        }
    }

// Hiển thị thông tin cá nhân
public function showProfile()
{
    $user = Auth::user();
    return view('profile', ['user' => $user]);
}
// Cập nhật thông tin cá nhân
public function updateProfile(Request $request)
{
    $user = Auth::user();
    $validatedData = $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users,email,' . $user->id,
        'current_password' => 'required',
        'new_password' => 'nullable|min:6|different:current_password|confirmed',
    ]);
    // Kiểm tra mật khẩu cũ
    if (!Hash::check($validatedData['current_password'], $user->password)) {
        return redirect()->back()
            ->withErrors(['current_password' => 'Mật khẩu cũ không chính xác.'])
            ->withInput();
    }
    $user->name = $validatedData['name'];
    $user->email = $validatedData['email'];
    // Cập nhật mật khẩu mới nếu có
    if ($request->filled('new_password')) {
        $user->password = Hash::make($validatedData['new_password']);
    }
    $user->save();
    return redirect()->route('profile')->with('success', 'Thông tin cá nhân đã được cập nhật.');
}
 
}
