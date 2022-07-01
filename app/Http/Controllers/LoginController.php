<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class LoginController extends Controller
{

	 public function index(){

        $active = 'login';
        return view('user/login',['active' => $active]);
    }


	 public function postlogin(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/home');
        }
 		
		return redirect ('/login');

        // return back()->withErrors([
        //     'loginError' => 'login gagal',
        // ]);
    }

//     public function postlogin (Request $request){
//     	// dd($request->all());

// 		$credentials = $request->validate([
//             'email' => 'required|email:dns|',
//             'password' => 'required'
//         ]);


//     	if (Auth::attempt($credentials)) {
//     		return redirect('/home');    	
//     	}
    
//     	return redirect ('login');

// }


	 public function logout (Request $request){
	    Auth::logout();
 
	    $request->session()->invalidate();
	 
	    $request->session()->regenerateToken();
	 
	    return redirect('login');
		}

}