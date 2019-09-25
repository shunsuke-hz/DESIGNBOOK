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
    <body>
        {{-- 全ページ共通ナビゲーションバー --}}
        <nav class="nav mt-3 mb-3">
            <a href="http://localhost/"><img src="/storage/Logo.png" width="150px"></a>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="http://localhost/">
                        <img src="/storage/home.png">プロジェクト検索
                    </a>
                </li>
                <li>
                    <a href="http://localhost/product">
                        <img src="/storage/search.png">製品検索
                    </a>
                </li>
                <li>
                    <a href="http://localhost/brands-list">
                        <img src="/storage/search.png">ブランド一覧
                    </a>
                </li>
                <li><a href="http://localhost/">
                        <img src="/storage/heart.png">お知らせ</li>
                    </a>
                <li>
                    <a href="http://localhost/mypage">
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
        
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Brand List
                </div>
                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script src=" {{ mix('js/app.js') }} "></script>
        
    </body>
    </html>
    
