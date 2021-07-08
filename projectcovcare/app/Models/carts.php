<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carts extends Model
{
    use HasFactory;
    protected $fillable = [
        'sumprice',
        'subprice',
        'buyer',
        'idProduct',
        'quantity',
        'orderId',
    ];
    public function user(){
        return $this -> belongsTo(user::class,'buyer','name');
    }
    public function product(){
        return $this -> belongsTo(product::class,'idProduct','id');
    }
    public function order(){
        return $this -> belongsTo(order::class,'orderId','id');
    }

}
