<?php

namespace App\Http\Controllers;

use App\Models\Outlet;
use App\Models\Pelanggan;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class admin extends Controller
{
    public function keluar()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/login');
    }
}
