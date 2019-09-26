@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">本会員登録確認</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register.main.registered') }}">
                    {{ csrf_field() }}

                    <input type="hidden" name="email_token" value="{{$email_token}}">

                        <div class="form-group row">
                            <label for="account_name" class="col-md-4 col-form-label text-md-right">アカウント名</label>
                            <div class="col-md-6">
                                <span class="">{{$user->name}}</span>
                                <input type="hidden" name="account_name" value="{{$user->account_name}}">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">氏名</label>
                            <div class="col-md-6">
                                <span class="">{{$user->name}}</span>
                                <input type="hidden" name="name" value="{{$user->name}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone_number" class="col-md-4 col-form-label text-md-right">電話番号</label>
                            <div class="col-md-6">
                                <span class="">{{$user->phone_number}}</span>
                                <input type="hidden" name="phone_number" value="{{$user->phone_number}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sex" class="col-md-4 col-form-label text-md-right">性別</label>
                            <div class="col-md-6">
                                <span class="">{{$user->sex ==1 ? "男性" : "女性"}}</span>
                                <input type="hidden" name="sex" value="{{$user->sex}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="birth" class="col-md-4 col-form-label text-md-right">生年月日</label>
                            <div class="col-md-6">
                                <span class="">{{$user->birth_year}}年</span>
                                <input type="hidden" name="birth_year" value="{{$user->birth_year}}">
                                <span class="">{{$user->birth_month}}月</span>
                                <input type="hidden" name="birth_month" value="{{$user->birth_month}}">
                                <span class="">{{$user->birth_day}}日</span>
                                <input type="hidden" name="birth_day" value="{{$user->birth_day}}">
                                <input type="hidden" name="birth" value="{{$user->birth}}">
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    本登録
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection