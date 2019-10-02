<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Image;

class UserController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }

  public function edit(User $user)
  {
    $user = Auth::user();
    return view('users.edit', compact('user'));
  }

  public function update(User $user, Request $request)
  {
    $this->validate($request, [
      'name' => 'required',
      'email' => 'required|email|unique:users',
      'password' => 'required|min:6|confirmed'
    ]);

    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->password = bcrypt($request->input('password'));
    $user->belonging_to = $request->input('belonging_to');
    $user->save();

    return back();
  }

  public function photo(Request $request)
  {
    $str =  str_random(7);
    $path = storage_path('app/public/img/');
    // $crop =  value(function () use ($request, $str) {

    // Laravelの場合は public_path()ヘルパー関数、Facadeが使えます
    $image = Image::make($request->get('img_file'));
    // $image = $request->all();
    // return $image;
    $image->crop(
      $request->get('image')['width'],
      $request->get('image')['height'],
      $request->get('image')['x'],
      $request->get('image')['y'],
    )
      ->resize(256, 256) // 256 * 256にリサイズ
      // 画像の保存
      ->save($path . $str . '.jpg')
      ->resize(128, 128) //サムネイル用にリサイズ
      ->save($path . $str . '_t' . '.jpg');


    // 必要があれば元のファイルも消す
    /* Lumenの場合は bootstrap/app.phpに以下のコードを追加
                      * class_alias('Illuminate\Support\Facades\File', 'File');
                      */
    // \File::delete('Your image File);

    // return $image ?: false;
    // });

    // return $crop ? ['response' =>  true, 'img' => $str . '.jpg']
    //   : ['response' => false];
  }
}
