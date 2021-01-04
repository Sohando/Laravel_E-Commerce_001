<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Str;
class Product extends Model implements HasMedia

{
    use HasMediaTrait;

    protected $guarded = [];

    public function category() {
        return $this->hasOne(Category::class);
    }
    protected static function boot() {
        Parent::boot();
        static::creating(function ($product) {
            $product->slug = Str::slug($product->title);
        });
    }
}
