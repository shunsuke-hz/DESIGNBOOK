@extends('layouts.template')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">ブランド作成</div>

        @isset($message)
        <div class="card-body">
          {{$message}}
        </div>
        @endisset

        @empty($message)
        <div class="card-body">
          <form method="POST" action="{{ route('brand.confirm') }}" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="col-12 col-sm-auto mb-3">
              <div class="mx-auto" style="width: 140px;">
                <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px;">
                  <img class="profile_image" src="storage/noimage.png" alt="" style="max-width: 100%;">
                </div>
              </div>
            </div>

            <div class="mt-2">
              <label>
                <span class="btn btn-primary">
                  <i class="fa fa-fw fa-camera"></i>
                  アイコン画像の変更
                  <input type="file" accept="image/*" capture="camera" id="upload" name="photo" class="__input js-imageFile" style="display:none">
                  <input type="hidden" name="bs64" class="bs64" value="">
                </span>
              </label>
            </div>

            <div class="modal fade js-trimmingModal" id="myModal">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">トリミング</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                    <!-- <div class="trimming-area croppie"> -->
                    <!-- <img src="" class="js-trimmingAreaImg"> -->
                    <div id="upload-demo" style="max-width: 100%;"></div>
                    <!-- /.trimming-area -->
                    <!-- </div> -->
                    <!-- /.modal-body -->
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger js-trimmingBtn" data-option="">決定</button>
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
              <!-- /.modal -->
            </div>

            <!-- <div class="form-group row">
              <label for="brand_name" class="col-md-4 col-form-label text-md-right">ブランド名</label>
              <div class="col-md-6">
                <img class="profile_image" src="storage/noimage.png" alt="" style="max-width: 100%;">

                @if ($errors->has('brand_name'))
                <span class="invalid-feedback">
                  <strong>{{ $errors->first('brand_name') }}</strong>
                </span>
                @endif
              </div>
            </div> -->

            <div class="form-group row">
              <label for="brand_name" class="col-md-4 col-form-label text-md-right">ブランド名</label>
              <div class="col-md-6">
                <input id="brand_name" type="text" class="form-control{{ $errors->has('brand_name') ? ' is-invalid' : '' }}" name="brand_name" value="{{ old('brand_name') }}" required>

                @if ($errors->has('brand_name'))
                <span class="invalid-feedback">
                  <strong>{{ $errors->first('brand_name') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group row">
              <label for="url" class="col-md-4 col-form-label text-md-right">ブランドURL</label>
              <div class="col-md-6">
                <input id="url" type="text" class="form-control{{ $errors->has('url') ? ' is-invalid' : '' }}" name="url" value="{{ old('url') }}">

                @if ($errors->has('url'))
                <span class="invalid-feedback">
                  <strong>{{ $errors->first('url') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group row">
              <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
              <div class="col-md-6">
                <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                <span class="invalid-feedback">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group row">
              <label for="postal-code" class="col-md-4 col-form-label text-md-right">郵便番号(7桁)</label>
              <div class="col-md-6">
                <input type="text" name="zip01" id="inputAddress01" maxlength="7" onKeyUp="AjaxZip3.zip2addr(this,'','pref01','addr01');" class="form-control{{ $errors->has('zip01') ? ' is-invalid' : '' }}" value="{{ old('zip01') }}">
                @if ($errors->has('zip01'))
                <span class="invalid-feedback">
                  <strong>{{ $errors->first('zip01') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group row">
              <label for="prefecture" class="col-md-4 col-form-label text-md-right">都道府県</label>
              <div class="col-md-6">
                <input type="text" name="pref01" id="inputAddress02" class="form-control{{ $errors->has('pref01') ? ' is-invalid' : '' }}" value="{{ old('pref01') }}">
                @if ($errors->has('pref01'))
                <span class="invalid-feedback">
                  <strong>{{ $errors->first('pref01') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group row">
              <label for="addr01" class="col-md-4 col-form-label text-md-right">市区町村</label>
              <div class="col-md-6">
                <input type="text" name="addr01" id="inputAddress03" class="form-control{{ $errors->has('addr01') ? ' is-invalid' : '' }}" value="{{ old('addr01') }}">
                @if ($errors->has('addr01'))
                <span class="invalid-feedback">
                  <strong>{{ $errors->first('addr01') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group row">
              <label for="address_line1" class="col-md-4 col-form-label text-md-right">番地等</label>

              <div class="col-md-6">
                <input id="address_line1" type="text" class="form-control{{ $errors->has('address_line1') ? ' is-invalid' : '' }}" name="address_line1" value="{{ old('address_line1') }}">

                @if ($errors->has('address_line1'))
                <span class="invalid-feedback">
                  <strong>{{ $errors->first('address_line1') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group row">
              <label for="address_line2" class="col-md-4 col-form-label text-md-right">建物名・号室等</label>

              <div class="col-md-6">
                <input id="address_line2" type="text" class="form-control{{ $errors->has('address_line2') ? ' is-invalid' : '' }}" name="address_line2" value="{{ old('address_line2') }}">

                @if ($errors->has('address_line2'))
                <span class="invalid-feedback">
                  <strong>{{ $errors->first('address_line2') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group row">
              <label for="phone_number" class="col-md-4 col-form-label text-md-right">代表電話番号</label>

              <div class="col-md-6">
                <input id="phone_number" type="tel" class="form-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}" name="phone_number" value="{{ old('phone_number') }}" pattern="\d{2,4}-?\d{3,4}-?\d{3,4}">

                @if ($errors->has('phone_number'))
                <span class="invalid-feedback">
                  <strong>{{ $errors->first('phone_number') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group row">
              <label for="belonging_to" class="col-md-4 col-form-label text-md-right">About</label>

              <div class="col-md-6">
                <textarea class="form-control{{ $errors->has('belonging_to') ? ' is-invalid' : '' }}" name="belonging_to" id="belonging_to" cols="30" rows="10">{{ old('belonging_to') }}</textarea>
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
                  作成
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

@section('pageJs')
<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
<script src=" {{ asset('js/brandicon.js') }} "></script>
@endsection