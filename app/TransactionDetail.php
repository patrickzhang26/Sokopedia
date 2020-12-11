<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'transaction_id','total','product_id','quantity'
    ];
    public function transactionheader(){
        
        return $this->belongsTo(TransactionHeader::class);
    }

    public function product(){
        
        return $this->belongsTo(Product::class);
    }

    protected $table = 'transactiondetails';
}
