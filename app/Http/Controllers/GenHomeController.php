<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GenHomeController extends Controller
{
    public function index(){

    	$place = DB::select("select posts.poid, places.pname, places.pdes, countries.name, posts.cost, posts.travel_medium, posts.facilities from posts, places, countries where posts.pid = places.pid and posts.status=1");
    	
    	return view('genHome.index', ['places'=>$place]);
    }

}
