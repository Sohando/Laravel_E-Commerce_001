<?php

namespace App\\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class \Product extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [];

    public function category() {
        $this->hasOne(Category::class);
    }
    protected static function boot() {
        Parent::boot();
        static::creating(function ($product) {
            $product->slug = str_slug($product->title);
        });
    }
}
