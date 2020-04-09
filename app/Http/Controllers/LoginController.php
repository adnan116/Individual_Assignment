<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class LoginController extends Controller
{

    public function index(){
    	
    	return view('login.index');
    }


    public function verification(Request $req){
    		
    	$user = User::where('username', $req->username)
    				->where('password', $req->password)
                    ->first();
    	
    	if($user != null){
            if ($user->role == 'admin') {
                $req->session()->put('username', $req->username);
                $req->session()->put('type', $user->role);
                return redirect()->route('home.admin');
            }
            else if ($user->role == 'scout') {
                $req->session()->put('username', $req->username);
                $req->session()->put('type', $user->role);
                return redirect()->route('home.scout');
            }
            else if ($user->role == 'user') {
                $req->session()->put('username', $req->username);
                $req->session()->put('type', $user->role);
                return redirect()->route('home.user');
            }
    	}else{
            $req->session()->flash('msg', 'Invalid username/password');
            return redirect('/login');
    	}
   	}
}
