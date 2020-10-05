<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    protected $guarded = [];
    use SoftDeletes;

    // Eloquent model
    public function images() {
        return $this->hasMany(ProductImage::class, 'product_id');
    }
    public function tags(){
        return $this->belongsToMany(Tag::class, 'product_tags', 'product_id', 'tag_id')->withTimestamps();
    }
    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function ProductImage(){
        return $this->hasMany(ProductImage::class, 'product_id');
    }
}
