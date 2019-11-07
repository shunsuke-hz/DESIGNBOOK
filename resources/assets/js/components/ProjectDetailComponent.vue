<template>

  <div
    v-if="display"
    class="container-fluid p-0"
    style="margin-top:-16px"
  >
    <div class="mb-4">

      <!-- 画面左側 -->
      <div class="thumbneil">
        <!-- <img
            v-if="items[num].image.indexOf('http') == -1"
            class="card-img-left flex-auto d-none d-md-block"
            :src="'/storage/'+items[num].image"
          />
          <img
            v-if="items[num].image.indexOf('http') != -1"
            class="card-img-left flex-auto d-none d-md-block"
            :src="items[num].image"
          />
          <br /> -->

        <!-- project_image切り替え -->
        <el-carousel
          :autoplay="false"
          arrow="always"
        >
          <el-carousel-item
            v-for="(item,key) in items"
            :key="key"
          >

            <div
              class="carousel__img"
              v-if="item.image.indexOf('http') == -1"
              :style="{'backgroundImage':'url(/storage/'+ item.image +')'}"
            />

            <div
              class="carousel__img"
              v-if="item.image.indexOf('http') != -1"
              :style="{'backgroundImage':'url('+ item.image +')'}"
            />

          </el-carousel-item>
        </el-carousel>
      </div>
    </div>
    <div class="container">
      <!-- 画面下側 -->
      <div class="d-flex flex-column align-items-start pt-0">
        <div
          class="tab-content"
          style="width:100%"
        >
          <h4 class="my-0">
            <a
              class="text-dark"
              href="#"
            >{{project.title}}</a>
          </h4>
          <div class="row">
            <div class="mx-auto">

              <!-- タブ切り替え -->
              <el-tabs v-model="tab">
                <el-tab-pane
                  label="プロジェクト"
                  name="0"
                ></el-tab-pane>
                <el-tab-pane
                  label="プロダクト詳細"
                  name="1"
                ></el-tab-pane>
              </el-tabs>
            </div>
            <br />
          </div>
          <!-- プロジェクトタブ -->
          <div
            v-if="tab == 0"
            class="project-tab"
          >
            <p
              class="card-text mt-3 mb-auto"
              style="font-size:0.8rem;word-wrap: break-word;"
            >{{project.explain }}</p>
            <div
              v-if="tab ==0"
              class="d-flex mt-5"
            >
              <div>
                <img
                  v-if="project.brands.logo_image.indexOf('http') == -1"
                  :src="'/storage/'+project.brands.logo_image"
                  class="rounded-circle d-block border"
                  style="width:76px"
                />
                <img
                  v-if="project.brands.logo_image.indexOf('http') != -1"
                  :src="project.brands.logo_image"
                  class="rounded-circle d-block border"
                  style="width:76px"
                />
              </div>

              <!-- ブランド詳細 -->
              <div class="ml-3">
                <div class="mt-2">
                  <strong class="mt-1">{{ project.brands.name}}</strong>
                  <button
                    type="button"
                    class="btn btn-primary ml-3"
                    style="padding: 1px 9px"
                  >follow</button>
                </div>
                <p
                  class="card-text mb-auto"
                  style="font-size: 0.8rem;
"
                >Specht Architects was founded on the vision of creating elegant, comfortable, and timeless buildings that are rooted in the unique environments in which they exist, and shaped by the character of the people who will inhabit them.</p>
                <a
                  class="card-text mb-auto"
                  href="project.brands.url"
                >{{ project.brands.url }}</a>
              </div>
            </div>
          </div>

          <!-- プロダクトタブ -->
          <div
            v-if="tab == 1"
            class="product-tab"
          >

            <!-- プロダクトテーブル -->
            <el-table :data="items[num].products">
              <el-table-column
                prop="tags[0].name"
                label="カテゴリ"
                contenteditable="true"
              ></el-table-column>
              <el-table-column
                prop="title"
                label="製品名"
                contenteditable="true"
              ></el-table-column>
              <el-table-column
                prop="brands.name"
                label="ブランド"
                contenteditable="true"
              ></el-table-column>
              <el-table-column
                prop="model_number"
                label="品番"
                contenteditable="true"
              ></el-table-column>
            </el-table>
          </div>
        </div>

        <!-- タグ一覧 -->
        <div class="btn-group d-block mt-5 mx-auto">
          <button
            type="button"
            class="btn btn-sm btn-outline-default"
            data-toggle="modal"
            v-for="key in items[num].tags"
            :key="key.id"
          >
            <i class="fas fa-tag"></i>
            {{ key.name }}
          </button>
        </div>
      </div>
    </div>

    <br />

    <!-- 使用プロダクト一覧 -->
    <div
      v-if="tab == 1"
      class="album"
    >
      <div class="col row text-center justify-content-center m-0">
        <div
          v-for="product in items[num].products"
          :key="product.id"
          class="card m-2"
        >
          <div class="image">
            <div
              style="overflow:hidden"
              v-if="product.product_images.length !== 0"
            >
              <a :href="'../product-detail?work='+product.id">
                <img
                  v-if="product.product_images[num].image.indexOf('http') == -1"
                  :src="'/storage/'+product.product_images[num].image "
                />
                <img
                  v-if="product.product_images[num].image.indexOf('http') != -1"
                  :src="product.product_images[num].image "
                />
              </a>
            </div>
          </div>
          <div class="card-body">
            <p style="overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">{{ product.title }}</p>
            <p class="mb-0">{{ product.brands.name }}</p>
            <a
              href="product.brands.url"
              style="color:#636B6E;"
            >{{ product.brands.url }}</a>
            <br />
            <a
              v-if="product.product_images.length !== 0"
              :href="'../product-detail?work='+product.id"
            >この製品の詳細へ</a>
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
      display: false,
      url: "",
      id: "",
      num: "0",
      project: [],
      items: [],
      tab: "0",
      product_num: "0"
    };
  },

  methods: {
    // // サムネイル切り替え
    // changeImage: function() {
    //   setTimeout(
    //     function() {
    //       let getValue = document
    //         .getElementsByClassName("el-carousel__item is-active")[0]
    //         .getElementsByTagName("img")[0]
    //         .getAttribute("value");
    //       this.num = getValue;
    //     }.bind(this),
    //     10
    //   );
    // }
  },

  mounted: async function() {
    this.url = location.href;
    let index = this.url.indexOf("=");
    this.id = this.url.slice(index + 1);
    await axios
      .get("/api/project-detail/" + this.id)
      .then(response => (this.project = response.data));

    this.items = this.project.project_images;
    this.display = true;
  }
};
</script>

<style>
/* .thumbneil img {
  width: 320px;
  height: 320px;
} */

/* .thumbneil .images img {
    cursor: pointer;
    width: 80px;
    height: 80px;
} */

/* .el-carousel {
  width: 100vw;
} */

body {
  margin-top: 58px !important;
}

.card-body p {
  font-size: 1rem;
}

.el-carousel__container {
  height: 600px;
}

.el-carousel__item:nth-child(2n) {
  background-color: #ffffff;
}

.el-carousel__item:nth-child(2n + 1) {
  background-color: #ffffff;
}

/* .el-carousel__item img {
  width: 100%;
  height: 100%;
} */

.carousel__img {
  height: 100%;
  background-size: contain;
  background-position: center center;
  background-repeat: no-repeat;
}

.card {
  border: none;
}

.album .card {
  width: 264px;
  height: 264px;
  border: none;
  border-radius: 0;
  margin: 1rem;
}

.album .card img {
  width: 264px;
  height: 210px;
}

.album img:hover {
  transform: scale(1.1);
  transition-duration: 0.3s;
}

.album .card-body {
  width: 264px;
  height: 108px;
  padding: 0.5rem;
}

.products-info img {
  width: 250px;
  height: 250px;
}
</style>