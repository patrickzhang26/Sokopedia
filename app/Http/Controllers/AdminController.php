<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

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

    public function addproduct1()
    {
        $categories = DB::table('categories')->get();

        return view('admin.addproduct', ['categories'=>$categories]);
    }

    public function addproduct2(Request $data)
    {
        $rules = [
            'name' => 'required|unique:categories',
            'categories' => 'exists:App\Models\Category,id',
            'description' => 'required',
            'price' => 'required|numeric|min:100',
            'image' => 'required|image|mimes:jpg,jpeg,png,PNG|max:10000'
        ];

        $this->validate($data, $rules);

        // $validator = Validator::make($data->all(),$rules);

        // if($validator->fails()){
        //     return redirect()->back()->withErrors($validator)->withInput($data->all());
        // }

        $image = $data->file('image');
        $image_name = time().'_'.$image->getClientOriginalName();
        $upload_target = 'storage\images';
        $image->move($upload_target, $image_name);

        Product::create([
            'name' => $data['name'],
            'category' => $data['category'],
            'description' => $data['description'],
            'price' => $data['price'],
            'image' => $image_name
        ]);
        return redirect()->back();
    }

    public function listproduct()
    {
        $products = DB::table('products')->get();

        return view('admin.listproduct', ['products'=>$products]);
    }

    public function deleteproduct($id){
		// hapus file
		$products = Product::where('id',$id)->first();
		File::delete('storage/images/'.$products->image);
 
		// hapus data
		Product::where('id',$id)->delete();
 
		return redirect()->back();
	}

    public function addcategory1()
    {

        return view('admin.addcategory');
    }

    public function addcategory2(Request $data)
    {
        Validator::extend('without_spaces', function($attr, $value){
            return preg_match('/^\S*$/u', $value);
        });

        $rules = [
            'name' => 'required|unique:categories|without_spaces'
        ];

        $message = [
            'name.without_spaces' => 'No whitespaces allowed.'
        ];

        // aturan regex buat ilangin Whitespaces

        $this->validate($data, $rules, $message);

        // $validator = Validator::make($data->all(),$rules);

        // if($validator->fails()){
        //     return redirect()->back()->withErrors($validator)->withInput($data->all());
        // }

        Category::create([
            'name' => $data['name']
        ]);

        return redirect()->back();
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
