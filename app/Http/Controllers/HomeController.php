<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $role = Auth::user()->role; 

            switch ($role) {
                case 'admin':
                    return redirect()->route('admin.panel');
                    break;

                case 'user':
                    return redirect()->route('user.home');
                    break;
                
                default:
                    return redirect('guest.index');
                    break;
            }
    }
}
