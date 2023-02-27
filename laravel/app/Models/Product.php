<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function brand()
    {
        return $this->belongsTo('App\Models\Brand');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function images()
    {
        return $this->hasMany('App\Models\Image');
    }

    public function product_colors()
    {
        return $this->hasMany('App\Models\ProductColor');
    }

    public function carts()
    {
        return $this->hasMany('App\Models\Cart');
    }

    public function feedbacks()
    {
        return $this->hasMany('App\Models\Feedback');
    }

    public function orders()
    {
        return $this->hasMany('App\Models\Order');
    }

    public function favorites()
    {
        return $this->hasMany('App\Models\Favorite');
    }

}
