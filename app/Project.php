<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    public function brands()
    {
        return $this->belongsTo('App\Brand','brand_id','id');
    }

    public function project_images()
    {
        return $this->hasMany('App\ProjectImage','project_id','id');
    }
}
