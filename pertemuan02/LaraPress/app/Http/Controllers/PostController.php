<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return view('posts.create'); // Sesuaikan dengan nama view form postinganmu
    }

    public function store(Request $request)
    {
        // Logika simpan postingan
    }

    // Method edit, update, destroy lainnya...
}