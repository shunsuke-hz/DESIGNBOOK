<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectImageTag extends Model
{
  protected $table = 'project_image_tag';
  protected $fillable = ['tag_id', 'project_id', 'project_image_id'];
}
