@extends('layouts.template')

@section('content')
<div class="wrapper">
  <div class="page-header clear-filter" filter-color="">
    <div class="page-header-image" data-parallax="true" style="background-image:url('http://www.sumiken-t.co.jp/wp/wp-content/uploads/2019/04/KUD6239%E3%81%AE%E3%82%B3%E3%83%94%E3%83%BC.jpg');"></div>

  </div>
  <div class="section">
    <div class="container my-4">
      <div class="col-md-6 col-md-offset-2 align-self-center">
        <p class="font-weight-bold">project</p>

        <p><strong>Detailed documentation and more examples of Bootstrap grid you can find in our</p>

        <!--Carousel Wrapper-->
        <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
          <!--Slides-->
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block" src="http://www.sumiken-t.co.jp/wp/wp-content/uploads/2019/04/KUD6286%E3%81%AE%E3%82%B3%E3%83%94%E3%83%BC.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block" src="http://www.sumiken-t.co.jp/wp/wp-content/uploads/2019/04/KUD6303%E3%81%AE%E3%82%B3%E3%83%94%E3%83%BC.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block" src="http://www.sumiken-t.co.jp/wp/wp-content/uploads/2019/04/KUD6267%E3%81%AE%E3%82%B3%E3%83%94%E3%83%BC.jpg" alt="Third slide">
            </div>
          </div>
          <!--/.Slides-->
          <!--Controls-->
          <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
          <!--/.Controls-->
        </div>
        <ol class="carousel-indicators">
          <li data-target="#carousel-thumb" data-slide-to="0" class="active"> <img class="d-block" src="http://www.sumiken-t.co.jp/wp/wp-content/uploads/2019/04/KUD6286%E3%81%AE%E3%82%B3%E3%83%94%E3%83%BC.jpg" class="img-fluid"></li>
          <li data-target="#carousel-thumb" data-slide-to="1"><img class="d-block" src="http://www.sumiken-t.co.jp/wp/wp-content/uploads/2019/04/KUD6303%E3%81%AE%E3%82%B3%E3%83%94%E3%83%BC.jpg" class="img-fluid"></li>
          <li data-target="#carousel-thumb" data-slide-to="2"><img class="d-block" src="http://www.sumiken-t.co.jp/wp/wp-content/uploads/2019/04/KUD6267%E3%81%AE%E3%82%B3%E3%83%94%E3%83%BC.jpg" class="img-fluid"></li>
        </ol>
        <!--/.Carousel Wrapper-->

      </div>
    </div>
  </div>
</div>
<footer class="footer footer-default">
  <div class="container">
    <nav>
      <ul>
        <li>
          <a href="https://www.creative-tim.com">Creative Tim</a>
        </li>
        <li>
          <a href="http://presentation.creative-tim.com">About Us</a>
        </li>
        <li>
          <a href="http://blog.creative-tim.com">Blog</a>
        </li>
      </ul>
    </nav>
    <div class="copyright" id="copyright">
      <p>
        Made with
        <a href="https://demos.creative-tim.com/now-ui-kit/index.html" target="_blank">Now UI Kit</a> by Creative Tim
      </p>
    </div>
  </div>
</footer>
</div>
@endsection

@section('pageCss')
<link rel="stylesheet" href="{{ asset('css/profile-detail.css') }}">
@endsection