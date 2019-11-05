@extends('layouts.template')

@section('content')
<div class="container">
  <div class="row flex-lg-nowrap">
    <div class="col-12 col-lg-auto mb-3" style="width: 200px;">
      {{-- <div class="card p-3">
        <div class="e-navlist e-navlist--active-bg">
          <ul class="nav">
            <li class="nav-item"><a class="nav-link px-2 active" href="./overview.html"><i class="fa fa-fw fa-bar-chart mr-1"></i><span>Overview</span></a></li>
            <li class="nav-item"><a class="nav-link px-2" href="./users.html"><i class="fa fa-fw fa-th mr-1"></i><span>CRUD</span></a></li>
            <li class="nav-item"><a class="nav-link px-2" href="./settings.html"><i class="fa fa-fw fa-cog mr-1"></i><span>Settings</span></a></li>
          </ul>
        </div>
      </div> --}}
    </div>

    <div class="col">
      <div class="row">
        <div class="col mb-3">
          <div class="card">
            <div class="card-body">
              <div class="e-profile">
                <div class="row">
                  <div class="col-12 col-sm-auto mb-3">
                    <div class="mx-auto" style="width: 140px;">
                      <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px;">
                        @if( Auth::user()->profile_image == null)
                        <img class="profile_image" src="storage/noimage.png" alt="" style="max-width: 100%;">
                        @else
                        <img class="profile_image" src="storage/upload/{{ Auth::user()->id }}/{{ Auth::user()->profile_image }}" alt="" style="max-width: 100%;">
                        @endif
                      </div>
                    </div>

                  </div>

                  <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                    <div class="text-center text-sm-left mb-2 mb-sm-0">

                      <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">{{ Auth::user()->account_name }}</h4>
                      <p class="mb-0">{{ Auth::user()->name }}</p>
                      <div class="text-muted"><small>Last seen 2 hours ago</small></div>


                      <div class="mt-2">
                        <label>
                          <span class="btn btn-info">
                            <i class="fa fa-fw fa-camera"></i>
                            プロフィール画像の変更
                            <input type="file" accept="image/*" capture="camera" id="upload" class="__input js-imageFile" style="display:none">

                          </span>
                          <!-- <p class="__file-name js-fileName" data-file-name="1">ファイルは選択されていません。</p> -->

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
                              <button type="button" class="btn btn-danger js-trimmingBtn" data-option="">変更</button>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </div>
                      <!-- <input id="file-input" type="file" />
                      <div>
                        <input type="button" id="test" value="実行" />
                      </div>
                      <div id="result"></div> -->


                    </div>
                    <div class="text-center text-sm-right">
                      <span class="badge badge-secondary">administrator</span>
                      <div class="text-muted"><small>Joined 09 Dec 2017</small></div>
                    </div>
                  </div>
                </div>
                @if (session('success'))
                <div class="row">
                  <div class="container mt-2">
                    <div class="alert alert-success">
                      {{ session('success') }}
                    </div>
                  </div>
                </div>
                @endif
                @if (session('error'))
                <div class="row">
                  <div class="container mt-2">
                    <div class="alert alert-danger">
                      {{ session('error') }}
                    </div>
                  </div>
                </div>
                @endif
                <ul class="nav nav-tabs" role="tablist" id="myTab">
                  <li class="nav-item"><a href="#profile" class="nav-link active" role="tab" data-toggle="tab">プロフィール</a></li>
                  <li class="nav-item"><a href="#brand" class="nav-link" role="tab" data-toggle="tab">ブランド</a></li>

                </ul>

                <div class="tab-content pt-3" id="myTabContent">

                  <div class="tab-pane active" role="tabpanel" id="profile">

                    <form method="POST" action="{{ route('users.edit') }}" class=" form">
                      {{ csrf_field() }}

                      <div class="row">
                        <div class="col">
                          <div class="form-group">
                            <label>アカウント名</label>
                            <p>{{ Auth::user()->account_name }}</p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="form-group">
                            <label>氏名</label>
                            <p>{{ Auth::user()->name }}</p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="form-group">
                            <label>TEL</label>
                            <p>{{ Auth::user()->phone_number }}</p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col mb-3">
                          <div class="form-group">
                            <label>About</label>
                            <p>{{ Auth::user()->belonging_to }}</p>
                          </div>
                        </div>
                      </div>



                      <div class=" row">
                        <div class="col d-flex justify-content-end">
                          <a class="btn btn-primary" href="{{ route('users.edit') }}" role="button">編集する</a>
                        </div>
                      </div>
                    </form>

                  </div>

                  <div class="tab-pane fade" role="tabpanel" id="brand">
                    @if(isset($brand))
                    <img class="brand_image" src="storage/brand_icon/{{ $brand->id }}/{{ $brand->logo_image }}" alt="" style="width: 140px;">

                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label>ブランド名</label>
                          <p>{{ $brand->name }}</p>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label>URL</label>
                          <p><a href="{{ $brand->url }}">{{ $brand->url }}</a></p>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label>Zip</label>
                          <p>{{ $brand->postal_code }}</p>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label>Address</label>
                          <p>{{ $brand->address }}</p>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label>Mail</label>
                          <p>{{ $brand->mail_address }}</p>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label>TEL</label>
                          <p>{{ $brand->phone_number }}</p>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label>Profile</label>
                          <p>{{ $brand->profile }}</p>
                        </div>
                      </div>
                    </div>
                    @component('components.btn-del')
                    @slot('controller', 'user')
                    @slot('route', 'users.secedeBrand')
                    @slot('id', Auth::user()->id)
                    @slot('name', $brand->name)
                    @endcomponent

                    @else
                    <p>ブランドに加入していません。</p>
                    <a class="btn btn-primary" href="{{ route('brand.index') }}">ブランドを作成</a>
                    @endif
                  </div>

                </div>

              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-3 mb-3">
          {{-- <div class="card mb-3">
            <div class="card-body">
              <div class="px-xl-3">
                <button class="btn btn-block btn-secondary">
                  <i class="fa fa-sign-out"></i>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h6 class="card-title font-weight-bold">Support</h6>
              <p class="card-text">Get fast, free help from our friendly assistants.</p>
              <button type="button" class="btn btn-primary">Contact Us</button>
            </div>
          </div> --}}
        </div>
      </div>

    </div>
  </div>
</div>


@endsection

@section('pageJs')
<script src=" {{ asset('js/usericon.js') }} "></script>
@endsection