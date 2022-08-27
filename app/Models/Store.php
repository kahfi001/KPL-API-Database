<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];



    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function product()
    {
        return $this->hasOne(Product::class);
    }
}
