<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class LoginController extends Controller
{
    public function index()
    {

        return view('login.index', [
            'title' => 'login'
        ]);
    }

    public function login(Request $request)
    {
        $email = $request->email;
        $user = User::where('email', $email)->first();
        if ($user) {
            Auth::login($user);
            return redirect()->intended();
        } else {
            return redirect('dashbooard.product.index')->back();
        }
    }

    // public function authenticate(Request $request)
    // {
    //     $credentials = $request->validate([
    //         'email' => 'required|email',
    //         'city' => 'required'
    //     ]);
    //     if (Auth::attempt($credentials)) {
    //         $request->session()->regenerate();
    //         return redirect()->intended('/');
    //     }

    //     return back()->with('loginError', 'login gagal');
    // }

    public function logout(Request $request)
    {

        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }
}
