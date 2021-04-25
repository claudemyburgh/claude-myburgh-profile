<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __invoke(Request $request)
    {
        $posts = Post::orderBy('id', 'asc')->get();

        return view('home', [
            'posts' => $posts,
        ]);



    }
}
