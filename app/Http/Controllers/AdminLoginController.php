<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Support\Facades\Cookie;

class AdminLoginController extends Controller
{   
    use AuthenticatesUsers;

    public function __construct(){
        $this->middleware('guest:admin', ['except' => ['logout']]);
    }

    public function showLoginForm() {
        return view('auth.adminLogin');
    }

    public function login(Request $request){
        // Validating form's data
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        
        Cookie::queue(Cookie::make('email', Cookie::get('email'), 120));
        Cookie::queue('password', Cookie::get('password'), 120);
        
        $remember_login = $request->remember ? true : false;

        // Attempting login user
        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $remember_login)){
            // Success, redirect to intended page
                return redirect()->intended(route('admin.panel'));
        } 

        // Unsuccess, redirect back
        return redirect()->back()->withInput($request->only('email','remember'));
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Auth::guard('admin')->logout();

        return redirect('/');
    }

}
