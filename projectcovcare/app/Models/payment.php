<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'users_name',
        'orderId',
        // 'products_id',
        'amountPayment',
        'paymentDate',
        'bankname',
        'evidenceTransfer',
    ];
    public function user(){
        return $this -> belongsTo(user::class,'users_name','name');
    }
    // public function product(){
    //     return $this -> belongsTo(product::class);
    // }
}
