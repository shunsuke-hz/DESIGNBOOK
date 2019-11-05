<template>
  <div class="wrapper">
    <div class="page-header clear-filter" filter-color="orange">
      <div
        class="page-header-image"
        data-parallax="true"
        style="background-image:url('https://images.unsplash.com/photo-1476984251899-8d7fdfc5c92c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=3700&q=80');"
      ></div>
      <div class="container">
        <div class="photo-container">
          <img src="/storage/brand_icon/32/32_avatar.png" />
        </div>
        <h3 class="title">Ryan Scheinder</h3>
        <p class="category">Photographer</p>
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
          <a href="#button" class="btn btn-primary btn-round btn-lg">Follow</a>
          <a
            href="#button"
            class="btn btn-default btn-round btn-lg btn-icon"
            rel="tooltip"
            title="Follow me on Twitter"
          >
            <i class="fab fa-twitter"></i>
          </a>
          <a
            href="#button"
            class="btn btn-default btn-round btn-lg btn-icon"
            rel="tooltip"
            title="Follow me on Instagram"
          >
            <i class="fab fa-instagram"></i>
          </a>
        </div>
        <h3 class="title">About me</h3>
        <h5
          class="description"
        >An artist of considerable range, Ryan — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records all of his own music, giving it a warm, intimate feel with a solid groove structure. An artist of considerable range.</h5>

        <div class="col-md-6 ml-auto mr-auto">
          <h4 class="title text-center">My Portfolio</h4>
          <div class="nav-align-center">
            <ul class="nav nav-pills nav-pills-primary nav-pills-just-icons" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#profile" role="tablist">
                  <i class="now-ui-icons design_image"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#home" role="tablist">
                  <i class="now-ui-icons location_world"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#messages" role="tablist">
                  <i class="now-ui-icons sport_user-run"></i>
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
                <div class="card m-2" v-for="value in brandData.projects" :key="value.id">
                  <div class="image">
                    <a :href="'/project-detail?work='+value.id">
                      <img
                        v-if="value.project_images[0].image.indexOf('http') == -1"
                        class="img img-thumbnail"
                        :src="'/storage/'+value.project_images[0].image"
                      />
                      <img
                        v-if="value.project_images[0].image.indexOf('http') != -1"
                        class="img img-thumbnail"
                        :src="value.project_images[0].image"
                      />
                    </a>
                  </div>
                  <div class="card-body">
                    <p class="card-text">{{ value.title }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane" id="home" role="tabpanel">
            <div class="col-md-10 ml-auto mr-auto">
              <div class="row collections" v-if="brandData.products.length>1">
                <div class="card m-2" v-for="value in brandData.products" :key="value.id">
                  <div class="image">
                    <a :href="'/project-detail?work='+value.id">
                      <img
                        v-if="value.product_images[0].image.indexOf('http') == -1"
                        class="img img-thumbnail"
                        :src="'/storage/'+value.product_images[0].image"
                      />
                      <img
                        v-if="value.product_images[0].image.indexOf('http') != -1"
                        class="img img-thumbnail"
                        :src="value.product_images[0].image"
                      />
                    </a>
                  </div>
                  <div class="card-body">
                    <p class="card-text">{{ value.title }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane" id="messages" role="tabpanel">
            <div class="col-md-10 ml-auto mr-auto">
              <div class="row collections">
                <div class="col-md-6">
                  <img
                    src="https://raw.githack.com/creativetimofficial/now-ui-kit/master/assets/img/bg3.jpg"
                    alt
                    class="img-raised"
                  />
                  <img
                    src="https://raw.githack.com/creativetimofficial/now-ui-kit/master/assets/img/bg8.jpg"
                    alt
                    class="img-raised"
                  />
                </div>
                <div class="col-md-6">
                  <img
                    src="https://raw.githack.com/creativetimofficial/now-ui-kit/master/assets/img/bg7.jpg"
                    alt
                    class="img-raised"
                  />
                  <img
                    src="https://raw.githack.com/creativetimofficial/now-ui-kit/master/assets/img/bg6.jpg"
                    class="img-raised"
                  />
                </div>
              </div>
            </div>
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
            <a
              href="https://demos.creative-tim.com/now-ui-kit/index.html"
              target="_blank"
            >Now UI Kit</a> by Creative Tim
          </p>
        </div>
      </div>
    </footer>
  </div>
</template>

<script>
export default {
  props: {
    brandData: {
      type: Object
    }
  },
  name: "shop-page"
};
</script>

<style>
.sidebar {
  display: none;
  margin-top: 5rem;
}

@media screen and (min-width: 768px) {
  .sidebar {
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    display: block;
    overflow-x: hidden;
    overflow-y: auto;
  }
}

.card {
  width: 264px;
  height: 264px;
  border: none;
  border-radius: 0;
  margin: 1rem;
}

.image {
  overflow: hidden;
  width: 264px;
  height: 210px;
}

.image img {
  display: block;
  transition-duration: 0.3s;
  height: 100%;
  border: none;
  margin: auto;
}

.image img:hover {
  transform: scale(1.1);
  transition-duration: 0.3s;
}

.img-thumbnail {
  padding: 0;
  border-radius: 0;
}

.card-body {
  width: 264px;
  height: 54px;
  padding: 0.5rem;
}
</style>