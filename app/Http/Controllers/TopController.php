<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Tag;

class TopController extends Controller
{

  // Topブレードを返す処理
  public function index()
  {
    return view('top');
  }

  // プロジェクトデータ全件をJSONで返す処理
  public function show()
  {
    return Project::with(['project_images.tags'])->get();
  }
  // タグデータ全件をJSONで返す処理
  public function tags()
  {
    return Tag::all();
  }
}
