<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

  protected $fillable = ['title', 'explain', 'brand_id', 'top_image', 'postal_code', 'prefecture', 'address', 'address_url', 'is_accepted', 'thumbnail_id'];
  //
  public function brands()
  {
    return $this->belongsTo('App\Brand', 'brand_id', 'id');
  }

  public function project_images()
  {
    return $this->hasMany('App\ProjectImage', 'project_id', 'id');
  }
}
