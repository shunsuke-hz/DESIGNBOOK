<?php

namespace App\Http\Controllers\Auth;

// use App\User;
// use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\Validator;
// use Illuminate\Foundation\Auth\RegistersUsers;

use App\Mail\EmailVerification;
use App\User;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            // 'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'email_verify_token' => base64_encode($data['email']),
        ]);

        $email = new EmailVerification($user);
        Mail::to($user->email)->send($email);

        return $user;
    }

    public function pre_check(Request $request)
    {
      $this->validator($request->all())->validate();
      //flash data
      $request->flashOnly('email');

      $bridge_request = $request->all();
      // password マスキング
      $bridge_request['password_mask'] = '******';

      return view('auth.register_check')->with($bridge_request);
    }

    public function register(Request $request)
    {
        event(new Registered($user = $this->create( $request->all() )));
        return view('auth.registered');
    }

    public function showForm($email_token)
    {
      
        // パラメータのトークンがユーザーテーブルに存在するか
        if ( !User::where('email_verify_token',$email_token)->exists() )
        {
            return view('auth.main.register')->with('message', '無効なトークンです。');
        } else {
            // パラメータのトークンと一致するユーザーの取得
            $user = User::where('email_verify_token', $email_token)->first();
            // ユーザーの作成日時の取得
            $dt_now = new Carbon();
            $dt_create = new Carbon($user->created_at);
            $dt_limit = $dt_create->addHour();
            // 本登録済みユーザーか
            if ($user->status == config('const.USER_STATUS.REGISTER')) //REGISTER=1
            {
                logger("status". $user->status );
                return view('auth.main.register')->with('message', 'すでに本登録されています。ログインして利用してください。');
            }
            // トークン発行から1時間以上経過してるか
            if ($dt_now->gt($dt_limit) ){
              return view('auth.main.register')->with('message', 'メール認証の発行から一時間以上経過しています。新規アカウントを作成して下さい');
            }
            // ユーザーステータス更新
            $user->status = config('const.USER_STATUS.MAIL_AUTHED');
          if($user->save()) {
            return view('auth.main.register', compact('email_token'));
          } else{
            return view('auth.main.register')->with('message', 'メール認証に失敗しました。再度、メールからリンクをクリックしてください。');
          }
        }
    }

    public function mainCheck(Request $request)
    {


      $data = $request->all();
      if ($data['birth_year'] && $data['birth_month'] && $data['birth_day']) {
        $data['birth'] = $data['birth_year'] . '-' . $data['birth_month'] . '-' . $data['birth_day'];
       }
      $request->replace($data);

      $request->validate([
        'account_name' => 'required|string|unique:users',
        'name' => 'nullable|string',
        'phone_number' => 'regex:/^[0-9]{2,4}-?[0-9]{3,4}-?[0-9]{3,4}$/',
        'sex' => 'required',
        'birth' => 'required|date',        
        'birth_year' => 'required|numeric',
        'birth_month' => 'required|numeric',
        'birth_day' => 'required|numeric',
      ]);
      //データ保持用
      $email_token = $request->email_token;

      $user = new User();
      $user->account_name = $request->account_name;
      $user->name = $request->name;
      $user->phone_number = $request->phone_number;
      $user->sex = $request->sex;
      $user->birth = $request->birth;
      $user->birth_year = $request->birth_year;
      $user->birth_month = $request->birth_month;
      $user->birth_day = $request->birth_day;

      return view('auth.main.register_check', compact('user','email_token'));
    }

    public function mainRegister(Request $request)
    {
      $user = User::where('email_verify_token',$request->email_token)->first();
      $user->status = config('const.USER_STATUS.REGISTER');
      $user->name = $request->name;
      $user->account_name = $request->account_name;
      $user->name = $request->name;
      $user->phone_number = $request->phone_number;
      $user->sex = $request->sex;
      $user->birthday = $request->birth;
      $user->save();
      // ログイン状態にする
      $this->guard()->login($user);
      return view('auth.main.registered');
    }

}
