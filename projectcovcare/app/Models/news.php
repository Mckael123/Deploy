<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'image',
        'date',
        'content',
        'pembuat',
    ];
    public function user(){
        return $this->belongsTo(user::class,'pembuat', 'name');
    }
}
