<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use Hash;
use App\Models\Users;

class AdminLoginController extends Controller
{
	use AuthenticatesUsers;

	protected $request;

	public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function admin_login(){
    	if(auth()->guard('user')->user()){
            // dd(auth()->guard('user')->user()->id);
    		return redirect('showaccount');
    	}
    	else{
    		return view('Auth.adminLogin');
    	}
    }
    public function authenticate()
    {
        $email = $this->request->input('mentor_email');
        $password = $this->request->input('mentor_password');        
        if (Auth::guard('user')->attempt(['email' => $email, 'password' => $password,'active'=> '1'])) 
        {
            // echo 'test';
            // echo Auth::check();exit;
            // dd(Auth::check());
            // return view('test');
            
            return redirect('showaccount');
        }
        else
        {
            return redirect()->intended('/')->with('message', 'Invalid Login Credentials !')->withInput();
        }
    }
    public function getLogout() 
    {
        auth()->guard('user')->logout();        
        return redirect()->intended('/');
    }
}
