<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Auth;

class RegistrationLoginController extends Controller
{   

    public function __construct(){
        $this->middleware('guest');
    }

    public function store(Request $request){
        $input = $request->all();

        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ], [
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'email.email' => 'Email is invalid',
            'email.unique' => 'Email has been registered',    
            'password.required' => 'Password is required',
            'password.min' => 'Password minimum length is 6',
            'paswword.confirmed' => 'Password Confirmation is not the same'
        ]);
        
        $input['password'] = Hash::make($input['password']);
        User::create($input);
        
        if($input){
            Session::flash('success', 'User Created Successfully');
            Auth::logout();
            return redirect()->route('login');
        } else {
            Session::flash('errors', ['' => 'User Created Unsuccessfully']);
            return redirect()->route('user.register');
        }
    }
}