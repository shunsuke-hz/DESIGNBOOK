@extends('layouts.template')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <!-- <div class="card-header">ログイン</div> -->
        <div class="card-body">
          <form method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}

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



            <div class="form-group">

              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox">
                  <span class="form-check-sign"></span>
                  ログイン状態を保持
                </label>
              </div>

            </div>

            <div class="form-group">

              <button type="submit" class="btn btn-primary">ログイン</button>

              <a class="btn btn-link" href="{{ route('password.request') }}">
                パスワードをお忘れですか?
              </a>

            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection