<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    Protected $fillable=[
        'customer_id','product_slug','quantity','unit_price','added_to_cart_at','status','subtotal',
        'discounts',
        'taxes','shipping_cost','grand_total'

    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_slug', 'slug');
    }



    public function customer()
    {
        return $this->belongsTo(User::class,'customer_id');
    }
}
