<template>
  <div style="margin-top:-16px">
    <el-carousel
      :interval="3000"
      arrow="always"
    >
      <el-carousel-item
        v-for="(item,key) in top.project_images"
        :key="key"
      >
        <div
          class="carousel__img"
          v-if="item.image.indexOf('http') == -1"
          :style="{'backgroundImage':'url(/storage/'
          + item.image +')'}"
        >
          <div class="carousel__text ml-5 pt-5">
            <h2>{{item.title}}</h2>
            <h3>{{top.explain}}</h3>
            <a
              class="btn btn-outline-info"
              href="/project-detail?work=1"
            >more</a>
          </div>
        </div>
        <div
          class="carousel__img"
          v-if="item.image.indexOf('http') != -1"
          :style="{'backgroundImage':'url('
          + item.image +')'}"
        >
          <div class="carousel__text ml-5 pt-5">
            <h2>{{item.title}}</h2>
            <h5>{{top.explain}}</h5>
            <a
              class="btn btn-outline-info"
              href="/project-detail?work=1"
            >more</a>
          </div>
        </div>
      </el-carousel-item>
    </el-carousel>
    <div class="container pt-5">
      <div class="text-center">
        <h2>Staff Picks</h2>
        <p>The latest projects, products and exclusive articles</p>
        <div class="col-md-12">
          <!-- １枚目 -->
          <div
            class="card mb-3"
            style="max-width: 540px;"
          >
            <div class="row no-gutters">
              <div class="col-md-4">
                <svg
                  class="bd-placeholder-img"
                  width="100%"
                  height="250"
                  preserveAspectRatio="xMidYMid slice"
                  focusable="false"
                  role="img"
                  aria-label="Placeholder: Image"
                  style="backgroundImage: url('http://koheykudo.com/wp-content/uploads/2018/11/KNP-0812-768x512.jpg');background-size: cover;
"
                >
                </svg>
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">{{response[1].title}}</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
          </div>
          <!-- ２枚目 -->
          <div
            class="card mb-3"
            style="max-width: 540px;"
          >
            <div class="row no-gutters">
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">{{response[2].title}}</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
              <div class="col-md-4">
                <svg
                  class="bd-placeholder-img"
                  width="100%"
                  height="250"
                  preserveAspectRatio="xMidYMid slice"
                  focusable="false"
                  role="img"
                  aria-label="Placeholder: Image"
                  style="backgroundImage: url('https://d6pmnsnqga8dz.cloudfront.net/wp/wp-content/uploads/2019/09/20190523_G1X0098-pano-Edit-1500x1883.jpg');background-size: cover;
"
                >
                </svg>
              </div>

            </div>
          </div>
          <!-- 3枚目 -->
        </div>

      </div>
    </div>

  </div>
</template>

<script>
export default {
  data: function() {
    return {
      top: {},
      response: []
    };
  },
  mounted: async function() {
    await axios
      .get("/api/home")
      .then(response => (this.response = response.data));
    this.top = this.response[0];
  }
};
</script>

<style>
.el-carousel__container {
  height: 500px;
}

.carousel__img {
  height: 500px;
  width: 100%;
  background-size: cover;
}

.carousel__text h2 {
  color: white;
}

.carousel__text h5 {
  width: 30%;
  color: white;
}

.carousel__text a {
  color: white;
}
</style>