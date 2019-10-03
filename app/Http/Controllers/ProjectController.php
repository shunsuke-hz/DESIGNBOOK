<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\ProjectImage;
use Auth;
use Storage;

class ProjectController extends Controller
{
  //
  public function create(Request $request)
  {

    $user = Auth::user();
    $title = $request->title;
    $body = $request->body;
    $images = $request->images;

    $post = Project::create([
      'title' => $title,
      'explain' => $body,
      'brand_id' => $user->brand_id,
    ]);
    // store each image

    foreach ($images as $image) {
      $imagePath = Storage::disk('public')->put($user->email . '/posts/' . $post->id, $image);
      ProjectImage::create([
        'title' => $title,
        'image' => $imagePath,
        'project_id' => $post->id
      ]);
    }
    return response()->json(['error' => false, 'data' => $post]);
  }
}
