<template>
  <div class="container">
    <div v-if="display">
      <!-- 画面左側 -->
      <div class="card flex-md-row mt-5 mb-4 pt-4">
        <div class="thumbneil ml-5">
          <img
            v-if="items[num].image.indexOf('http') == -1"
            class="card-img-left flex-auto d-none d-md-block"
            :src="'/storage/'+items[num].image"
          />
          <img
            v-if="items[num].image.indexOf('http') 
                    != -1"
            class="card-img-left flex-auto d-none d-md-block"
            :src="items[num].image"
          />

          <br />
          <!-- product_image切り替え -->
          <el-carousel
            :autoplay="false"
            type="card"
            height="150px"
            @change="changeImage"
          >
            <el-carousel-item
              v-for="(item,key) in items"
              :key="key"
            >
              <img
                v-if="item.image.indexOf('http') == -1"
                @click="changeImage"
                :src="'/storage/'+item.image"
                :value="key"
              />
              <img
                v-if="item.image.indexOf('http') != -1"
                @click="changeImage"
                :src="item.image"
                :value="key"
              />
            </el-carousel-item>
          </el-carousel>
        </div>
        <!-- プロダクト説明 -->
        <div
          class="card-body d-flex flex-column align-items-start pt-0"
          style="margin-left:48px"
        >
          <h4 class="mb-0">
            <a
              class="text-dark"
              href="#"
            >{{product.title}}</a>
          </h4>

          <p
            class="card-text mt-3 mb-auto"
            style="font-size:0.8rem"
          >{{product.explain}}</p>
          <!-- ブランド詳細 -->
          <div class="d-flex mt-5">
            <div>
              <img
                v-if="product.brands.logo_image.indexOf('http') == -1"
                :src="'/storage/'+product.brands.logo_image"
                class="rounded-circle d-block border"
                style="height:76px; width:76px"
              />
              <img
                v-if="product.brands.logo_image.indexOf('http') != -1"
                :src="product.brands.logo_image"
                class="rounded-circle d-block border"
                style="height:60px; width:60px"
              />
            </div>
            <div class="ml-3">
              <div class="mb-3 d-flex justify-content-between">
                <strong class="mt-1">{{product.brands.name}}</strong>
                <button
                  type="button"
                  class="btn btn-primary ml-3"
                  style="padding: 1px 9px"
                >follow</button>
              </div>
              <p
                class="card-text mb-auto"
                style="font-size:0.8rem"
              >Specht Architects was founded on the vision of creating elegant, comfortable, and timeless buildings that are rooted in the unique environments in which they exist, and shaped by the character of the people who will inhabit them.</p>
              <a
                class="card-text mb-auto"
                href="product.brands.url"
              >{{ product.brands.url }}</a>
            </div>
          </div>
          <!-- タグ一覧 -->
          <div class="btn-group d-block mt-5">
            <button
              type="button"
              class="btn btn-sm btn-outline-secondary"
              data-toggle="modal"
              v-for="key in product.tags"
              :key="key.id"
            >
              <i class="fas fa-tag"></i>
              {{ key.name}}
            </button>
          </div>
        </div>
      </div>

      <div class="test ml-5 d-flex">

        <div class="recommend">
          <p>関連商品</p>
          <div class="col m-0 d-flex">
            <div class="card m-2">
              <div class="image">
                <img
                  src="/storage/test.jpg"
                  style="width:160px; height:150px;"
                />
              </div>
              <div class="card-body p-1">
                <p
                  class="m-0"
                  style="font-size:0.8rem;"
                >サンゲツ㈱</p>
                <p
                  class="text-center"
                  style="font-size:0.8rem;"
                >〇〇〇〇</p>
              </div>
            </div>
            <div class="card m-2">
              <div class="image">
                <img
                  src="/storage/test2.jpg"
                  style="width:160px; height:150px;"
                />
              </div>
              <div class="card-body p-1">
                <p
                  class="m-0"
                  style="font-size:0.8rem;"
                >サンゲツ㈱</p>
                <p
                  class="text-center"
                  style="font-size:0.8rem;"
                >〇〇〇〇</p>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center">
          <p>お問い合わせ</p>
          <div class="d-flex flex-row-reverse">

            <img
              src="/storage/test_contact.png"
              alt
              style="width:60%; height:90%;"
            />
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
      product: [],
      items: []
    };
  },
  methods: {
    // ホバーでサムネイル切り替え
    changeImage: function() {
      setTimeout(
        function() {
          let getValue = document
            .getElementsByClassName("el-carousel__item is-active")[0]
            .getElementsByTagName("img")[0]
            .getAttribute("value");
          this.num = getValue;
        }.bind(this),
        10
      );
    }
  },

  mounted: async function() {
    this.url = location.href;
    let index = this.url.indexOf("=");
    this.id = this.url.slice(index + 1);
    await axios
      .get("/api/product-detail/" + this.id)
      .then(response => (this.product = response.data));

    this.items = this.product.product_images;
    this.display = true;
  }
};
</script>

<style>
.thumbneil img {
  width: 320px;
  height: 320px;
}

.images img {
  width: 100px;
  height: 100px;
}

.card {
  border: none;
}

.el-carousel__item:nth-child(2n) {
  background-color: #99a9bf;
}

.el-carousel__item:nth-child(2n + 1) {
  background-color: #d3dce6;
}

.el-carousel__item img {
  cursor: pointer;
  width: 160px;
  height: 150px;
}
</style>