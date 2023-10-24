<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['description','price', 'stock', 'categories_id'];
    //protected $guarded = []; 
    public function categories()
    {
        return $this->belongsTo(Category::class, 'categories_id');
    }
}
