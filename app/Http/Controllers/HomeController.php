<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Requests\CountryRequest;
use App\Http\Requests\PlaceRequest;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Country;
use App\Place;

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


    public function addPlace(){
        
        $country = Country::all();
        return view('admin.addPlace', ['countries'=>$country]);
    }


    public function addPlaceDone(PlaceRequest $req){

        $place        = new Place();
        $place->pname  = $req->name;
        $place->pdes    = $req->description;
        $place->cid    = $req->country;
        
        if($place->save()){
            return redirect()->route('home.placeDetails');
        }else{
            return redirect()->route('home.addPlace');
        }
    }


    public function placeDetails(){
        $place = DB::select("select places.pid, places.pname, places.pdes, countries.name, users.name 'scout' from places, countries, users where places.cid = countries.cid and countries.id = users.id");
        return view('admin.placeDetails', ['places'=>$place]);
    }


    public function updatePlace($id){
        
        $onePlace = Place::find($id);
        $allCountry = Country::all();
        $oneCountry = Country::find($onePlace['cid']);
        return view('admin.updatePlace', ['place'=>$onePlace, 'countries'=>$allCountry, 'country'=>$oneCountry]);
    }


    public function updatePlaceDone($id, PlaceRequest $req){

        $place            = Place::find($id);
        $place->pname     = $req->name;
        $place->pdes      = $req->description;
        $place->cid        = $req->country;

        if($place->save()){
            return redirect()->route('home.placeDetails');
        }else{
            return redirect()->route('home.updatePlace', $id);
        }
    }


    public function deletePlace($id){
        $onePlace = Place::find($id);
        $oneCountry = Country::find($onePlace['cid']);
        $user = User::find($oneCountry['id']);
        return view('admin.deletePlace', ['place'=>$onePlace, 'country'=>$oneCountry, 'users'=>$user]);
    }


    public function deletePlaceDone($id, Request $req){
        if(Place::destroy($req->id)){
            return redirect()->route('home.placeDetails');
        }else{
            return redirect()->route('home.deletePlace', $id);
        }
    }

    public function updateProfile(Request $req){

        $user = DB::table('users')->where('username', $req->session()->get('username'))->first();
        
        //$user = User::where('username', $req->session()->get('username'))->get();
        //print_r($user);
        return view('admin.updateProfile', ['users'=>$user]);
    }


     public function updateProfileDone(UserRequest $req){

        $user               = User::find($req->id);
        $user->name         = $req->name;
        $user->phone        = $req->phone;
        $user->email        = $req->email;
        $user->role         = $req->role;
        $user->username     = $req->username;
        $user->password     = $req->password;

        if($user->save()){
            return redirect()->route('home.updateProfile');
        }else{
            return redirect()->route('home.updateProfile', $req->id);
        }
    }

}
