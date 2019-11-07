<template>
  <div class="container">
    <div class="card">
      <div class="card-header">
      </div>
      <div class="card-body">
        <div
          v-if="status_msg"
          :class="{'alert-success': status, 'alert-danger': !status }"
          class="alert"
          role="alert"
        >{{ status_msg }}</div>
        <form>
          <div class="form-group">
            <p style="font-weight:350">プロジェクトの作成</p>
            <label for="exampleFormControlInput1">タイトル</label>
            <input
              v-model="title"
              type="text"
              class="form-control"
              id="title"
              placeholder
              required
            />
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">プロジェクトの詳細</label>
            <textarea
              v-model="body"
              class="form-control"
              id="post-content"
              rows="5"
              required
            ></textarea>
          </div>
          <div>
            <el-upload
              action="https://jsonplaceholder.typicode.com/posts/"
              list-type="picture-card"
              :on-preview="handlePictureCardPreview"
              :on-change="updateImageList"
              :on-remove="removeImageList"
              :auto-upload="false"
            >
              <i class="el-icon-plus"></i>
            </el-upload>
            <el-dialog :visible.sync="dialogVisible">
              <el-tabs
                v-model="activeName"
                @tab-click="handleClick"
              >
                <el-tab-pane
                  label="関連タグ選択"
                  name="first"
                >
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
                </el-tab-pane>
                <el-tab-pane
                  label="製品登録"
                  name="second"
                >
                  <p>製品登録テーブル</p>
                  <el-table
                    :data="gridData"
                    style="width: 100%"
                    ref="table"
                  >
                    <el-table-column
                      label="製品名"
                      min-width="160"
                    >
                      <editable-cell
                        slot-scope="{row}"
                        :can-edit="editModeEnabled"
                        v-model="row.title"
                      >
                        <span slot="content">{{row.title}}</span>
                      </editable-cell>
                    </el-table-column>

                    <el-table-column
                      label="ブランド"
                      min-width="160"
                    >
                      <editable-cell
                        slot-scope="{row}"
                        :can-edit="editModeEnabled"
                        v-model="row.brand"
                      >
                        <span slot="content">{{row.brand}}</span>
                      </editable-cell>
                    </el-table-column>

                    <el-table-column
                      label="品番"
                      min-width="160"
                    >
                      <editable-cell
                        slot-scope="{row}"
                        :can-edit="editModeEnabled"
                        v-model="row.model_number"
                      >
                        <span slot="content">{{row.model_number}}</span>
                      </editable-cell>
                    </el-table-column>
                    <el-table-column
                      label="URL"
                      min-width="160"
                    >
                      <editable-cell
                        slot-scope="{row}"
                        :can-edit="editModeEnabled"
                        v-model="row.model_number"
                      >
                        <span slot="content">{{row.model_number}}</span>
                      </editable-cell>
                    </el-table-column>
                  </el-table>
                </el-tab-pane>
              </el-tabs>
              <span
                slot="footer"
                class="dialog-footer"
              >
                <!-- <el-button @click="dialogVisible = false">Cancel</el-button> -->
                <el-button @click="resetChecked">リセット</el-button>
                <el-button
                  type="primary"
                  @click="tagsConfirm"
                >完了</el-button>
              </span>
            </el-dialog>

            <br />

            <div>
              <el-button
                list-type="picture-card"
                type="primary"
                @click="dialogFormVisible = true"
              >
                画像アドレスでアップ
                <i class="el-icon-upload el-icon-right"></i>
              </el-button>

              <el-dialog
                title="画像アドレスでアップロード"
                :visible.sync="dialogFormVisible"
              >
                <el-row
                  type="flex"
                  justify="center"
                >
                  <img
                    :src="form.name"
                    alt
                    style="width:80%"
                  />
                </el-row>
                <el-form :model="form">
                  <el-form-item
                    label="画像アドレス"
                    :label-width="formLabelWidth"
                  >
                    <el-input
                      v-model="form.name"
                      autocomplete="off"
                    ></el-input>
                  </el-form-item>
                  <el-tabs
                    v-model="activeName"
                    @tab-click="handleClick"
                  >
                    <el-tab-pane
                      label="関連タグ選択"
                      name="first"
                    >
                      <project-tag></project-tag>
                    </el-tab-pane>
                    <el-tab-pane
                      label="製品登録"
                      name="second"
                    >
                      <p>製品登録テーブル</p>

                      <el-table
                        :data="gridData"
                        style="width: 100%"
                        ref="table"
                      >
                        <el-table-column
                          label="製品名"
                          min-width="160"
                        >
                          <editable-cell
                            slot-scope="{row}"
                            :can-edit="editModeEnabled"
                            v-model="row.title"
                          >
                            <span slot="content">{{row.title}}</span>
                          </editable-cell>
                        </el-table-column>

                        <el-table-column
                          label="ブランド"
                          min-width="160"
                        >
                          <editable-cell
                            slot-scope="{row}"
                            :can-edit="editModeEnabled"
                            v-model="row.brand"
                          >
                            <span slot="content">{{row.brand}}</span>
                          </editable-cell>
                        </el-table-column>

                        <el-table-column
                          label="品番"
                          min-width="160"
                        >
                          <editable-cell
                            slot-scope="{row}"
                            :can-edit="editModeEnabled"
                            v-model="row.model_number"
                          >
                            <span slot="content">{{row.model_number}}</span>
                          </editable-cell>
                        </el-table-column>
                        <el-table-column
                          label="URL"
                          min-width="160"
                        >
                          <editable-cell
                            slot-scope="{row}"
                            :can-edit="editModeEnabled"
                            v-model="row.model_number"
                          >
                            <span slot="content">{{row.model_number}}</span>
                          </editable-cell>
                        </el-table-column>
                      </el-table>
                    </el-tab-pane>
                  </el-tabs>
                  <span
                    slot="footer"
                    class="dialog-footer"
                  >
                    <!-- <el-button @click="dialogVisible = false">Cancel</el-button> -->
                    <el-button @click="resetChecked">reset</el-button>
                    <el-button
                      type="primary"
                      @click="tagsConfirm"
                    >Confirm</el-button>
                  </span>
                </el-form>

                <span
                  slot="footer"
                  class="dialog-footer"
                >
                  <el-button @click="dialogFormVisible = false">Cancel</el-button>
                  <el-button
                    type="primary"
                    @click="dialogFormVisible = false"
                  >Confirm</el-button>
                </span>
              </el-dialog>
            </div>
          </div>
        </form>
      </div>
      <div class="card-footer">
        <button
          type="button"
          @click="createPost"
          class="btn btn-primary ml-4"
        >{{ isCreatingPost ? '投稿中...' : '投稿' }}</button>
      </div>
    </div>
  </div>
</template>

<style>
.el-upload {
  border: 1px dashed #d9d9d9;
  border-radius: 6px;
  cursor: pointer;
  position: relative;
  overflow: hidden;
}
.el-upload:hover {
  border-color: #409eff;
}
.edit-cell {
  min-height: 35px;
  cursor: pointer;
}
</style>

<script>
import { setTimeout } from "timers";
import { mapState, mapActions } from "vuex";
import EditableCell from "./EditableCell.vue";
import { projectTags } from "../projectTags";
export default {
  mixins: [projectTags],
  name: "create-post",
  props: ["posts"],
  components: {
    EditableCell,
    projectTags
  },
  data() {
    return {
      dialogImageUrl: "",
      dialogVisible: false,
      imageList: [],
      status_msg: "",
      status: "",
      isCreatingPost: false,
      title: "",
      body: "",
      records: [],

      image_tags: [],
      activeName: "first",

      dialogFormVisible: false,
      form: {
        name: "",
        region: "",
        date1: "",
        date2: "",
        delivery: false,
        type: [],
        resource: "",
        desc: ""
      },

      dialogFormVisible: false,
      form: {
        name: "",
        region: "",
        date1: "",
        date2: "",
        delivery: false,
        type: [],
        resource: "",
        desc: ""
      },
      formLabelWidth: "120px",
      editModeEnabled: true,
      productData: [],
      gridData: [
        {
          title: null,
          brand: null,
          model_number: null
        },
        {
          title: "",
          brand: "",
          model_number: ""
        },
        {
          title: "",
          brand: "",
          model_number: ""
        },
        {
          title: "",
          brand: "",
          model_number: ""
        }
      ],
      defaultProps: {
        children: "children",
        label: "label"
      }
    };
  },

  mounted() {},
  methods: {
    updateImageList(file) {
      // this.imageList.push(file.raw);
      // this.dialogImageUrl = file.url;
      this.imageList.push(file);
      this.dialogVisible = true;
    },
    removeImageList(file) {
      let index = this.imageList.indexOf(file);
      this.imageList.splice(index, 1);
      // let num = this.imageList.length;
      this.image_tags.splice(index, 1);
    },
    handlePictureCardPreview(file) {
      this.dialogImageUrl = file.url;

      this.dialogVisible = true;
    },
    createPost(e) {
      e.preventDefault();
      if (!this.validateForm()) {
        return false;
      }
      this.isCreatingPost = true;
      let formData = new FormData();
      formData.append("title", this.title);
      formData.append("body", this.body);
      $.each(this.imageList, function(key, image) {
        formData.append(`images[${key}]`, image.raw);
      });
      $.each(this.image_tags, function(key, tag) {
        formData.append(`tags[${key}]`, tag);
      });
      formData.append("productData", JSON.stringify(this.productData));
      // $.each(this.productData, function(key, productData) {
      //   formData.append(`productData[${key}]`, JSON.stringify(productData));
      // });
      axios
        .post("/project-post", formData, {
          headers: { "Content-Type": "multipart/form-data" }
        })
        .then(res => {
          this.title = this.body = "";
          this.status = true;
          this.showNotification("Post Successfully Created");
          this.isCreatingPost = false;
        });
    },
    validateForm() {
      if (!this.title) {
        this.status = false;
        this.showNotification("Post title cannot be empty");
        return false;
      }
      if (!this.body) {
        this.status = false;
        this.showNotification("Post body cannot be empty");
        return false;
      }
      return true;
    },
    showNotification(message) {
      this.status_msg = message;
      setTimeout(() => {
        this.status_msg = "";
      }, 3000);
    },
    filterNode(value, data) {
      if (!value) return true;
      return data.label.indexOf(value) !== -1;
    },
    getCheckedNodes() {
      for (let i = 0; i < this.$refs.tree.getCheckedNodes().length; i++) {
        this.image_tags.push(this.$refs.tree.getCheckedNodes()[i].tag_id);
      }
    },
    getCheckedKeys() {
      console.log(this.$refs.tree.getCheckedKeys());
    },
    resetChecked() {
      this.$refs.tree.setCheckedKeys([]);
    },
    tagsConfirm() {
      this.records = [];

      this.image_tags.push(this.$refs.tree.getCheckedKeys());

      if (this.gridData[0].title.length !== 0) {
        for (let n in this.gridData) {
          let record = this.gridData[n];

          if (record.title.length !== 0) {
            this.records.push(record);
          }
        }
        this.productData.push(this.records);
      }

      this.$refs.tree.setCheckedKeys([]);
      this.dialogVisible = false;
    },
    handleClick(tab, event) {
      // console.log(tab, event);
    }
  }
};
</script>