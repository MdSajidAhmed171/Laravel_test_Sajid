<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductVariantPrice extends Model
{
    public function ProductVariantPrice(){
        return $this->belongsTo(product::class,'product_id');
    }
}
