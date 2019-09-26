<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class MypageController extends Controller
{
  // mypageブレードへ返す処理
  public function index()
  {
    return view('mypage');  
  }
}
