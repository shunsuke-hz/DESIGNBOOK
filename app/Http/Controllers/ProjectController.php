<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\ProjectImage;
use App\ProjectImageTag;
use App\Product;
use App\ProductProjectImage;

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
    \Debugbar::info($images);

    $product_data = $request->productData;
    // $productData = mb_convert_encoding($productData, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
    $json_product_data = json_decode($product_data, true);
    // \Debugbar::info($json_product_data[0][0]['title']);

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
      foreach ($json_product_data[$i] as $product) {
        // foreach ($a as $product) {
        // \Debugbar::info($product['title']);
        // \Debugbar::info($product['model_number']);


        $post3 = Product::create([
          'title' => $product['title'],
          'brand_id' => '1',
          'model_number' => $product['model_number']
        ]);
        ProductProjectImage::create([
          'product_id' => $post3->id,
          'project_id' => $post->id,
          'project_image_id' => $post2->id,

        ]);
      }
      $i++;
    }
    return response()->json(['error' => false, 'data' => $post]);
  }
}
