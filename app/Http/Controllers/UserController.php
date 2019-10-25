<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Image;
use Validator;
use Illuminate\Validation\Rule;
use Storage;



class UserController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }

  public function edit()
  {
    $user = Auth::user();
    return view('users.edit', compact('user'));
  }

  public function update(Request $request)
  {
    $data = $request->all();
    if ($data['birth_year'] && $data['birth_month'] && $data['birth_day']) {
      $data['birth'] = $data['birth_year'] . '-' . $data['birth_month'] . '-' . $data['birth_day'];
    }
    $request->replace($data);

    $account_name = Auth::user()->account_name;
    $this->validate($request, [
      // account_nameは自分以外で重複をチェック
      'account_name' => ['required', 'string', Rule::unique('users')->ignore($account_name, 'account_name')],
      'name' => 'nullable|string',
      'phone_number' => 'nullable|regex:/^[0-9]{2,4}-?[0-9]{3,4}-?[0-9]{3,4}$/',
      'sex' => 'required',
      'belonging_to' => 'nullable|string|max:255',
      'birth' => 'required|date',
      'birth_year' => 'required|numeric',
      'birth_month' => 'required|numeric',
      'birth_day' => 'required|numeric',

    ]);
    $user = Auth::user();
    $user->account_name = $request->input('account_name');
    $user->name = $request->input('name');
    $user->phone_number = $request->input('phone_number');
    $user->belonging_to = $request->input('belonging_to');
    $user->birthday = $request->birth;

    $user->save();

    return view('users.uploaded');
  }

  public function photo(Request $request)
  {

    $validator = Validator::make($request->all(), [
      'image' => 'base64image'
    ], ['image.base64image' => '画像ファイルを選択して下さい']);

    if ($validator->fails()) {
      // return $validator->errors();
      return response()->json(['errors' => $validator->errors()->all()]);
      // return back()->withErrors($validator->errors());
      // return redirect('/mypage')->withErrors($validator->errors())->withInput();
    }

    $user = Auth::user();
    //$dataの中身⇒data:image/png;base64,iVB・・・・
    $data = $request->image;
    \Debugbar::info($data);

    //explode関数で;区切りで配列を作成、作成された配列をlist関数で変数($type,$data)に代入
    list($type, $data) = explode(';', $data);
    //$type="data:image/png" $data="base64,iVB・・・・"
    list(, $data)      = explode(',', $data);


    $data = base64_decode($data);
    $image_name = $user->id . '_avatar' . '.png';
    // $path = storage_path('app/public/upload/') . $user->id . '/' . $image_name;

    Storage::disk('public')->put('/upload/' . $user->id . '/' . $image_name, $data);
    // file_put_contents($path, $data);

    $user->profile_image = $image_name;
    $user->save();

    return response()->json(['success' => 'done']);
  }

  public function secedeBrand(Request $request)
  {
    $user = User::find($request->user);
    $user->brand_id = null;
    $user->save();
    return redirect()->route('mypage')->with('my_status', __('ブランドを脱会しました'));
  }
}
