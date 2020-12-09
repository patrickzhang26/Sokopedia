<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionHeader extends Model
{
    public function user(){
        
        return $this->belongsTo(User::class);
    }

    public function transactiondetail(){

        return $this->hasMany(TransactionDetail::class, 'transaction_id');
    }

    protected $table = 'transactionheaders';
}
