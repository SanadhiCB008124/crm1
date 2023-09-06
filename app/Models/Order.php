<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Order extends Model
{
    use HasFactory;

    protected $fillable=[
        'customer_id',
        'order_number',
        'total_amount',
        'status',
        'payment_id',
        'payment_status',
         'first_name',
        'last_name',
        'shipping_address',
        'contact',
        'notes',
        'billing_address',
        'date_of_order'
    ];
    public function orderItems(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }
    public  function  payment(){
        return $this->belongsTo(Payment::class);
    }




}


