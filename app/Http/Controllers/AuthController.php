<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index() {
        return view('login');
    }

    public function proses(Request $request) {
        $validate = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($validate)) {
            $user = Auth::user();

            if ($user->level == 'admin') {
                return redirect()->intended('/');
            } elseif ($user->level == 'kasir') {
                return redirect()->intended('/');
            } elseif ($user->level == 'owner') {
                return redirect()->intended('/');
            }
            return view('/login');
        }

    }
}
