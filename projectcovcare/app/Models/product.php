<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable = [
        'email',
        'namaProduct',
        'hargaProduct',
        'expired',
        'description',
        'stock',
        'image',
    ];
    public function user()
    {
        return $this -> belongsTo(user::class);
    }
    public function cart(){
        return $this->hasMany(payment::class,'id', 'idProduct');
    }
}
