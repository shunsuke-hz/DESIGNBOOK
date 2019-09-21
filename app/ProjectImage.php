<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectImage extends Model
{
    //
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
}
