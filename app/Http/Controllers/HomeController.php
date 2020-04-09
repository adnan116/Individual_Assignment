<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
