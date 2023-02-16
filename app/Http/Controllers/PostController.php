<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PostController extends Controller
{
    public function index()
    {
        $posts = Pelanggan::latest()->get();
        return view('registpelanggan.tambahp', compact('posts'));
    }
    // public function create()
    // {
    //     return view('registpelanggan.tambahp');
    // }
}
