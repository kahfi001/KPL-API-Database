<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    // protected $fillable = [
    //     'name',
    //     'price',
    //     'description'
    // ];

    public function store()
    {
        return $this->belongsTo(Store::class, 'store_id');
    }

    public function product_review()
    {
        return $this->hasMany(Product_review::class);
    }
}
