<template>
  <div>
    <el-carousel :interval="3000" arrow="always">
      <el-carousel-item v-for="(item,key) in top.project_images" :key="key">
        <div
          class="carousel__img"
          v-if="item.image.indexOf('http') == -1"
          :style="{'backgroundImage':'url(/storage/'
          + item.image +')'}"
        >
          <div class="carousel__text ml-5 pt-5">
            <h2>{{item.title}}</h2>
            <h3>{{top.explain}}</h3>
            <a class="btn btn-outline-info" href="/project-detail?work=1">more</a>
          </div>
        </div>
        <div
          class="carousel__img"
          v-if="item.image.indexOf('http') != -1"
          :style="{'backgroundImage':'url('
          + item.image +')'}"
        >
          <div class="carousel__text ml-5 pt-5">
            <h2>Company Office</h2>
            <h5>This is an office renovation plan for an AI startup company. Divide the whole into three zones: quiet forest, forest square, and forest lounge. The floor is mainly made of flooring, and the green wall grows on the wall on the corridor side, creating the feeling of the whole forest. We will create a bar counter on the north side, a desk and diner seats for large collaboration in the center, and a personal zone where you can concentrate...</h5>
            <a class="btn btn-outline-info" href="/project-detail?work=1">more</a>
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
          <div class="card mb-3" style="max-width: 540px;">
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
                />
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Higashimatsuyama</h5>
                  <p
                    class="card-text"
                  >LocatedinSaitama,HigashimatsuyamaHousewasdesignedforacouplewhosefamilieslivedonthesiteforgenerationsforover300years...</p>
                  <p class="card-text">
                    <small class="text-muted">Last updated 30 mins ago</small>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!-- ２枚目 -->
          <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
              <div class="col-md-4 order-md-2">
                <svg
                  class="bd-placeholder-img"
                  width="100%"
                  height="250"
                  preserveAspectRatio="xMidYMid slice"
                  focusable="false"
                  role="img"
                  aria-label="Placeholder: Image"
                  style="backgroundImage: url(/storage/外観_R.jpg);background-size: cover;
"
                />
              </div>

              <div class="col-md-8 order-md-1">
                <div class="card-body">
                  <h5 class="card-title">Mr.Sasanuma's House</h5>
                  <p
                    class="card-text"
                  >There is a plan to include a dedicated house and two rental houses in one building. The site is a flagpole site, with 2 to 3 floors of houses and...</p>
                  <p class="card-text">
                    <small class="text-muted">Last updated 1 hours ago</small>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!-- 3枚目 -->
          <div class="card mb-3" style="max-width: 540px;">
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
                  style="backgroundImage: url('https://www.interoffice.co.jp/cms-wp/wp-content/uploads/office-with-a-patio_20180520_186-Edit_180622_fin_w1500px_72ppi_q80_s-rgb_v03.jpg');background-size: cover;
"
                />
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">{{response[3].title}}</h5>
                  <p
                    class="card-text"
                  >An office relocation project for an advertising production company in Minato-ku, Tokyo. At the interoffice, I was in charge of furniture and...</p>
                  <p class="card-text">
                    <small class="text-muted">Last updated 2 hours ago</small>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!-- 4枚目 -->
          <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
              <div class="col-md-4 order-md-2">
                <svg
                  class="bd-placeholder-img"
                  width="100%"
                  height="250"
                  preserveAspectRatio="xMidYMid slice"
                  focusable="false"
                  role="img"
                  aria-label="Placeholder: Image"
                  style="backgroundImage: url('https://d6pmnsnqga8dz.cloudfront.net/wp/wp-content/uploads/2019/03/000-House-of-Wind-and-Light_PHOTO_credit_Ichiro-Mishima_01.jpg');background-size: cover;
"
                />
              </div>

              <div class="col-md-8 order-md-1">
                <div class="card-body">
                  <h5 class="card-title">{{response[4].title}}</h5>
                  <p
                    class="card-text"
                  >Houses originally reflect the social environment, and rooms and traffic lines are composed of the values, behaviors, and lifestyles of that...</p>
                  <p class="card-text">
                    <small class="text-muted">Last updated 4 hours ago</small>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!-- 5枚目 -->
          <div class="card mb-3" style="max-width: 540px;">
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
                  style="backgroundImage: url('https://static.wixstatic.com/media/047852_4401cddf05984efeb7ac26e797c3b466~mv2.png/v1/fill/w_955,h_667,al_c,q_90/047852_4401cddf05984efeb7ac26e797c3b466~mv2.webp');background-size: cover;
"
                />
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">{{response[5].title}}</h5>
                  <p
                    class="card-text"
                  >Thisisanofficewedesignedforamusiclabel,occupyinganentirefloorofabuildingShibuyawhereMiyamasuzaka,aslopingstreettraversingShibuyastation,andRoute246...</p>
                  <p class="card-text">
                    <small class="text-muted">Last updated 2 hours ago</small>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!-- 6枚目 -->
          <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
              <div class="col-md-4 order-md-2">
                <svg
                  class="bd-placeholder-img"
                  width="100%"
                  height="250"
                  preserveAspectRatio="xMidYMid slice"
                  focusable="false"
                  role="img"
                  aria-label="Placeholder: Image"
                  style="backgroundImage: url('http://schemata.jp/wordpress/wp-content/uploads/02_180310_0638.jpg');background-size: cover;
"
                />
              </div>

              <div class="col-md-8 order-md-1">
                <div class="card-body">
                  <h5 class="card-title">Toy’sFactory</h5>
                  <p
                    class="card-text"
                  >ArchitecturefirmBIGhasmoveditsNewYorkofficefromtheFinancialDistricttoBrooklyn,allowingthestudiotoexpanditsworkshopandenjoyaprivatepatiooverlookingManhattan...</p>
                  <p class="card-text">
                    <small class="text-muted">Last updated 4 hours ago</small>
                  </p>
                </div>
              </div>
            </div>
          </div>
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
body {
  margin-top: 58px !important;
}

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