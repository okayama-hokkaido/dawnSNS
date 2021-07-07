<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Encryption\DecryptException;
use App\Post;


class PostsController extends Controller

{
    //
    public function index(Request $request){
        $user=Auth::user();
        $posts=\DB::table('posts')
        ->get();
        return view('posts.index', ['user' => $user,'posts' => $posts]);
    }

    public function store(Request $request){
        $post = new Post();
        $post->user_id = Auth::user()->id;
        $post->posts = $request->posts;
        $post->save();

        return redirect('/top');
    }
}
