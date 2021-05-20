<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }

    public function pictures()
    {
        return $this->hasMany(ProductPicture::class);
    }
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
