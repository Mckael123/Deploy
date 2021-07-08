<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shipment extends Model
{
    use HasFactory;
    protected $fillable = [
        'courierName',
        'price',
        'dateReceiver',
        'shipingDate',
        'shipingReceiver',
        'status',
    ];
    public function payment()
    {
        return $this->belongsTo(payment::class);
    }
}
