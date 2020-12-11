<?php

namespace App\Http\Controllers;
use App\Product;
use App\User;
use App\TransactionDetail;
Use App\TransactionHeader;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class CartController extends Controller
{
    public function addItem(Request $request){
        $this->validate($request, [
            'id' => 'required|exists:products,id',
            'qty' => 'required|integer'
        ]); // Validasi product terdapat di database serta quantity yang dimasukan merupakan integer

        
        $carts = $this->getCart(); // mengambil data dari cookie
    
        if ($carts && array_key_exists($request->id, $carts)) {
            $carts[$request->id]['qty'] += $request->qty; // mengecek item berada di cart atau belum, jika sudah ada qty di update
        } else {
            $product = Product::find($request->id); //mencari product di dalam database
            $carts[$request->id] = [
                'qty' => $request->qty,
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'image' => $product->image
            ]; // Memasukkan item menjadi array
        }

        $cookie = cookie('carts', json_encode($carts), 120); // Carts dibuat dalam cookie selama 120 menit

        return redirect()->back()->cookie($cookie); // Lalu disimpan ke dalam browser
    }

    public function showCart(){
        $carts = $this->getCart(); // mengambil data dari cookie
        $counts = collect($carts);
        $count = $counts->count();

        $subtotal = collect($carts)->sum(function($q) {
            return $q['qty'] * $q['price']; // total price dari setiap item
        }); 

        return view('user.cart', compact('carts','count'));
    }

    private function getCart(){

        $carts = json_decode(request()->cookie('carts'), true);
        $carts = $carts != '' ? $carts:[];
        return $carts;
    }

    public function update(Request $request){

        $carts = $this->getCart();
        
        foreach ($request->id as $key => $row) {
            if ($request->qty[$key] == 0) {
                unset($carts[$row]);
            } else {
                $carts[$row]['qty'] = $request->qty[$key];
            }
        }
        
        $cookie = cookie('carts', json_encode($carts), 120);
        
        return redirect()->back()->cookie($cookie);
    }

    public function delete($id){
        $carts = $this->getCart();
        
        unset($carts[$id]);
        
        if($carts != NULL){
            $cookie = cookie('carts', json_encode($carts), 120);
            return redirect()->back()->cookie($cookie);
        } else {
            return redirect()->back()->withCookie(cookie('carts', '', -1));
        }
       
    }

    public function checkout(Request $request){

        DB::beginTransaction();

            $email = $request->cookie('email');
            $user = User::where('email', $email)->first();

            $carts = $this->getCart();

            $create_at_date = date('Y-m-d H:i:s');
            // dd($create_at_date);
            
            $transactionHeader = TransactionHeader::create([
                'email' => $email,
                'created_at' => $create_at_date,
            ]);

            //LOOPING DATA DI CARTS
            foreach ($carts as $row) {
                TransactionDetail::create([
                    'transaction_id' => $transactionHeader->id,
                    'product_id' => $row['id'],
                    'total' => $row['price'],
                    'quantity' => $row['qty'],
                ]);
            }
            
            DB::commit();
            
            return redirect('user/home')->withCookie(cookie('carts', '', -1));
    }
}
