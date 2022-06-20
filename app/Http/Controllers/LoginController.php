<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class LoginController extends Controller
{
    public function postlogin (Request $request){
    	// dd($request->all());

    	 $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:5'
        ]);

    	if (auth()->guard('user')->attempt($request->only('email', 'password'))) {
    		return redirect('/home');    	
    	}
    	
    	return redirect ('login');
}


	 public function logout (Request $request){
    	Auth::logout();
    	return redirect('/');  
}
}