<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{

    public function transactionheader(){
        
        return $this->belongsTo(TransactionHeader::class);
    }

    protected $table = 'transactiondetails';
}
