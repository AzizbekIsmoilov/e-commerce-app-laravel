<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        "category_id",
        "name",
        "price",
        "description",
    ];

    public function category(){
        $this->belongsTo(Category::class);
    }

    public function stock(){
        $this->hasMany(Stock::class);
    }
}