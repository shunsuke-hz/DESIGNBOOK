@extends('layouts.template')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <!-- <div class="card-header">新規登録</div> -->
        <div class="card-body">
          <form class="form-horizontal" method="POST" action="{{ route('register.pre_check') }}">
            {{ csrf_field() }}

            <!-- <div class="row form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 col-form-label">氏名</label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div> -->

            <label for="email" class="col-form-label">メールアドレス</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="now-ui-icons users_circle-08"></i></span>
              </div>
              <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Enter email" required>

              @if ($errors->has('email'))
              <span class="invalid-feedback">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
              @endif
            </div>

            <label for="password" class="col-form-label">パスワード</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="now-ui-icons ui-1_lock-circle-open"></i></span>
              </div>
              <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>

              @if ($errors->has('password'))
              <span class="invalid-feedback">
                <strong>{{ $errors->first('password') }}</strong>
              </span>
              @endif
            </div>

            <label for="password-confirm" class="col-form-label">パスワード再入力</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="now-ui-icons ui-1_lock-circle-open"></i></span>
              </div>
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Password" required>
            </div>

            <div class="row form-group">
              <div class="col-md-8 ml-auto">
                <button type="submit" class="btn btn-primary">
                  新規登録
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