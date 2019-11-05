@extends('layouts.template')

@section('content')
<div class="wrapper">
  <div class="page-header clear-filter" filter-color="clear">
    <div class="page-header-image" data-parallax="true" style="background-image:url('http://www.sumiken-t.co.jp/wp/wp-content/uploads/2019/04/KUD6239%E3%81%AE%E3%82%B3%E3%83%94%E3%83%BC.jpg;"></div>
    <div class="container">
      <div class="photo-container">
        <!-- <img src="/storage/brand_icon/32/32_avatar.png" /> -->
        <img src="/storage/{{ $brand->logo_image }}" />
      </div>
      <h3 class="title">{{ $brand->name }}</h3>
      <p class="category">Architect</p>
      <div class="content">
        <div class="social-description">
          <h2>26</h2>
          <p>Comments</p>
        </div>
        <div class="social-description">
          <h2>26</h2>
          <p>Comments</p>
        </div>
        <div class="social-description">
          <h2>48</h2>
          <p>Bookmarks</p>
        </div>
      </div>
    </div>
  </div>
  <div class="section">
    <div class="container">
      <div class="button-container">
        @auth
        @if($user->brand_id == $brand->id)
        <a href="#button" class="btn btn-dark btn-round btn-lg" data-toggle="modal" data-target="#brand-secede">脱会する</a>
        @else
        <a href="#button" class="btn btn-info btn-round btn-lg" data-toggle="modal" data-target="#brand-join">ブランド加入</a>
        @endif
        <a href="#button" class="btn btn-info btn-round btn-lg">Follow</a>
        @endauth

      </div>

      <div class="modal fade" id="brand-join" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="">
                ブランド加入
              </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>このブランドに加入しますか？</p>
              <p><strong>{{ $brand->name }}</strong></p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">
                キャンセル
              </button>
              {{-- 削除用のアクションを実行させるフォーム --}}
              <form action="{{ route('users.joinBrand',['brand_id' => $brand->id]) }}" method="post">

                {{ csrf_field() }}
                <button type="submit" class="btn btn-danger">
                  加入する
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="brand-secede" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="">
                ブランド脱会
              </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>本当に脱会してもよろしいですか？</p>
              <p><strong>{{ $brand->name }}</strong></p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">
                キャンセル
              </button>
              {{-- 削除用のアクションを実行させるフォーム --}}
              <form action="{{ route('users.secedeBrand') }}" method="post">

                {{ csrf_field() }}
                <button type="submit" class="btn btn-danger">
                  脱会する
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>

      <h3 class="title">About me</h3>
      <h5 class="description">{{ $brand->profile }}</h5>

      <div class="col-md-6 ml-auto mr-auto">
        <h4 class="title text-center">My Portfolio</h4>
        <div class="nav-align-center">
          <ul class="nav nav-tabs justify-content-center" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#profile" role="tablist">
                <!-- <i class="now-ui-icons design_image"></i> -->
                プロジェクト
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#home" role="tablist">
                <!-- <i class="now-ui-icons location_world"></i> -->
                プロダクト
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#messages" role="tablist">
                <!-- <i class="now-ui-icons sport_user-run"></i> -->
              </a>
            </li>
          </ul>
        </div>
      </div>
      <!-- Tab panes -->
      <div class="tab-content gallery">
        <div class="tab-pane active" id="profile" role="tabpanel">
          <div class="col-md-10 ml-auto mr-auto">
            <div class="row collections">
              @isset($brand->projects)
              @foreach($brand->projects as $project)
              <div class="col-md-4">
                <div class="card m-2">
                  <div class="image">
                    <a href="/project-detail?work={{ $project->id }}">
                      @if(preg_match("/^http/",$project->project_images[0]->image))
                      <img class="img img-thumbnail" src="{{ $project->project_images[0]->image }}">
                      @else
                      <img class="img img-thumbnail" src="/storage/{{ $project->project_images[0]->image }}">
                      @endif
                    </a>
                  </div>
                  <div class="card-body">
                    <p class="card-text">{{ $project->title }}</p>
                  </div>
                </div>
              </div>
              @endforeach
              @else
              <p>プロジェクトがありません</p>
              @endisset
            </div>
          </div>
        </div>

        <div class="tab-pane" id="home" role="tabpanel">
          <div class="col-md-10 ml-auto mr-auto">
            <div class="row collections">
              @isset($brand->products[0]->product_images[0]->image)
              @foreach($brand->products as $product)
              <div class="col-md-4">
                <div class="card m-2">
                  <div class="image">
                    <a href="/product-detail?work={{ $product->id }}">
                      @if(preg_match("/^http/",$product->product_images[0]->image))
                      <img class="img img-thumbnail" src="{{ $product->product_images[0]->image }}">
                      @else
                      <img class="img img-thumbnail" src="/storage/{{ $product->product_images[0]->image }}">
                      @endif
                    </a>
                  </div>
                  <div class="card-body">
                    <p class="card-text">{{ $product->title }}</p>
                  </div>
                </div>
              </div>
              @endforeach
              @else
              <div class="col-md-4">
                <p>プロダクトがありません</p>
              </div>
              @endisset
            </div>
          </div>
        </div>

        <div class="tab-pane" id="messages" role="tabpanel">
          <div class="col-md-10 ml-auto mr-auto">
            <div class="row collections">
              <div class="col-md-6">
                <img src="https://raw.githack.com/creativetimofficial/now-ui-kit/master/assets/img/bg3.jpg" alt class="img-raised" />
                <img src="https://raw.githack.com/creativetimofficial/now-ui-kit/master/assets/img/bg8.jpg" alt class="img-raised" />
              </div>
              <div class="col-md-6">
                <img src="https://raw.githack.com/creativetimofficial/now-ui-kit/master/assets/img/bg7.jpg" alt class="img-raised" />
                <img src="https://raw.githack.com/creativetimofficial/now-ui-kit/master/assets/img/bg6.jpg" class="img-raised" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('pageCss')
<link rel="stylesheet" href="{{ asset('css/brand-detail.css') }}">
@endsection