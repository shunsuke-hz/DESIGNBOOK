<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\ProjectImage;
use App\ProjectImageTag;

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
    $tags = $request->tags;
    $images = $request->images;

    $post = Project::create([
      'title' => $title,
      'explain' => $body,
      'brand_id' => $user->brand_id,
    ]);
    // store each image
    // \Debugbar::info($tags);
    $i = 0;
    foreach ($images as $image) {
      $imagePath = Storage::disk('public')->put($user->email . '/posts/' . $post->id, $image);
      $post2 = ProjectImage::create([
        'title' => $title,
        'image' => $imagePath,
        'project_id' => $post->id
      ]);
      foreach (explode(',', $tags[$i]) as $tag) {
        ProjectImageTag::create([
          'tag_id' => $tag,
          'project_id' => $post->id,
          'project_image_id' => $post2->id
        ]);
      }
      $i++;
    }
    return response()->json(['error' => false, 'data' => $post]);
  }
}
