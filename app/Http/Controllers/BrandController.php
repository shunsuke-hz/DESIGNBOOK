<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BrandRequest;
use Illuminate\Support\Facades\Auth;
use Storage;
use App\User;
use App\Brand;



class BrandController extends Controller
{
  //
  public function index()
  {

    return view('brand_post');
  }

  public function confirm(BrandRequest $request)
  {

    $brand = $request->all();
    return view('brand_post_check', compact('brand'));
  }

  public function create(BrandRequest $request)
  {

    $user = Auth::user();
    if ($user->brand_id == null) {
      $brand = Brand::create([
        'name' => $request->brand_name,
        'url' => $request->url,
        'postal_code' => $request->zip01,
        'prefecture' => $request->pref01,
        'address' => $request->pref01 . $request->addr01 . $request->address_line1 . $request->address_line2,
        'profile' => $request->belonging_to,
        'mail_address' => $request->email,
        'phone_number' => $request->phone_number,
      ]);

      //画像の保存処理
      $image = $request->bs64;
      //explode関数で;区切りで配列を作成、作成された配列をlist関数で変数($type,$data)に代入
      list($type, $image) = explode(';', $image);
      //$type="data:image/png" $data="base64,iVB・・・・"
      list(, $image)      = explode(',', $image);

      $image = base64_decode($image);
      $image_name = $brand->id . '_avatar' . '.png';
      Storage::disk('public')->put('/brand_icon/' . $brand->id . '/' . $image_name, $image);

      $brand_icon = Brand::find($brand->id);
      $brand_icon->logo_image = $image_name;
      $brand_icon->save();

      $user->brand_id = $brand->id;
      $user->save();

      return view('brand_created');
    } else {
      echo "既にブランドに加入しています";
    }
  }
}
