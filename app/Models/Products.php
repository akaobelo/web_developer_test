<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'product_details_id',
        'category_id'
    ];

    public function productDetails()
    {
        return $this->hasOne(ProductsDetails::class,'id','product_detail_id');
    }

    public function category()
    {
        return $this->hasMany(Category::class,'id','category_id');
    }
}
