<?php

namespace App\Models;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    protected static function boot() {
        Parent::boot();
        static::creating(function ($category) {
            $category->slug = Str::slug($category->name);
        });
    }
    public function parent_category() {
        return $this->belongsTo(__CLASS__);
    }
    public function child_category() {
        return $this->hasMany(__CLASS__);
    }
    public function products() {
        return $this->hasMany(Product::class);
    }
}
