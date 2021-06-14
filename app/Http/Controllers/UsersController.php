<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UsersController extends Controller
{
        public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function profile(){
        $user = Auth::user();
        return view('users.profile',['user'=>$user]);
    }

    public function profileUpdate(Request $request){
        $id = $request->input('id');
        $user = \App\User::find($id);

        $user['username'] = $request['username'];
        $user['mail'] = $request['mail'];

        if($request->filled('passwordConfirm')){
        $user['password'] = $request['passwordConfirm'];
        }
        if($request->filled('bio')){
        $user['bio'] = $request['bio'];
        }

        /* 写真の更新については後日 */
        // if(isset($request['images'])){
        // $user['images'] = $request['images'];
        // }
        $user->save();
        return redirect('/top');
    }


    public function search(){
        return view('users.search');
    }
    public function doLogout(){
        Auth::user();
        Auth::logout();
        return redirect('login');
    }
}
