<template>
  <div class="container">
    <div v-if="display">
      <!-- 画面左側 -->
      <div class="card flex-md-row">
        <div class="thumbneil ml-5">
          <div
            class="thumbneil__img"
            v-if="items[num].image.indexOf('http') == -1"
            :style="{'backgroundImage':'url(/storage/'+ items[num].image +')'}"
          />

          <div
            class="thumbneil__img"
            v-if="items[num].image.indexOf('http') != -1"
            :style="{'backgroundImage':'url('+ items[num].image +')'}"
          />

          <br />
          <!-- product_image切り替え -->
          <el-carousel :autoplay="false" type="card" @change="changeImage">
            <el-carousel-item v-for="(item,key) in items" :key="key">
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
        <!-- プロダクト説明 -->
        <div class="card-body d-flex flex-column align-items-start pt-0" style="margin-left:48px">
          <h4 class="mb-0">
            <a class="text-dark" href="#">{{product.title}}</a>
          </h4>

          <p class="card-text mt-3 mb-auto" style="font-size:0.8rem">{{product.explain}}</p>
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
                <button type="button" class="btn btn-primary ml-3" style="padding: 1px 9px">follow</button>
              </div>
              <p
                class="card-text mb-auto"
                style="font-size:0.8rem"
              >Specht Architects was founded on the vision of creating elegant, comfortable, and timeless buildings that are rooted in the unique environments in which they exist, and shaped by the character of the people who will inhabit them.</p>
              <a class="card-text mb-auto" href="product.brands.url">{{ product.brands.url }}</a>
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

      <div class="test">
        <div class="card recommend pb-4">
          <p class="ml-4 mt-3">関連商品</p>
          <div class="col m-0 d-flex">
            <div class="card m-2 col-2">
              <div class="image">
                <img src="/storage/test.jpg" style="width:160px; height:150px;" />
              </div>
              <div class="card-body p-1">
                <p class="m-0" style="font-size:0.8rem;">サンゲツ㈱</p>
                <p class="text-center" style="font-size:0.8rem;">〇〇〇〇</p>
              </div>
            </div>
            <div class="card m-2 col-2">
              <div class="image">
                <img src="/storage/test2.jpg" style="width:160px; height:150px;" />
              </div>
              <div class="card-body p-1">
                <p class="m-0" style="font-size:0.8rem;">サンゲツ㈱</p>
                <p class="text-center" style="font-size:0.8rem;">〇〇〇〇</p>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="card recommend pb-4">
            <p class="ml-4 mt-3">使用したデザイン事例</p>
            <div class="col m-0 d-flex">
              <div class="card m-2 col-2">
                <div class="image">
                  <img src="/storage/tajima1.jpg" style="width:160px; height:150px;" />
                </div>
                <div class="card-body p-1">
                  <p class="m-0" style="font-size:0.8rem;">㈱デザインブック</p>
                  <p class="text-center" style="font-size:0.8rem;">〇〇〇〇</p>
                </div>
              </div>
              <div class="card m-2 col-2">
                <div class="image">
                  <img src="/storage/tajima2.jpg" style="width:160px; height:150px;" />
                </div>
                <div class="card-body p-1">
                  <p class="m-0" style="font-size:0.8rem;">山田商店</p>
                  <p class="text-center" style="font-size:0.8rem;">〇〇〇〇</p>
                </div>
              </div>
              <div class="card m-2 col-2">
                <div class="image">
                  <img src="/storage/tajima3.jpg" style="width:160px; height:150px;" />
                </div>
                <div class="card-body p-1">
                  <p class="m-0" style="font-size:0.8rem;">㈱チャイテック</p>
                  <p class="text-center" style="font-size:0.8rem;">〇〇〇〇</p>
                </div>
              </div>
              <div class="card m-2 col-2">
                <div class="image">
                  <img src="/storage/tajima4.jpg" style="width:160px; height:150px;" />
                </div>
                <div class="card-body p-1">
                  <p class="m-0" style="font-size:0.8rem;">㈱デザインブック</p>
                  <p class="text-center" style="font-size:0.8rem;">〇〇〇〇</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div>
          <div class="card card-contact col-4">
            <form role="form" id="contact-form1" method="post">
              <div class="card-header text-center">
                <h4 class="card-title">お問い合わせ</h4>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6 pr-2">
                    <label>性</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="now-ui-icons users_circle-08"></i>
                        </span>
                      </div>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="First Name..."
                        aria-label="First Name..."
                        autocomplete="given-name"
                      />
                    </div>
                  </div>
                  <div class="col-md-6 pl-2">
                    <div class="form-group">
                      <label>名</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="now-ui-icons text_caps-small"></i>
                          </span>
                        </div>
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Last Name..."
                          aria-label="Last Name..."
                          autocomplete="family-name"
                        />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Emailアドレス</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="now-ui-icons ui-1_email-85"></i>
                      </span>
                    </div>
                    <input
                      type="email"
                      class="form-control"
                      placeholder="Email Here..."
                      autocomplete="email"
                    />
                  </div>
                </div>
                <div class="form-group">
                  <label>メッセージ</label>
                  <textarea name="message" class="form-control" id="message" rows="6"></textarea>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" />
                        <span class="form-check-sign"></span>
                        ロボットではありません
                      </label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <button type="submit" class="btn btn-primary btn-round pull-right">送信</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <!-- ここまで -->
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    user: {
      type: Object
    }
  },
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
    // サムネイル切り替え
    changeImage: function() {
      setTimeout(
        function() {
          let getValue = document
            .getElementsByClassName("el-carousel__item is-active")[0]
            .getElementsByTagName("div")[0]
            .getAttribute("value");
          console.log(getValue);
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
body {
  margin-top: 58px !important;
}

.thumbneil__img {
  height: 600px;
  background-position: center center;
  background-repeat: no-repeat;
}

.images img {
  width: 100px;
  height: 100px;
}

.card {
  border: none;
}

.el-carousel__item img {
  cursor: pointer;
  width: 160px;
  height: 150px;
}

.el-carousel__container {
  height: 150px;
}

.carousel__img {
  height: 100%;
  background-size: contain;
  background-position: center center;
  background-repeat: no-repeat;
}
</style>