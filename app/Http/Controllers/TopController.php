<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class TopController extends Controller
{
    
    // Topブレードを返す処理
    public function index()
    {
      return view('top');
    }

    // 投稿データ全件をJSONで返す処理
    public function show()
    {
      return Project::with(['project_images.tags'])->get();
    }
}
