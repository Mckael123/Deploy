<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $fillable = [
        'buyer',
        'cost',
        // 'statusOrder',
    ];
    public function user(){
        return $this -> belongsTo(user::class,'buyer','name');
    }
    // public function payment(){
    //     return $this -> belongsTo(payment::class,'statusorder','status');
    // }
    public function cart(){
        return $this -> hasMany(cart::class,'id','orderId');
    }
}
