<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image; // Add this line to import the Image class

class Car extends Model
{
    protected $fillable = ['brand', 'model', 'year', 'color', 'price', 'category_id', 'image'];

    use HasFactory;
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

