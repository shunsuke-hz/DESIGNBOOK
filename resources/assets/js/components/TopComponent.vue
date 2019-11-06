<template>
  <div class="row">
    <!-- 検索サイドバー -->
    <!-- <div class="sidebar col-sm-3 hidden-xs"> -->

    <el-popover
      placement="top-start"
      title="プロジェクト検索"
      width="350"
      trigger="hover"
      style="position:fixed"
    >
      <!-- 検索・リセットボタン -->
      <div class="mb-4 mt-3">
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
      <el-button
        slot="reference"
        style="border:none"
        class="m-0"
      ><i
          class="fas fa-search fa-lg"
          style="position:fixed"
        ></i></el-button>
    </el-popover>

    <!-- </div> -->

    <!-- 画像表示 -->
    <div class="col-sm-9 container-fluid">
      <div class="album">
        <div class="row">
          <div
            class="card m-2 mx-auto"
            v-for="value in filter"
            :key="value.id"
          >
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
            <div class="card-body d-flex align-items-center justify-content-center">
              <p
                class="card-text"
                style="overflow: hidden;text-overflow: ellipsis;white-space: nowrap;"
              >{{ value.title }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { projectTags } from "../projectTags";

export default {
  mixins: [projectTags],
  components: {
    projectTags
  },
  data: function() {
    return {
      keyword: "",
      projects: [],
      images: [],
      check: [],
      result: [],
      old_result: [],
      elastic: []
    };
  },

  computed: {
    // タグ検索機能
    filter: function() {
      this.result = [];
      this.old_result = [];

      for (let i in this.projects) {
        let project = this.projects[i];
        this.images = project.project_images;

        for (let n in this.images) {
          let image = this.images[n];
          let tagArray = image.tags.map(obj => obj.id);

          // 検索窓 スペースで配列化
          // if (this.keyword !== "") {
          // let key = this.keyword.match(/[^\s]+/g);
          // this.check = key;
          // this.check.filter(z => z);
          // }
          // console.log(this.check);

          if (this.check.every(v => tagArray.includes(v)) == true) {
            if (this.old_result == project) {
            } else {
              this.result.push(project);
            }

            this.old_result = project;
          }
        }
      }
      return this.result;
    }
  },
  methods: {
    resetChecked() {
      this.$refs.tree.setCheckedKeys([]);
      this.check = [];

      // this.$refs.tree.setAttribute('default-expand-all') = false;
    },
    setCheck() {
      this.check = this.$refs.tree.getCheckedKeys();
    },
    async keywordSearch() {
      await axios
        .get("/project/search?q=" + this.keyword)
        .then(response => (this.elastic = response.data));
      // this.result = this.elastic;
    }
  },
  mounted: function() {
    axios.get("/api/").then(response => (this.projects = response.data));
    // axios.get("/api/tags").then(response => (this.tags = response.data));
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