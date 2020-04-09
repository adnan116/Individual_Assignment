<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenHomeController extends Controller
{
    public function index(){
    	
    	return view('genHome.index');
    }
}
