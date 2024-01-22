<?php

namespace App\Http\Controllers;

use App\Models\buku;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = buku::all();
        return response()->json($posts);
    }
}
