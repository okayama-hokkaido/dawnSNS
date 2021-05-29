<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;


class PostsController extends Controller
{

    //
    public function index(Request $request){
        // $login_user = $request->old();
        // $username = DB::table('users')->where('mail',$login_user['mail'])->value('username');
        $user=Auth::user()->only('username');
        return view('posts.index', ['username' => $user]);
    }
}
