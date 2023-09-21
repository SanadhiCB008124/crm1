<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Ramsey\Uuid\Type\Integer;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'detail','unit_price','image','category_id','stocks','slug','color_id','size_id'
    ];

    protected static function booted()
    {
        parent::booted();

        static::creating(function ($product) {
            $product->slug = Str::slug($product->name);
        });

        static::updating(function ($product) {
            $product->slug = Str::slug($product->name);
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
    public function color()
    {
        return $this->belongsTo(Color::class, 'color_id');
    }
    public function  size(){
        return $this->belongsTo(Size::class,'size_id');
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class, 'product_slug', 'slug');
    }



}
