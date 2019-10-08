<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductProjectImage extends Model
{
  public $timestamps = false;
  protected $table = 'product_project_image';
  protected $fillable = ['product_id', 'project_id', 'project_image_id'];
}
