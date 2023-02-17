<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index() {
        return view('login');
    }

    public function gas(Request $asup)
    {
        if(Auth()->attempt(['username' => $asup->username, 'password' => $asup->password])) {
            $asup->session()->regenerate();

            return redirect('/');
        }
        return back()->with('loginerror', 'Gagal Masuk');
    }

    public function proses() {
        // $validate = $request->validate([
        //     'username' => 'required',
        //     'password' => 'required'
        // ]);

        // if (Auth::attempt($validate)) {
        //     $user = Auth::user();

        //     if ($user->level == 'admin') {
        //         return redirect('/');
        //     } elseif ($user->level == 'kasir') {
        //         return redirect('/');
        //     } elseif ($user->level == 'owner') {
        //         return redirect('/');
        //     }
        //     return view('/login');
        // }

        if (auth()->user()->level === 'admin') {
            return redirect('/');
        } elseif (auth()->user()->level === 'kasir') {
            return redirect('/');
        }
            elseif (auth()->user()->level === 'owner') {
                return redirect('/');
        } else {
            return redirect('/login');
        }

    }
}
