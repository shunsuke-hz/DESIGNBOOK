<template>
  <div class="row">
    <!-- 検索サイドバー -->
    <div class="sidebar col-sm-3 hidden-xs">
      <!-- 検索・リセットボタン -->
      <div class="mb-4  mt-3">
        <el-button
          type="primary"
          @click="setCheck"
        >検索</el-button>
        <el-button @click="resetChecked">リセット</el-button>
      </div>
      <!-- 検索ツリー -->
      <el-tree
        class="filter-tree"
        :data="tags"
        show-checkbox
        node-key="id"
        ref="tree"
        accordion
        check-on-click-node
        :check-strictly="true"
      ></el-tree>
    </div>
    <!-- 画像表示 -->
    <div class="col-sm-9 offset-sm-3">
      <div class="album">
        <div class="row">
          <div class="card m-2" v-for="value in filter" :key="value.id">
            <div class="image">
              <a :href="'/product-detail?work='+value.id">
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
  </div>
</template>

<script>
import { productTags } from "../productTags";
export default {
  mixins: [productTags],
  components: {
    productTags
  },
  data: function() {
    return {
      keyword: "",
      products: [],
      images: [],
      check: [],
      result: [],
      old_result: []
    };
  },
  computed: {
    // タグ検索機能
    filter: function() {
      this.result = [];
      this.old_result = [];

      for (let i in this.products) {
        let product = this.products[i];
        let tagArray = product.tags.map(obj => obj.id);

        if (this.check.every(v => tagArray.includes(v)) == true) {
          if (this.old_result == product) {
          } else {
            this.result.push(product);
          }
        }
        this.old_result = product;
      }
      return this.result;
    }
  },
  methods: {
    resetChecked() {
      this.$refs.tree.setCheckedKeys([]);
      this.check = [];
    },
    setCheck() {
      this.check = this.$refs.tree.getCheckedKeys();
    }
  },
  mounted: function() {
    axios.get("/api/product").then(response => (this.products = response.data));
  }
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

p {
  font-size: 1rem;
}
</style>