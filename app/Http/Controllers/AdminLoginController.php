<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{   

    public function __construct(){
        $this->middleware('guest:admin');
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
        // Attempting login user
        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
            // Success, redirect to intended page
                return redirect()->intended(route('admin.panel'));
        } 

        // Unsuccess, redirect back
        return redirect()->back()->withInput($request->only('email','remember'));
    }
}
