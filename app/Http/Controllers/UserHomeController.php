<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserScoutRequest;
use Illuminate\Support\Facades\DB;
use App\User;

class UserHomeController extends Controller
{
    public function updateProfile(Request $req){

        $user = DB::table('users')->where('username', $req->session()->get('username'))->first();
        
        //$user = User::where('username', $req->session()->get('username'))->get();
        //print_r($user);
        return view('user.updateProfile', ['users'=>$user]);
    }


     public function updateProfileDone(UserScoutRequest $req){

        $user               = User::find($req->id);
        $user->name         = $req->name;
        $user->phone        = $req->phone;
        $user->email        = $req->email;
        $user->username     = $req->username;
        $user->password     = $req->password;

        if($user->save()){
            return redirect()->route('user.updateProfile');
        }else{
            return redirect()->route('user.updateProfile', $req->id);
        }
    }
}
