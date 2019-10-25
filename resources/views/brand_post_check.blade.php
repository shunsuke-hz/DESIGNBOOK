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
          <form method="POST" action="{{ route('brand.create') }}">
            {{ csrf_field() }}

            <div class="col-12 col-sm-auto mb-3">
              <div class="mx-auto" style="width: 140px;">
                <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px;">
                  <img class="profile_image" src="{{ $brand['bs64'] }}" alt="" style="max-width: 100%;">
                  <input type="hidden" name="bs64" class="bs64" value="{{ $brand['bs64'] }}">
                </div>
              </div>
            </div>

            <!-- <div class="mt-2">
              <label>
                <span class="btn btn-primary">
                  <i class="fa fa-fw fa-camera"></i>
                  アイコン画像の変更
                  <input type="file" accept="image/*" capture="camera" id="upload" name="photo" class="__input js-imageFile" style="display:none">
                  <input type="hidden" name="bs64" class="bs64" value="">
                </span>
              </label>
            </div> -->

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
                <span>{{ $brand['brand_name'] }}</span>
                <input id="brand_name" type="hidden" name="brand_name" value="{{ $brand['brand_name'] }}" required>

              </div>
            </div>

            <div class="form-group row">
              <label for="url" class="col-md-4 col-form-label text-md-right">ブランドURL</label>
              <div class="col-md-6">
                <span>{{ $brand['url'] }}</span>
                <input id="url" type="hidden" name="url" value="{{ $brand['url'] }}">

              </div>
            </div>

            <div class="form-group row">
              <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
              <div class="col-md-6">
                <span>{{ $brand['email'] }}</span>
                <input id="email" type="hidden" name="email" value="{{ $brand['email'] }}" required>

              </div>
            </div>

            <div class="form-group row">
              <label for="postal-code" class="col-md-4 col-form-label text-md-right">郵便番号(7桁)</label>
              <div class="col-md-6">
                <span>{{ $brand['zip01'] }}</span>
                <input type="hidden" name="zip01" id="inputAddress01" value="{{ $brand['zip01'] }}">
              </div>
            </div>

            <div class="form-group row">
              <label for="prefecture" class="col-md-4 col-form-label text-md-right">都道府県</label>
              <div class="col-md-6">
                <span>{{ $brand['pref01'] }}</span>
                <input type="hidden" name="pref01" id="inputAddress02" value="{{ $brand['pref01'] }}">
              </div>
            </div>

            <div class="form-group row">
              <label for="addr01" class="col-md-4 col-form-label text-md-right">市区町村</label>
              <div class="col-md-6">
                <span>{{ $brand['addr01'] }}</span>
                <input type="hidden" name="addr01" id="inputAddress03" value="{{ $brand['addr01'] }}">
              </div>
            </div>

            <div class="form-group row">
              <label for="address_line1" class="col-md-4 col-form-label text-md-right">番地等</label>

              <div class="col-md-6">
                <span>{{ $brand['address_line1'] }}</span>
                <input id="address_line1" type="hidden" name="address_line1" value="{{ $brand['address_line1']  }}">
              </div>
            </div>

            <div class="form-group row">
              <label for="address_line2" class="col-md-4 col-form-label text-md-right">建物名・号室等</label>

              <div class="col-md-6">
                <span>{{ $brand['address_line2'] }}</span>
                <input id="address_line2" type="hidden" name="address_line2" value="{{ $brand['address_line2'] }}">
              </div>
            </div>

            <div class="form-group row">
              <label for="phone_number" class="col-md-4 col-form-label text-md-right">代表電話番号</label>

              <div class="col-md-6">
                <span>{{ $brand['phone_number'] }}</span>
                <input id="phone_number" type="hidden" name="phone_number" value="{{ $brand['phone_number'] }}">
              </div>
            </div>

            <div class="form-group row">
              <label for="belonging_to" class="col-md-4 col-form-label text-md-right">About</label>

              <div class="col-md-6">
                <span>{{ $brand['belonging_to'] }}</span>
                <textarea style="display: none;" name="belonging_to" id="belonging_to" cols="30" rows="10">{{ $brand['belonging_to'] }}</textarea>
              </div>
            </div>

            <div class="form-group row mb-0">
              <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                  ブランド作成
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