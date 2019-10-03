<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">


  <title>Laravel</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropper/4.0.0/cropper.min.css">
  @yield('pageCss')

  <!-- Styles -->
  <style>
    html,
    body {
      background-color: #fff;
      color: #636b6f;
      font-family: Arial, Helvetica, sans-serif font-weight: 100;
      height: 100vh;
      margin: 0;
    }


    .flex-center {
      align-items: center;
      display: flex;
      justify-content: center;
    }

    .position-ref {
      position: relative;
    }

    .top-right {
      position: absolute;
      right: 10px;
      top: 18px;
    }

    .content {
      text-align: center;
    }

    .title {
      font-size: 84px;
    }

    .links>a {
      color: #636b6f;
      padding: 0 25px;
      font-size: 12px;
      font-weight: 600;
      letter-spacing: .1rem;
      text-decoration: none;
      text-transform: uppercase;
    }

    .m-b-md {
      margin-bottom: 30px;
    }
  </style>
</head>

<body style="padding-top:5rem;">

  <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">

    {{-- 左側のメニュー項目 --}}
    <div class="collapse navbar-collapse" id="Navber">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item d-flex align-items-center"><a class="nav-link" href="/"><i class="fas fa-search fa-lg"></i></a></li>
        <li class="nav-item"><a class="nav-link" href="/">プロジェクト</a></li>
        <li class="nav-item"><a class="nav-link" href="/product">製品</a></li>
        <li class="nav-item"><a class="nav-link" href="/brands-list">ブランド</a></li>
      </ul>
    </div>

    {{-- ロゴ画像 --}}
    <div>
      <a class="navbar-brand" href="/"><img src="/storage/Logo.png" width="80px"></a>
    </div>

    {{-- 右側のメニュー項目 --}}
    <div class="collapse navbar-collapse" id="Navber">
      <ul class="navbar-nav ml-auto">
        @auth
        <li class="nav-item d-flex align-items-center"><a class="nav-link mx-2" href="/"><i class="far fa-bell fa-lg"></i></a></li>
        <li class="nav-item d-flex align-items-center"><a class="nav-link mx-2" href="/mypage"><i class="far fa-user fa-lg"></i></a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ Auth::user()->account_name }}
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              ログアウト
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>
          </div>
        </li>

        @else
        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}"><button class="btn btn-outline-dark my-2 my-sm-0">Sign in</button></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}"><button class="btn btn-outline-primary my-2 my-sm-0">Sign Up Free</button></a></li>
        @endauth
      </ul>
    </div>

    {{-- ハンバーガーメニュー、右側に配置 --}}
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#Navber" aria-controls="Navber" aria-expanded="false" aria-label="ナビゲーションの切替">
      <span class="navbar-toggler-icon"></span>
    </button>

  </nav>




  {{-- 保険で一応残しておきます --}}
  {{-- <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <ul class="collapse navbar-collapse navbar-nav mr-auto" id="Navber">
        <li class="nav-item d-flex align-items-center"><a class="nav-link" href="http://localhost/"><i class="fas fa-search fa-lg"></i></a></li>
        <li class="nav-item"><a class="nav-link" href="http://localhost/">プロジェクト</a></li>
        <li class="nav-item"><a class="nav-link" href="http://localhost/product">製品</a></li>
        <li class="nav-item"><a class="nav-link" href="http://localhost/brands-list">ブランド</a></li>
    </ul>

    <div class="navbar-brand ml-auto">
        <a href="http://localhost/"><img src="/storage/Logo.png" width="80px"></a>
    </div>

    <ul class="navbar-nav ml-auto">
        <li class="nav-item d-flex align-items-center"><a class="nav-link mx-2" href="http://localhost/"><i class="far fa-bell fa-lg"></i></a></li>
        <li class="nav-item d-flex align-items-center"><a class="nav-link mx-2" href="http://localhost/mypage"><i class="far fa-user fa-lg"></i></a></li>
        <li class="nav-item"><a class="nav-link" href="http://localhost/"><button class="btn btn-outline-dark my-2 my-sm-0">Sign in</button></a></li>
        <li class="nav-item"><a class="nav-link" href="http://localhost/"><button class="btn btn-outline-primary my-2 my-sm-0">Sign Up Free</button></a></li>
    </ul>

    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#Navber" aria-controls="Navber" aria-expanded="false" aria-label="ナビゲーションの切替">
        <span class="navbar-toggler-icon"></span>
    </button>
</nav>--}}


  @yield('content')


  {{-- 時間のあるときにFooter作らなきゃ --}}
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script src=" {{ mix('js/app.js') }} "></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/cropper/4.0.0/cropper.min.js"></script>
  @yield('pageJs')

</body>

</html>