@extends('layouts.template')

@section('content')
<div class="wrapper">

  <div class="section">
    <div class="section section-blog col-md-10 ml-auto mr-auto">
      <div class="container">
        <h2 class="title text-center">Recent Projects</h2>

        <div class="section-story-overview">
          <div class="row">
            <div class="col-md-6">
              <div class="image-container image-left" style="background-image: url('http://www.sumiken-t.co.jp/wp/wp-content/uploads/2019/04/KUD6239%E3%81%AE%E3%82%B3%E3%83%94%E3%83%BC.jpg')">
                <!-- First image on the left side -->
                <p class="blockquote blockquote-primary">"Over the span of the satellite record, Arctic sea ice has been declining significantly, while sea ice in the Antarctichas increased very slightly"
                  <br>
                  <br>
                  <small>-NOAA</small>
                </p>
              </div>
              <!-- Second image on the left side of the article -->
              <div class="image-container image-left-bottom" style="background-image: url('http://www.sumiken-t.co.jp/wp/wp-content/uploads/2019/04/KUD6286%E3%81%AE%E3%82%B3%E3%83%94%E3%83%BC.jpg')">
              </div>
            </div>
            <div class="col-md-5">
              <!-- First image on the right side, above the article -->
              <div class="image-container image-right" style="background-image: url('http://www.sumiken-t.co.jp/wp/wp-content/uploads/2019/04/KUD6303%E3%81%AE%E3%82%B3%E3%83%94%E3%83%BC.jpg')">
              </div>
              <h3>So what does the new record for the lowest level of winter ice actually mean</h3>
              <p>The Arctic Ocean freezes every winter and much of the sea-ice then thaws every summer, and that process will continue whatever happens with climate change. Even if the Arctic continues to be one of the fastest-warming regions of the world, it will always be plunged into bitterly cold polar dark every winter. And year-by-year, for all kinds of natural reasons, there’s huge variety of the state of the ice.
              </p>
              <p>
                For a start, it does not automatically follow that a record amount of ice will melt this summer. More important for determining the size of the annual thaw is the state of the weather as the midnight sun approaches and temperatures rise. But over the more than 30 years of satellite records, scientists have observed a clear pattern of decline, decade-by-decade.
              </p>
              <p>The Arctic Ocean freezes every winter and much of the sea-ice then thaws every summer, and that process will continue whatever happens with climate change. Even if the Arctic continues to be one of the fastest-warming regions of the world, it will always be plunged into bitterly cold polar dark every winter. And year-by-year, for all kinds of natural reasons, there’s huge variety of the state of the ice.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h3 class="title">Rest of the Story:</h3>
            <p>We are here to make life better. And now I look and look around and there’s so many Kanyes I've been trying to figure out the bed design for the master bedroom at our Hidden Hills compound... and thank you for turning my personal jean jacket into a couture piece.
              <br /> I speak yell scream directly at the old guard on behalf of the future. daytime All respect prayers and love to Phife’s family Thank you for so much inspiration. </p>
            <p> Thank you Anna for the invite thank you to the whole Vogue team And I love you like Kanye loves Kanye Pand Pand Panda I've been trying to figure out the bed design for the master bedroom at our Hidden Hills compound...The Pablo pop up was almost a pop up of influence. All respect prayers and love to Phife’s family Thank you for so much inspiration daytime I love this new Ferg album! The Life of Pablo is now available for purchase I have a dream. Thank you to everybody who made The Life of Pablo the number 1 album in the world! I'm so proud of the nr #1 song in the country. Panda! Good music 2016!</p>
            <p> I love this new Ferg album! The Life of Pablo is now available for purchase I have a dream. Thank you to everybody who made The Life of Pablo the number 1 album in the world! I'm so proud of the nr #1 song in the country. Panda! Good music 2016!</p>
          </div>
        </div>
      </div>
    </div>

    <div class="section">
      <div class="container">
        <div class="col-md-12">
          <h2 class="title text-center">Recent Products</h2>
          <br />
          <div class="blogs-1" id="blogs-1">
            <div class="row">
              <div class="col-md-10 ml-auto mr-auto">
                <div class="card card-plain card-blog">
                  <div class="row">
                    <div class="col-md-5">
                      <div class="card-image">
                        <img class="img img-raised rounded" src="../assets/img/examples/card-blog4.jpg">
                      </div>
                    </div>
                    <div class="col-md-7">
                      <h6 class="category text-info">Enterprise</h6>
                      <h3 class="card-title">
                        <a href="#pablo">Warner Music Group buys concert discovery service Songkick</a>
                      </h3>
                      <p class="card-description">
                        Warner Music Group announced today it’s acquiring the selected assets of the music platform Songkick, including its app for finding concerts and the company’s trademark.
                      </p>
                      <p class="author">
                        by
                        <a href="#pablo">
                          <b>Sarah Perez</b>
                        </a>, 2 days ago
                      </p>
                    </div>
                  </div>
                </div>
                <div class="card card-plain card-blog">
                  <div class="row">
                    <div class="col-md-7">
                      <h6 class="category text-danger">
                        <i class="now-ui-icons now-ui-icons media-2_sound-wave"></i> Startup
                      </h6>
                      <h3 class="card-title">
                        <a href="#pablo">Insticator raises $5.2M to help publishers</a>
                      </h3>
                      <p class="card-description">
                        Insticator is announcing that it has raised $5.2 million in Series A funding. The startup allows online publishers to add quizzes, polls and other interactive elements...
                      </p>
                      <p class="author">
                        by
                        <a href="#pablo">
                          <b>Anthony Ha</b>
                        </a>, 5 days ago
                      </p>
                    </div>
                    <div class="col-md-5">
                      <div class="card-image">
                        <img class="img img-raised rounded
                                            " src="../assets/img/examples/card-blog6.jpg">
                      </div>
                    </div>
                  </div>
                </div>
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
<!-- <link rel="stylesheet" href="{{ asset('css/profile-detail.css') }}"> -->
@endsection