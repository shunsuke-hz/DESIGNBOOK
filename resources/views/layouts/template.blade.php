<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">


  <title>DESIGN BOOK</title>
  <link rel="icon" type="image/gif" href="/storage/Logo.png">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/now-ui-kit.min.css') }}" rel="stylesheet">



  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous">
  <link href="{{ mix('css/croppie.css') }}" rel="stylesheet">




  <!-- Styles -->
  <style>
    html,
    body {
      background-color: #fff;
      color: #3c3e3b;
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
      /* font-size: 84px; */
    }

    .links>a {
      color: #636b6f;
      padding: 0 25px;
      /* font-size: 12px; */
      font-weight: 600;
      letter-spacing: .1rem;
      text-decoration: none;
      text-transform: uppercase;
    }

    .m-b-md {
      margin-bottom: 30px;
    }

    /* .navbar-brand{
    z-index: -1;
    position: absolute;
    width: 100%;
    left: 0;
    text-align:center;
    margin: auto;
		} */

    .navbar-collapse:before {
      background: #D3D3D3
    }

    .navbar-translate {
      width: initial !important
    }
  </style>
  @yield('pageCss')
</head>

<body>
  <div id="app">
    <body-component>
      <nav class="navbar navbar-expand-lg bg-white fixed-top">
        <div class="container">
          <div class="logo">
            <a href="/home" class="navbar-brand">
              <img src="/storage/Logo.png" width="60px">
            </a>
          </div>
          <div class="navbar-translate">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-bar top-bar"></span>
              <span class="navbar-toggler-bar middle-bar"></span>
              <span class="navbar-toggler-bar bottom-bar"></span>
            </button>
          </div>
          <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item d-flex align-items-center">
                <search-component />
              </li>
              <li class="nav-item py-2"><a class="nav-link" href="/">プロジェクト</a></li>
              <li class="nav-item py-2"><a class="nav-link" href="/product">製品</a></li>
              <li class="nav-item py-2"><a class="nav-link" href="/brands-list">ブランド</a></li>
              <li class="nav-item py-2"><a class="nav-link" href="/project-post">投稿</a></li>


              @auth
              <li class="nav-item d-flex align-items-center"><a class="nav-link mx-2" href="/" data-toggle="tooltip" data-placement="top" title="新着はありません"><i class="far fa-bell fa-lg"></i></a></li>

              <li class="nav-item dropdown d-flex align-items-center">

                <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown">
                  <span>
                    @if( Auth::user()->profile_image !== null)
                    <img class="profile_image" src="storage/upload/{{ Auth::user()->id }}/{{ Auth::user()->profile_image }}" alt="" style="max-width: 30px;">
                    @endif
                  </span>
                  <p>{{ Auth::user()->account_name }}</p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="nav-link " href="/mypage">
                    <i class="far fa-user fa-lg" aria-hidden="true"></i>
                    マイページ
                  </a>
                  <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt" aria-hidden="true"></i>
                    ログアウト
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                    </form>
                  </a>
                </div>
              </li>
              @else
              <a class="nav-link" href="{{ route('login') }}">
                <button class="btn btn-outline-default m-0">login</button>
              </a>
              <a class="nav-link" href="{{ route('register') }}">
                <button class="btn btn-outline-info m-0">Sign Up</button>
              </a>
              @endauth
            </ul>
          </div>
        </div>
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

      <div style="margin-top:96px">
        @yield('content')
      </div>

  </div>
  </body-component>
  {{-- 時間のあるときにFooter作らなきゃ --}}
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script src=" {{ mix('js/app.js') }} "></script>
  <script src="{{ mix('js/croppie.js') }}"></script>
  <script src="{{ asset('js/now-ui-kit.min.js') }}"></script>


  @yield('pageJs')

</body>

</html>