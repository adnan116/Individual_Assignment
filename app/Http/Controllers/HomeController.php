<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Requests\CountryRequest;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Country;

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


    public function addCountry(){
        
        $users = User::all()->where('role','scout');
        return view('admin.addCountry', ['user'=>$users]);
    }


    public function addCountryDone(CountryRequest $req){

        $country        = new Country();
        $country->name  = $req->name;
        $country->id    = $req->scoutName;
       
        
        if($country->save()){
            return redirect()->route('home.countryDetails');
        }else{
            return redirect()->route('home.addCountry');
        }
    }


    public function countryDetails(){
        $country = DB::select("select countries.cid, countries.name, users.name 'scout' from countries, users where countries.id = users.id");
        return view('admin.countryDetails', ['countries'=>$country]);
    }


    public function updateCountry($id){
        
        $country = Country::find($id);
        $allUsers = User::all()->where('role','scout');
        $oneUser = User::find($country['id']);
        return view('admin.updateCountry', ['countries'=>$country, 'users'=>$allUsers, 'user'=>$oneUser]);
    }


    public function updateCountryDone($id, CountryRequest $req){

        $country            = Country::find($id);
        $country->name      = $req->name;
        $country->id        = $req->scoutName;

        if($country->save()){
            return redirect()->route('home.countryDetails');
        }else{
            return redirect()->route('home.updateCountry', $id);
        }
    }


    public function deleteCountry($id){
        $country = Country::find($id);
        $user = User::find($country['id']);
        return view('admin.deleteCountry', ['countries'=>$country, 'users'=>$user]);
    }


    public function deleteCountryDone($id, Request $req){
        if(Country::destroy($req->id)){
            return redirect()->route('home.countryDetails');
        }else{
            return redirect()->route('home.deleteCountry', $id);
        }
    }



}
