<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'category', 'description', 'price', 'image'];

    public function product(){
        
        return $this->belongsTo(Product::class);
    }

    public function transactiondetail(){

        return $this->hasMany(TransactionDetail::class, 'product_id');
    }

    protected $table = 'products';
}
