@extends('layouts.template')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">ブランド作成完了</div>

        <div class="card-body">
          <p>ブランドを作成しました</p>
          <a href="{{url('/')}}" class="sg-btn">トップページへ戻る</a>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection