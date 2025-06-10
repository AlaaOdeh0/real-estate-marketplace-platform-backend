<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'buyer_id',
        'customer_id',
        'type',
        'amount',
        'transaction_date',
        'status',
        'payment_method',
//        'property-id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
//    public function property(){
//        return $this->belongsTo(property::class);
//

    public function buyer()
    {
        return $this->belongsTo(User::class);
    }

    public function customer()
    {
        return $this->belongsTo(User::class);
    }
}
