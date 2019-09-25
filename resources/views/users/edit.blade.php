<!-- @extends('layouts.app') -->

@section('content')
<div class="container w-50 mt-5">
    <!-- <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">プロフィール編集</div>

                <div class="panel-body">
                <form method="post" action="{{route('users.update', $user)}}">
                    {{ csrf_field() }}
                    {{ method_field('patch') }}

                    <input type="text" name="name"  value="{{ $user->name }}" />

                    <input type="email" name="email"  value="{{ $user->email }}" />

                    <input type="text" name="belonging_to"  value="{{ $user->belonging_to }}" />


                    <input type="password" name="password" />

                    <input type="password" name="password_confirmation" />

                    <button type="submit">Send</button>
                </form>
                </div>
            </div>
        </div>
    </div> -->
    <div class="form-row">
      <form method="post" action="{{route('users.update', $user)}}">
      <label>
        <span class="btn btn-primary">
            プロフィール写真を選択
            <input type="file" accept="image/*" capture="camera" id="image_file" value="" name="upfile" style="display:none">
        </span>
      </label>
        <div class="form-group col-md-12">
          <label>氏名</label>
          <input type="text" name="name" class="form-control" value="{{ $user->name }}">
        </div>

        <div class="form-group col-md-12">
          <label>TEL</label>
          <input type="text" name="phone_number" class="form-control" value="{{ $user->phone_number }}">
        </div>
        <div class="form-group col-md-12">
          <label>性別</label>
          <input type="text" name="sex" class="form-control" value="{{ $user->sex }}">
        </div>
        <div class="form-group col-md-12">
          <label>誕生日</label>
          <input type="text" name="birthday" class="form-control" value="{{ $user->birthday }}">
        </div>
        <div class="form-group col-md-12">
          <label>所属ブランド</label>
          <input type="text" name="brand" class="form-control" value="{{ $user->brands_id }}">
        </div>
        </div>
        

        <button type="submit" class="btn btn-primary">登録する</button>      
      </form>

</div>
@endsection