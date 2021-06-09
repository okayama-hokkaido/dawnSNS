<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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


    public function search(){
        return view('users.search');
    }
    public function doLogout(){
        Auth::user();
        Auth::logout();
        return redirect('login');
    }
}
