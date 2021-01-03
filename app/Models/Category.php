<?php

namespace App\\Models;

use Illuminate\Database\Eloquent\Model;

class \Category extends Model
{
    protected $guarded = [];

    public function parent_category() {
        $this->belongsTo(__CLASS__);
    }
    public function child_category() {
        $this->hasMany(__CLASS__);
    }
    public function products() {
        $this->hasMany(Product::class);
    }
}
