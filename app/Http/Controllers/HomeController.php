<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\User;

class HomeController extends Controller
{
    public function admin(){
    	
    	return view('homePages.admin');
    }


    public function scout(){
    	
    	return view('homePages.scout');
    }


    public function user(){
    	
    	return view('homePages.user');
    }


    public function register(){
        
        return view('admin.addUser');
    }


     public function registerDone(UserRequest $req){

        $user               = new User();
        $user->name         = $req->name;
        $user->phone        = $req->phone;
        $user->email        = $req->email;
        $user->role         = $req->role;
        $user->username     = $req->username;
        $user->password     = $req->password;
        
        if($user->save()){
            return redirect()->route('home.userDetails');
        }else{
            return redirect()->route('home.register');
        }
    }


    public function userDetails(){
        $users = User::all();
        return view('admin.allUsers', ['users'=>$users]);
    }


    public function updateShow($id){
        
        $user = User::find($id);
        return view('admin.updateShow', $user);
    }


    public function updateDone($id, UserRequest $req){

        $user               = User::find($id);
        $user->name         = $req->name;
        $user->phone        = $req->phone;
        $user->email        = $req->email;
        $user->role         = $req->role;
        $user->username     = $req->username;
        $user->password     = $req->password;

        if($user->save()){
            return redirect()->route('home.userDetails');
        }else{
            return redirect()->route('home.updateShow', $id);
        }
    }


     public function deleteShow($id){
        $user = User::find($id);
        return view('admin.deleteShow', $user);
    }


    public function deleteDone($id, Request $req){
        if(User::destroy($req->id)){
            return redirect()->route('home.userDetails');
        }else{
            return redirect()->route('admin.deleteShow', $id);
        }
    }


}
