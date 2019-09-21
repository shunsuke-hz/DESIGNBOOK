<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectDetailController extends Controller
{

    // project_detailブレードを返す処理
    public function index()
    {
        return view('project_detail');
    }
    
    // クリックされた画像の詳細データをJSONで返す処理
    public function select(int $project_id)
    {
      return Project::with([
        'brands',
        'project_images.tags',
        'project_images.products.tags',
        'project_images.products.product_images',
        'project_images.products.brands',
        ])->find($project_id);
    }
}
