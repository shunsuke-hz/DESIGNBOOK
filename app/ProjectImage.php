<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectImage extends Model
{
  //
  protected $fillable = ['title', 'body', 'project_id', 'image'];
  protected $hidden = array('pivot');

  public function tags()
  {
    return $this->belongsToMany('App\Tag');
  }

  public function projects()
  {
    return $this->belongsTo('App\Project', 'project_id');
  }

  public function products()
  {
    return $this->belongsToMany('App\Product');
  }
}
