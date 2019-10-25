<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class MypageController extends Controller
{
  // mypageブレードへ返す処理
  public function index()
  {
    $user = Auth::user();
    $brand = Brand::find($user->brand_id);

    return view('mypage', compact('brand'));
  }
}
