
{{-- ハンバーガーメニューの表示要修正 --}}
{{-- タブみたいな見た目にしたいのでメニューごとにナビゲーションバーテンプレート作成したい --}}
{{-- ロゴ画像文字なしにしたい --}}

<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    
    {{-- 左側のメニュー項目 --}}
    <div class="collapse navbar-collapse" id="Navber">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item d-flex align-items-center"><a class="nav-link" href="http://localhost/"><i class="fas fa-search fa-lg"></i></a></li>
            <li class="nav-item"><a class="nav-link" href="http://localhost/">プロジェクト</a></li>
            <li class="nav-item"><a class="nav-link" href="http://localhost/product">製品</a></li>
            <li class="nav-item"><a class="nav-link" href="http://localhost/brands-list">ブランド</a></li>
        </ul>
    </div>

    {{-- ロゴ画像 --}}
    <div>
        <a class="navbar-brand" href="http://localhost/"><img src="/storage/Logo.png" width="80px"></a>
    </div>

    {{-- 右側のメニュー項目 --}}
    <div class="collapse navbar-collapse" id="Navber">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item d-flex align-items-center"><a class="nav-link mx-2" href="http://localhost/"><i class="far fa-bell fa-lg"></i></a></li>
            <li class="nav-item d-flex align-items-center"><a class="nav-link mx-2" href="http://localhost/mypage"><i class="far fa-user fa-lg"></i></a></li>
            <li class="nav-item"><a class="nav-link" href="http://localhost/"><button class="btn btn-outline-dark my-2 my-sm-0">Sign in</button></a></li>
            <li class="nav-item"><a class="nav-link" href="http://localhost/"><button class="btn btn-outline-primary my-2 my-sm-0">Sign Up Free</button></a></li>
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

