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

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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

            .links > a {
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
    <body>{{-- 全ページ共通ナビゲーションバー --}}
        <header>
            <nav class="nav mt-3 mb-3">
                <a href="http://localhost/"><img src="/storage/Logo.png" width="150px"></a>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="http://localhost/">
                            <img src="/storage/home.png">検索
                        </a>
                    </li>
                    <li>
                        <a href="http://localhost/design-office-list/">
                            <img src="/storage/search.png">設計事務所
                        </a>
                    </li>
                    <li>
                        <a href="http://localhost/manufacturers-list/">
                            <img src="/storage/search.png">メーカー
                        </a>
                    </li>
                    <li><a href="">
                            <img src="/storage/heart.png">お知らせ</li>
                        </a>
                    <li>
                        <a href="http://localhost/design-office-mypage/">
                            <img src="/storage/property.png">マイページ
                        </a>
                    </li>
                </ul>
                <form class="navbar-form navbar-right">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="キーワード">
                    </div>
                </form>
            </nav>
        </header>
        
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
            <main role="main">
                <div class="content">
                    <div class="title m-b-md">
                        DesignBook
                    </div>
                    <a href="{{ url('/product') }}">プロダクト一覧</a>
                    <div class="container">
                        <div id="app">
                            <top-component></top-component>
                        </div>
                    </div>
                    <div class="links">
                        <a href="https://laravel.com/docs">Documentation</a>
                        <a href="https://laracasts.com">Laracasts</a>
                        <a href="https://laravel-news.com">News</a>
                        <a href="https://forge.laravel.com">Forge</a>
                        <a href="https://github.com/laravel/laravel">GitHub</a>
                    </div>
                </div>
            </main>
        </div>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script src=" {{ mix('js/app.js') }} "></script>
        
    </body>
    </html>
    
