<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{

    protected $hidden = array('pivot');
    
    public function product_images()
    {
        return $this->hasMany('App\ProductImage');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

    public function brands()
    {
        return $this->belongsTo('App\Brand','brand_id','id');
    }
}
