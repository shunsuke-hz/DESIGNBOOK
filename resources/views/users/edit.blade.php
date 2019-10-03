@extends('layouts.template')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">プロフィール編集</div>

        @isset($message)
        <div class="card-body">
          {{$message}}
        </div>
        @endisset

        @empty($message)
        <div class="card-body">
          <form method="POST" action="{{ route('users.update') }}">
            {{ csrf_field() }}

            <div class="form-group row">
              <label for="account_name" class="col-md-4 col-form-label text-md-right">アカウント名</label>
              <div class="col-md-6">
                <input id="account_name" type="text" class="form-control{{ $errors->has('account_name') ? ' is-invalid' : '' }}" name="account_name" value="{{ old('account_name', $user->account_name) }}" required>

                @if ($errors->has('account_name'))
                <span class="invalid-feedback">
                  <strong>{{ $errors->first('account_name') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group row">
              <label for="name" class="col-md-4 col-form-label text-md-right">氏名</label>

              <div class="col-md-6">
                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name', $user->name) }}" required>

                @if ($errors->has('name'))
                <span class="invalid-feedback">
                  <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group row">
              <label for="phone_number" class="col-md-4 col-form-label text-md-right">電話番号</label>

              <div class="col-md-6">
                <input id="phone_number" type="tel" class="form-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}" name="phone_number" value="{{ old('phone_number', $user->phone_number) }}" pattern="\d{2,4}-?\d{3,4}-?\d{3,4}">

                @if ($errors->has('phone_number'))
                <span class="invalid-feedback">
                  <strong>{{ $errors->first('phone_number') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group row">
              <label for="sex" class="col-md-4 col-form-label text-md-right">性別</label>

              <div class="col-md-6">
                <input type="radio" name="sex" id="sex" value="1" required @if(old('sex', $user->sex)==1) checked="checked" @endif />
                <label for="sex">男性</label>
                <input type="radio" name="sex" id="sex" value="2" @if(old('sex', $user->sex)==2) checked="checked" @endif />
                <label for="sex">女性</label>

                @if ($errors->has('sex'))
                <span class="invalid-feedback">
                  <strong>{{ $errors->first('sex') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group row">
              <label for="birth" class="col-md-4 col-form-label text-md-right">生年月日</label>
              <div class="col-md-6">
                <div class="row">
                  <div class="col-md-4">
                    <select id="birth_year" class="form-control{{ $errors->has('birth_year') ? ' is-invalid' : '' }}" name="birth_year">
                      <option value="">----</option>
                      @for ($i = 1980; $i <= 2005; $i++) <option value="{{ $i }}" @if(old('birth_year' ,$user->birthday->format('Y'))==$i) selected @endif>{{ $i }}</option>
                        @endfor
                    </select>
                    <!-- @if ($errors->has('birth_year'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('birth_year') }}</strong>
                                                    </span>
                                                @endif -->
                  </div>年

                  <div class="col-md-3">
                    <select id="birth_month" class="form-control{{ $errors->has('birth_month') ? ' is-invalid' : '' }}" name="birth_month">
                      <option value="">--</option>
                      @for ($i = 1; $i <= 12; $i++) <option value="{{ $i }}" @if(old('birth_month', $user->birthday->format('m'))==$i) selected @endif>{{ $i }}</option>
                        @endfor
                    </select>
                    <!-- @if ($errors->has('birth_month'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('birth_month') }}</strong>
                                                    </span>
                                                @endif -->
                  </div>月

                  <div class="col-md-3">
                    <select id="birth_day" class="form-control{{ $errors->has('birth_day') ? ' is-invalid' : '' }}" name="birth_day">
                      <option value="">--</option>
                      @for ($i = 1; $i <= 31; $i++) <option value="{{ $i }}" @if(old('birth_day', $user->birthday->format('d'))==$i) selected @endif>{{ $i }}</option>
                        @endfor
                    </select>

                    <!-- @if ($errors->has('birth_day'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('birth_day') }}</strong>
                                                    </span>
                                                @endif -->
                  </div>日
                </div>

                <div class="row col-md-6 col-md-offset-4">
                  <input type="hidden" name="birth" class="form-control{{ $errors->has('birth') ? ' is-invalid' : '' }}">

                  @if ($errors->has('birth'))
                  <span class="invalid-feedback">
                    <strong>{{ $errors->first('birth') }}</strong>
                  </span>
                  @endif
                </div>
              </div>
            </div>

            <div class="form-group row">
              <label for="belonging_to" class="col-md-4 col-form-label text-md-right">About</label>

              <div class="col-md-6">
                <!-- <input id="belonging_to" type="tel" class="form-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}" name="belonging_to" value="{{ old('phone_number', $user->phone_number) }}" pattern="\d{2,4}-?\d{3,4}-?\d{3,4}"> -->
                <textarea class="form-control{{ $errors->has('belonging_to') ? ' is-invalid' : '' }}" name="belonging_to" id="belonging_to" cols="30" rows="10">{{ old('belonging_to', $user->belonging_to) }}</textarea>
                @if ($errors->has('belonging_to'))
                <span class="invalid-feedback">
                  <strong>{{ $errors->first('belonging_to') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group row mb-0">
              <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                  上記内容で編集
                </button>
              </div>
            </div>
          </form>
        </div>
        @endempty
      </div>
    </div>
  </div>
</div>
@endsection