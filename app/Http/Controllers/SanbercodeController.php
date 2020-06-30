<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SanbercodeController extends Controller
{
    public function welcome(Request $request){
    	$this->validate($request,[
    		'first_name' => 'required',
    		'last_name' => 'required'
    	]);
    	return view('welcome',['data' => $request]);
    }

    public function register(){
    	return view('register');
    }
}
