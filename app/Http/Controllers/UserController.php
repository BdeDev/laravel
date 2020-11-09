<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
	/**
	 * Show User Signup Page.
	 *
	 * @param  Request $request
	 * @return view register page
	 */

     public function signup(Request $request) {
     	if(Auth::check()):
     		return redirect('dashboard');
     	endif;
     	return view('auth.register');
     }


     /**
	 * store User Signup details in database.
	 *
	 * @param  Request $request
	 * @return redirect to signin page
	 */

     public function store(Request $request) {
     		
     		$validatedData = $request->validate([
     			'name' => 'required',
     			'email' => 'required',
     			'email' => 'unique:users,email',
     			'password' => 'required|confirmed|min:6'
     		]);

     		try{
     			User::create([
     				'name' => $request->name,
     				'email' => $request->email,
            		'password' => Hash::make($request->password)
            	]);
            	return redirect('/signin')->with('success', 'Register Successfully');
     		}catch(\Exception $e){
     			return Redirect::back()->withInput()->with('error', 'Something Went Wrong');	
     		}

     }

    /**
	 * Show sign in page and User sigin in.
	 *
	 * @param  Request $request
	 * @return view login page with get Method and User login with post Method.
	 */

     public function signin(Request $request) {
     	if ($request->isMethod('post')):
     	$validatedData = $request->validate([
     			'email' => 'required',
     			'password' => 'required|min:6'
     		]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])):
            return redirect('dashboard')->with('success', 'Login succesfully');
        else:	     		
     		return Redirect::back()->withInput()->with('error', 'Invalid Credentials');
        endif;
     	else:
     	if(Auth::check()):
     		return redirect('dashboard');
     	endif;	     		
     		return view('auth.login');
     	endif;	
     }


}
