<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\User;
use App\TransactionDetail;
Use App\TransactionHeader;
class UserController extends Controller
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

    public function index() {
        $carts = $this->getCart(); 
        $counts = collect($carts);
        $count = $counts->count();

        $products = DB::table('products')->paginate(3);

        // dd($count);
        return view('user.index', compact('products','count'));
    }

    public function search(Request $request){
        $search = $request->search;
        $carts = $this->getCart(); 
        $counts = collect($carts);
        $count = $counts->count();
        $products = Product::where('name','like',"%".$search."%")->paginate(3);

        return view('user.search',compact('products','count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $selected = Product::where('id','like',$id)->get();
        $carts = $this->getCart(); 
        $counts = collect($carts);
        $count = $counts->count();

        return view('user.detailproduct',compact('selected', 'count'));
    }

    public function addCart($id)
    {
        $selected = Product::where('id','like',$id)->get();
        $carts = $this->getCart(); 
        $counts = collect($carts);
        $count = $counts->count();

        return view('user.addtocart',compact('selected', 'count'));
    }

    private function getCart(){

        $carts = json_decode(request()->cookie('carts'), true);
        $carts = $carts != '' ? $carts:[];
        return $carts;
    }

    public function showHistory(Request $request){
        $carts = $this->getCart(); 
        $counts = collect($carts);
        $count = $counts->count();
        
        $email = $request->cookie('email');
        $transaction = ;

        return view('user.history', compact('count'));
    }
}
