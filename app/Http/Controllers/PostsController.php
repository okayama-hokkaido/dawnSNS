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
        return view('posts.index', ['user' => $user]);
    }

    public function store(Request $request){
        $data = [
            'user_id' => $request['id'],
            'post'=> $request['post']
        ];
        dd($data);
        view('posts.index');
    }
}
