<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandsListController extends Controller
{
  // brand_listブレードへ返す処理
  public function index()
  {
    return view('brand_list');
  }
}
