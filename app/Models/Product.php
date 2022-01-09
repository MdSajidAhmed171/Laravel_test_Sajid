<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ProductVariant;
use App\Models\ProductVariantPrice;
use App\Models\Variant;
use App\Models\ProductImage;

class Product extends Model
{
    protected $fillable = [
        'title', 'sku', 'description'
    ];
    public function variant(){
        return $this->hasMany(variant::class,'product_id');
    }
    public function ProductVariantPrice(){
        return $this->hasMany(ProductVariantPrice::class,'product_id');
    }
    public function ProductVariant(){
        return $this->hasMany(ProductVariant::class,'product_id');
    }
    public function product_images(){
        return $this->hasMany(product_image::class,'product_id');
    }
}
