<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rules;

class AuthController extends Controller
{
    public function login_page()
    {
        return view('pages.authentication.auth-login');
    }

    public function doLogin(Request $request)
    {

        //validasi
        $cridentials = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'password' => ['required', Rules\Password::defaults()],
        ]);

        if (Auth::attempt($cridentials)) {
            $request->session()->regenerate();
        }

        // menampilkan pesan error jika kredential yang dimasukkan salah
        return back()->withErrors([
            'name' => 'Username and password invalid.',
        ])->onlyInput('name');

        return redirect()->route('admin.dashboard.page');
    }

    public function doLogout(Request $request)
    {
        Session::flush();

        Auth::logout();

        return redirect()->route('login.page');
    }
}
