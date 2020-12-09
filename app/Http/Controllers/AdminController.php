<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
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
        return view('admin.panel');
    }

    public function addproduct()
    {
        $categories = DB::table('categories')->get();

        return view('admin.addproduct', ['categories'=>$categories]);
    }

    public function listproduct()
    {
        $products = DB::table('products')->get();

        return view('admin.listproduct', ['products'=>$products]);
    }

    public function addcategory()
    {
        return view('admin.addcategory');
    }

    public function listcategory()
    {
        // $handphone = DB::table('products')->where('category','Handphone')->get();
        // $laptop = DB::table('products')->where('category','Laptop')->get();
        // $tv = DB::table('products')->where('category','TV')->get();

        $categories = DB::table('categories')->get();
        $products = DB::table('products')->get();
        
        return view('admin.listcategory', ['products'=>$products, 'categories'=>$categories]);
    }
}
