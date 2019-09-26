<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandsListController extends Controller
{
  // brand_listブレードへ返す処理
  public function index()
  {
    $brands = Brand::all();
    return view('brand_list', ['brands' => $brands]);  
  }
}
