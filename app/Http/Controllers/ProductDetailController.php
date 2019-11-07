<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductDetailController extends Controller
{
  // product_detailブレードを返す処理
  public function index()
  {
    return view('product_detail');
  }

  // クリックされた画像の詳細データをJSONで返す処理
  public function select(int $product_id)
  {
    return Product::with([
      'brands',
      'product_images',
      'tags',
      'project_images.projects',
    ])->find($product_id);
  }
}
