<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\User;

class RegController extends Controller
{
    public function index(){
    	
    	return view('register.index');
    }


    public function register(UserRequest $req){

        $user 				= new User();
        $user->name 		= $req->name;
        $user->phone 		= $req->phone;
        $user->email     	= $req->email;
        $user->role     	= $req->role;
        $user->username     = $req->username;
        $user->password     = $req->password;
        
        if($user->save()){
            return redirect()->route('login.index');
        }else{
            return redirect()->route('register.index');
        }
    }
}
