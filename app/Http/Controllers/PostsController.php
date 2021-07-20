<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index()
    {
        $id = 2;

        $posts = DB::table('posts')
            ->where('id', 6)
            ->delete();

        dd($posts);
    }
}
