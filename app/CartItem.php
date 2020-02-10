<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    public $fillable = [
        'count',
        'product_id',
    ];
    public function product()
    {
        return $this->hasOne(Product::class,'id','product_id');
    }
}
