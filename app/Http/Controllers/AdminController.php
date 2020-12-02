<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.panel');
    }

    public function addproduct()
    {
        return view('admin.addproduct');
    }

    public function listproduct()
    {
        return view('admin.listproduct');
    }

    public function addcategory()
    {
        return view('admin.addcategory');
    }

    public function listcategory()
    {
        return view('admin.listcategory');
    }
}
