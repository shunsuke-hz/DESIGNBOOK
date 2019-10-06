<template>
    <div class="container">
        <div class="card mt-4">
            <div class="card-header">New Post</div>
            <div class="card-body">
                <div
                    v-if="status_msg"
                    :class="{'alert-success': status, 'alert-danger': !status }"
                    class="alert"
                    role="alert"
                >{{ status_msg }}</div>
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Title</label>
                        <input
                            v-model="title"
                            type="text"
                            class="form-control"
                            id="title"
                            placeholder="Post Title"
                            required
                        />
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Post Content</label>
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
                        <el-dialog :visible.sync="dialogVisible" title="関連するタグを選択">
                            <el-input placeholder="Filter keyword" v-model="filterText"></el-input>
                            <br />
                            <el-button @click="getCheckedNodes">get by node</el-button>
                            <el-button @click="resetChecked">reset</el-button>

                            <el-tree
                                class="filter-tree"
                                :data="tags"
                                show-checkbox
                                node-key="id"
                                :filter-node-method="filterNode"
                                ref="tree"
                            ></el-tree>
                            <span slot="footer" class="dialog-footer">
                                <el-button @click="dialogVisible = false">Cancel</el-button>
                                <el-button type="primary" @click="tagsConfirm">Confirm</el-button>
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

                            <el-dialog title="画像アドレスでアップロード" :visible.sync="dialogFormVisible">
                                <el-row type="flex" justify="center">
                                    <img :src="form.name" alt style="width:80%" />
                                </el-row>
                                <el-form :model="form">
                                    <el-form-item label="画像アドレス" :label-width="formLabelWidth">
                                        <el-input v-model="form.name" autocomplete="off"></el-input>
                                    </el-form-item>
                                    <el-form-item label="Zones" :label-width="formLabelWidth">
                                        <el-select
                                            v-model="form.region"
                                            placeholder="Please select a zone"
                                        >
                                            <el-option label="Zone No.1" value="shanghai"></el-option>
                                            <el-option label="Zone No.2" value="beijing"></el-option>
                                        </el-select>
                                    </el-form-item>
                                </el-form>
                                <span slot="footer" class="dialog-footer">
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
                    class="btn btn-success"
                >{{ isCreatingPost ? 'Posting...' : 'Create Post' }}</button>
            </div>
        </div>
    </div>
</template>

<style>
.avatar-uploader .el-upload {
    border: 1px dashed #d9d9d9;
    border-radius: 6px;
    cursor: pointer;
    position: relative;
    overflow: hidden;
}
.avatar-uploader .el-upload:hover {
    border-color: #409eff;
}
.avatar-uploader-icon {
    font-size: 28px;
    color: #8c939d;
    width: 178px;
    height: 178px;
    line-height: 178px;
    text-align: center;
}
.avatar {
    width: 178px;
    height: 178px;
    display: block;
}
</style>

<script>
import { setTimeout } from "timers";
import { mapState, mapActions } from "vuex";
export default {
    name: "create-post",
    props: ["posts"],
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
            filterText: "",
            image_tags: [],
            tags: [
                {
                    id: 1,
                    tag_id: 1,
                    label: "住宅",
                    children: [
                        {
                            id: 3,
                            tag_id: [1, 3],
                            label: "寝室",
                            children: [
                                {
                                    id: 5,
                                    tag_id: [1, 3, 5],
                                    label: "ベッド"
                                },
                                {
                                    id: 6,
                                    tag_id: [1, 3, 6],
                                    label: "床材"
                                }
                            ]
                        },
                        {
                            id: 4,
                            tag_id: [1, 4],
                            label: "リビング",
                            children: [
                                {
                                    id: 7,
                                    tag_id: [1, 4, 7],
                                    label: "テーブル"
                                },
                                {
                                    id: 8,
                                    tag_id: [1, 4, 8],
                                    label: "床材"
                                }
                            ]
                        }
                    ]
                },
                {
                    id: 2,
                    tag_id: 2,
                    label: "住宅リノベーション",
                    children: [
                        {
                            id: 5,
                            tag_id: [2, 5],
                            label: "天井"
                        }
                    ]
                }
            ],
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
            formLabelWidth: "120px"
        };
    },

    //   computed: {
    //     ...mapActions(['getAllPosts']),
    //   },
    watch: {
        filterText(val) {
            this.$refs.tree.filter(val);
        }
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
            // this.imageList.push(file);
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
            axios
                .post("/project-post", formData, {
                    headers: { "Content-Type": "multipart/form-data" }
                })
                .then(res => {
                    this.title = this.body = "";
                    this.status = true;
                    this.showNotification("Post Successfully Created");
                    this.isCreatingPost = false;
                    //   this.getAllPosts();
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
                this.image_tags.push(
                    this.$refs.tree.getCheckedNodes()[i].tag_id
                );
            }
        },
        resetChecked() {
            this.$refs.tree.setCheckedKeys([]);
        },
        tagsConfirm() {
            for (let i = 0; i < this.$refs.tree.getCheckedNodes().length; i++) {
                this.image_tags.push(this.$refs.tree.getCheckedNodes()[i].id);
            }
            this.$refs.tree.setCheckedKeys([]);
            this.dialogVisible = false;
        }
    }
};
</script>