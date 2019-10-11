<template>
    <div class="container">
        <div class="card mt-4">
            <div class="card-header">プロジェクトの作成</div>
            <div class="card-body">
                <div
                    v-if="status_msg"
                    :class="{'alert-success': status, 'alert-danger': !status }"
                    class="alert"
                    role="alert"
                >{{ status_msg }}</div>
                <form>
                    <div class="form-group">
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
                            <el-tabs v-model="activeName" @tab-click="handleClick">
                                <el-tab-pane label="関連タグ選択" name="first">
                                    <el-tree
                                        class="filter-tree"
                                        :data="tags"
                                        show-checkbox
                                        node-key="id"
                                        ref="tree"
                                        :props="defaultProps"
                                        accordion
                                        check-on-click-node
                                        check-strictly="true"
                                    ></el-tree>
                                </el-tab-pane>
                                <el-tab-pane label="製品登録" name="second">
                                    <p>製品登録テーブル</p>
                                    <el-table :data="gridData" style="width: 100%" ref="table">
                                        <el-table-column label="製品名" min-width="180">
                                            <editable-cell
                                                slot-scope="{row}"
                                                :can-edit="editModeEnabled"
                                                v-model="row.title"
                                            >
                                                <span slot="content">{{row.title}}</span>
                                            </editable-cell>
                                        </el-table-column>

                                        <el-table-column label="ブランド" min-width="180">
                                            <editable-cell
                                                slot-scope="{row}"
                                                :can-edit="editModeEnabled"
                                                v-model="row.brand"
                                            >
                                                <span slot="content">{{row.brand}}</span>
                                            </editable-cell>
                                        </el-table-column>

                                        <el-table-column label="品番" min-width="180">
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
                            <span slot="footer" class="dialog-footer">
                                <!-- <el-button @click="dialogVisible = false">Cancel</el-button> -->
                                <el-button @click="resetChecked">リセット</el-button>
                                <el-button type="primary" @click="tagsConfirm">完了</el-button>
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
                                    <el-tabs v-model="activeName" @tab-click="handleClick">
                                        <el-tab-pane label="関連タグ選択" name="first">
                                            <project-tag></project-tag>
                                        </el-tab-pane>
                                        <el-tab-pane label="製品登録" name="second">
                                            <p>製品登録テーブル</p>

                                            <el-table
                                                :data="gridData"
                                                style="width: 100%"
                                                ref="table"
                                            >
                                                <el-table-column label="製品名" min-width="180">
                                                    <editable-cell
                                                        slot-scope="{row}"
                                                        :can-edit="editModeEnabled"
                                                        v-model="row.title"
                                                    >
                                                        <span slot="content">{{row.title}}</span>
                                                    </editable-cell>
                                                </el-table-column>

                                                <el-table-column label="ブランド" min-width="180">
                                                    <editable-cell
                                                        slot-scope="{row}"
                                                        :can-edit="editModeEnabled"
                                                        v-model="row.brand"
                                                    >
                                                        <span slot="content">{{row.brand}}</span>
                                                    </editable-cell>
                                                </el-table-column>

                                                <el-table-column label="品番" min-width="180">
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
                                    <span slot="footer" class="dialog-footer">
                                        <!-- <el-button @click="dialogVisible = false">Cancel</el-button> -->
                                        <el-button @click="resetChecked">reset</el-button>
                                        <el-button type="primary" @click="tagsConfirm">Confirm</el-button>
                                    </span>
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
import ProjectTag from "./ProjectTag.vue";
export default {
    name: "create-post",
    props: ["posts"],
    components: {
        EditableCell,
        ProjectTag
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
            tags: [
                {
                    id: 1,
                    label: "住居",
                    children: [
                        {
                            id: 2,
                            label: "住宅",
                            children: [
                                {
                                    id: 3,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 4,
                                    label: "エクステリア"
                                },
                                {
                                    id: 5,
                                    label: "キッチン・ダイニング"
                                },
                                {
                                    id: 6,
                                    label: "バスルーム"
                                },
                                {
                                    id: 7,
                                    label: "トイレ・洗面"
                                },
                                {
                                    id: 8,
                                    label: "ベッドルーム"
                                },
                                {
                                    id: 9,
                                    label: "リビング"
                                },
                                {
                                    id: 10,
                                    label: "地下室"
                                },
                                {
                                    id: 11,
                                    label: "玄関"
                                },
                                {
                                    id: 12,
                                    label: "ガレージ"
                                },
                                {
                                    id: 13,
                                    label: "収納・クローゼット"
                                },
                                {
                                    id: 14,
                                    label: "廊下"
                                },
                                {
                                    id: 15,
                                    label: "階段"
                                },
                                {
                                    id: 16,
                                    label: "子供部屋"
                                },
                                {
                                    id: 17,
                                    label: "和室"
                                },
                                {
                                    id: 18,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 19,
                            label: "集合住宅・共同住宅",
                            children: [
                                {
                                    id: 20,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 21,
                                    label: "エクステリア"
                                },
                                {
                                    id: 22,
                                    label: "キッチン・ダイニング"
                                },
                                {
                                    id: 23,
                                    label: "バスルーム"
                                },
                                {
                                    id: 24,
                                    label: "トイレ・洗面"
                                },
                                {
                                    id: 25,
                                    label: "ベッドルーム"
                                },
                                {
                                    id: 26,
                                    label: "リビング"
                                },
                                {
                                    id: 27,
                                    label: "地下室"
                                },
                                {
                                    id: 28,
                                    label: "玄関"
                                },
                                {
                                    id: 29,
                                    label: "ガレージ"
                                },
                                {
                                    id: 30,
                                    label: "収納・クローゼット"
                                },
                                {
                                    id: 31,
                                    label: "廊下"
                                },
                                {
                                    id: 32,
                                    label: "階段"
                                },
                                {
                                    id: 33,
                                    label: "子供部屋"
                                },
                                {
                                    id: 34,
                                    label: "和室"
                                },
                                {
                                    id: 35,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 36,
                            label: "住宅リノベーション",
                            children: [
                                {
                                    id: 37,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 38,
                                    label: "エクステリア"
                                },
                                {
                                    id: 39,
                                    label: "キッチン・ダイニング"
                                },
                                {
                                    id: 40,
                                    label: "バスルーム"
                                },
                                {
                                    id: 41,
                                    label: "トイレ・洗面"
                                },
                                {
                                    id: 42,
                                    label: "ベッドルーム"
                                },
                                {
                                    id: 43,
                                    label: "リビング"
                                },
                                {
                                    id: 44,
                                    label: "地下室"
                                },
                                {
                                    id: 45,
                                    label: "玄関"
                                },
                                {
                                    id: 46,
                                    label: "ガレージ"
                                },
                                {
                                    id: 47,
                                    label: "収納・クローゼット"
                                },
                                {
                                    id: 48,
                                    label: "廊下"
                                },
                                {
                                    id: 49,
                                    label: "階段"
                                },
                                {
                                    id: 50,
                                    label: "子供部屋"
                                },
                                {
                                    id: 51,
                                    label: "和室"
                                },
                                {
                                    id: 52,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 53,
                            label: "住宅その他",
                            children: [
                                {
                                    id: 54,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 55,
                                    label: "エクステリア"
                                },
                                {
                                    id: 56,
                                    label: "キッチン・ダイニング"
                                },
                                {
                                    id: 57,
                                    label: "バスルーム"
                                },
                                {
                                    id: 58,
                                    label: "トイレ・洗面"
                                },
                                {
                                    id: 59,
                                    label: "ベッドルーム"
                                },
                                {
                                    id: 60,
                                    label: "リビング"
                                },
                                {
                                    id: 61,
                                    label: "地下室"
                                },
                                {
                                    id: 62,
                                    label: "玄関"
                                },
                                {
                                    id: 63,
                                    label: "ガレージ"
                                },
                                {
                                    id: 64,
                                    label: "収納・クローゼット"
                                },
                                {
                                    id: 65,
                                    label: "廊下"
                                },
                                {
                                    id: 66,
                                    label: "階段"
                                },
                                {
                                    id: 67,
                                    label: "子供部屋"
                                },
                                {
                                    id: 68,
                                    label: "和室"
                                },
                                {
                                    id: 69,
                                    label: "その他"
                                }
                            ]
                        }
                    ]
                },
                {
                    id: 70,
                    label: "オフィス",
                    children: [
                        {
                            id: 71,
                            label: "オフィスビル",
                            children: [
                                {
                                    id: 72,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 73,
                                    label: "エクステリア"
                                },
                                {
                                    id: 74,
                                    label: "オフィスエリア"
                                },
                                {
                                    id: 75,
                                    label: "ミーティング"
                                },
                                {
                                    id: 76,
                                    label: "ラウンジ"
                                },
                                {
                                    id: 77,
                                    label: "休憩・食堂"
                                },
                                {
                                    id: 78,
                                    label: "受付"
                                },
                                {
                                    id: 79,
                                    label: "バックヤード"
                                },
                                {
                                    id: 80,
                                    label: "レクチャースペース"
                                },
                                {
                                    id: 81,
                                    label: "レクリエーション"
                                },
                                {
                                    id: 82,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 83,
                            label: "オフィスインテリア",
                            children: [
                                {
                                    id: 84,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 85,
                                    label: "エクステリア"
                                },
                                {
                                    id: 86,
                                    label: "オフィスエリア"
                                },
                                {
                                    id: 87,
                                    label: "ミーティング"
                                },
                                {
                                    id: 88,
                                    label: "ラウンジ"
                                },
                                {
                                    id: 89,
                                    label: "休憩・食堂"
                                },
                                {
                                    id: 90,
                                    label: "受付"
                                },
                                {
                                    id: 91,
                                    label: "バックヤード"
                                },
                                {
                                    id: 92,
                                    label: "レクチャースペース"
                                },
                                {
                                    id: 93,
                                    label: "レクリエーション"
                                },
                                {
                                    id: 94,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 95,
                            label: "オフィスリノベ",
                            children: [
                                {
                                    id: 96,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 97,
                                    label: "エクステリア"
                                },
                                {
                                    id: 98,
                                    label: "オフィスエリア"
                                },
                                {
                                    id: 99,
                                    label: "ミーティング"
                                },
                                {
                                    id: 100,
                                    label: "ラウンジ"
                                },
                                {
                                    id: 101,
                                    label: "休憩・食堂"
                                },
                                {
                                    id: 102,
                                    label: "受付"
                                },
                                {
                                    id: 103,
                                    label: "バックヤード"
                                },
                                {
                                    id: 104,
                                    label: "レクチャースペース"
                                },
                                {
                                    id: 105,
                                    label: "レクリエーション"
                                },
                                {
                                    id: 106,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 107,
                            label: "オフィスその他",
                            children: [
                                {
                                    id: 108,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 109,
                                    label: "エクステリア"
                                },
                                {
                                    id: 110,
                                    label: "オフィスエリア"
                                },
                                {
                                    id: 111,
                                    label: "ミーティング"
                                },
                                {
                                    id: 112,
                                    label: "ラウンジ"
                                },
                                {
                                    id: 113,
                                    label: "休憩・食堂"
                                },
                                {
                                    id: 114,
                                    label: "受付"
                                },
                                {
                                    id: 115,
                                    label: "バックヤード"
                                },
                                {
                                    id: 116,
                                    label: "レクチャースペース"
                                },
                                {
                                    id: 117,
                                    label: "レクリエーション"
                                },
                                {
                                    id: 118,
                                    label: "その他"
                                }
                            ]
                        }
                    ]
                },
                {
                    id: 119,
                    label: "商業",
                    children: [
                        {
                            id: 120,
                            label: "店舗",
                            children: [
                                {
                                    id: 121,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 122,
                                    label: "エクステリア"
                                },
                                {
                                    id: 123,
                                    label: "インテリア"
                                },
                                {
                                    id: 124,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 125,
                            label: "飲食店",
                            children: [
                                {
                                    id: 126,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 127,
                                    label: "エクステリア"
                                },
                                {
                                    id: 128,
                                    label: "インテリア"
                                },
                                {
                                    id: 129,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 130,
                            label: "ギャラリー",
                            children: [
                                {
                                    id: 131,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 132,
                                    label: "エクステリア"
                                },
                                {
                                    id: 133,
                                    label: "インテリア"
                                },
                                {
                                    id: 134,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 135,
                            label: "ポップアップ",
                            children: [
                                {
                                    id: 136,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 137,
                                    label: "エクステリア"
                                },
                                {
                                    id: 138,
                                    label: "インテリア"
                                },
                                {
                                    id: 139,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 140,
                            label: "ショッピングセンター",
                            children: [
                                {
                                    id: 141,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 142,
                                    label: "エクステリア"
                                },
                                {
                                    id: 143,
                                    label: "インテリア"
                                },
                                {
                                    id: 144,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 145,
                            label: "スーパーマーケット",
                            children: [
                                {
                                    id: 146,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 147,
                                    label: "エクステリア"
                                },
                                {
                                    id: 148,
                                    label: "インテリア"
                                },
                                {
                                    id: 149,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 150,
                            label: "銀行",
                            children: [
                                {
                                    id: 151,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 152,
                                    label: "エクステリア"
                                },
                                {
                                    id: 153,
                                    label: "インテリア"
                                },
                                {
                                    id: 154,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 155,
                            label: "商業リノベーション",
                            children: [
                                {
                                    id: 156,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 157,
                                    label: "エクステリア"
                                },
                                {
                                    id: 158,
                                    label: "インテリア"
                                },
                                {
                                    id: 159,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 160,
                            label: "商業その他",
                            children: [
                                {
                                    id: 161,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 162,
                                    label: "エクステリア"
                                },
                                {
                                    id: 163,
                                    label: "インテリア"
                                },
                                {
                                    id: 164,
                                    label: "その他"
                                }
                            ]
                        }
                    ]
                },
                {
                    id: 165,
                    label: "レクリエーション",
                    children: [
                        {
                            id: 166,
                            label: "遊園地",
                            children: [
                                {
                                    id: 167,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 168,
                                    label: "エクステリア"
                                },
                                {
                                    id: 169,
                                    label: "インテリア"
                                },
                                {
                                    id: 170,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 171,
                            label: "バー/ナイトクラブ",
                            children: [
                                {
                                    id: 172,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 173,
                                    label: "エクステリア"
                                },
                                {
                                    id: 174,
                                    label: "インテリア"
                                },
                                {
                                    id: 175,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 176,
                            label: "ホテル",
                            children: [
                                {
                                    id: 177,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 178,
                                    label: "エクステリア"
                                },
                                {
                                    id: 179,
                                    label: "インテリア"
                                },
                                {
                                    id: 180,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 181,
                            label: "インフォメーションセンター",
                            children: [
                                {
                                    id: 182,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 183,
                                    label: "エクステリア"
                                },
                                {
                                    id: 184,
                                    label: "インテリア"
                                },
                                {
                                    id: 185,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 186,
                            label: "映画館",
                            children: [
                                {
                                    id: 187,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 188,
                                    label: "エクステリア"
                                },
                                {
                                    id: 189,
                                    label: "インテリア"
                                },
                                {
                                    id: 190,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 191,
                            label: "スポーツセンター",
                            children: [
                                {
                                    id: 192,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 193,
                                    label: "エクステリア"
                                },
                                {
                                    id: 194,
                                    label: "インテリア"
                                },
                                {
                                    id: 195,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 196,
                            label: "スタジアム",
                            children: [
                                {
                                    id: 197,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 198,
                                    label: "エクステリア"
                                },
                                {
                                    id: 199,
                                    label: "インテリア"
                                },
                                {
                                    id: 200,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 201,
                            label: "動物園/水族館",
                            children: [
                                {
                                    id: 202,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 203,
                                    label: "エクステリア"
                                },
                                {
                                    id: 204,
                                    label: "インテリア"
                                },
                                {
                                    id: 205,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 206,
                            label: "スパ",
                            children: [
                                {
                                    id: 207,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 208,
                                    label: "エクステリア"
                                },
                                {
                                    id: 209,
                                    label: "インテリア"
                                },
                                {
                                    id: 210,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 211,
                            label: "レクリエーションその他",
                            children: [
                                {
                                    id: 212,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 213,
                                    label: "エクステリア"
                                },
                                {
                                    id: 214,
                                    label: "インテリア"
                                },
                                {
                                    id: 215,
                                    label: "その他"
                                }
                            ]
                        }
                    ]
                },
                {
                    id: 216,
                    label: "文化",
                    children: [
                        {
                            id: 217,
                            label: "文化施設",
                            children: [
                                {
                                    id: 218,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 219,
                                    label: "エクステリア"
                                },
                                {
                                    id: 220,
                                    label: "インテリア"
                                },
                                {
                                    id: 221,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 222,
                            label: "美術館",
                            children: [
                                {
                                    id: 223,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 224,
                                    label: "エクステリア"
                                },
                                {
                                    id: 225,
                                    label: "インテリア"
                                },
                                {
                                    id: 226,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 227,
                            label: "展示施設",
                            children: [
                                {
                                    id: 228,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 229,
                                    label: "エクステリア"
                                },
                                {
                                    id: 230,
                                    label: "インテリア"
                                },
                                {
                                    id: 231,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 232,
                            label: "ホール/劇場",
                            children: [
                                {
                                    id: 233,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 234,
                                    label: "エクステリア"
                                },
                                {
                                    id: 235,
                                    label: "インテリア"
                                },
                                {
                                    id: 236,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 237,
                            label: "図書館",
                            children: [
                                {
                                    id: 238,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 239,
                                    label: "エクステリア"
                                },
                                {
                                    id: 240,
                                    label: "インテリア"
                                },
                                {
                                    id: 241,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 242,
                            label: "博物館",
                            children: [
                                {
                                    id: 243,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 244,
                                    label: "エクステリア"
                                },
                                {
                                    id: 245,
                                    label: "インテリア"
                                },
                                {
                                    id: 246,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 247,
                            label: "展望台",
                            children: [
                                {
                                    id: 248,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 249,
                                    label: "エクステリア"
                                },
                                {
                                    id: 250,
                                    label: "インテリア"
                                },
                                {
                                    id: 251,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 252,
                            label: "パビリオン",
                            children: [
                                {
                                    id: 253,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 254,
                                    label: "エクステリア"
                                },
                                {
                                    id: 255,
                                    label: "インテリア"
                                },
                                {
                                    id: 256,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 257,
                            label: "文化その他",
                            children: [
                                {
                                    id: 258,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 259,
                                    label: "エクステリア"
                                },
                                {
                                    id: 260,
                                    label: "インテリア"
                                },
                                {
                                    id: 261,
                                    label: "その他"
                                }
                            ]
                        }
                    ]
                },
                {
                    id: 262,
                    label: "教育",
                    children: [
                        {
                            id: 263,
                            label: "小・中学校",
                            children: [
                                {
                                    id: 264,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 265,
                                    label: "エクステリア"
                                },
                                {
                                    id: 266,
                                    label: "インテリア"
                                },
                                {
                                    id: 267,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 268,
                            label: "高校",
                            children: [
                                {
                                    id: 269,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 270,
                                    label: "エクステリア"
                                },
                                {
                                    id: 271,
                                    label: "インテリア"
                                },
                                {
                                    id: 272,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 273,
                            label: "大学",
                            children: [
                                {
                                    id: 274,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 275,
                                    label: "エクステリア"
                                },
                                {
                                    id: 276,
                                    label: "インテリア"
                                },
                                {
                                    id: 277,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 278,
                            label: "保育園",
                            children: [
                                {
                                    id: 279,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 280,
                                    label: "エクステリア"
                                },
                                {
                                    id: 281,
                                    label: "インテリア"
                                },
                                {
                                    id: 282,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 283,
                            label: "オーディトリアム",
                            children: [
                                {
                                    id: 284,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 285,
                                    label: "エクステリア"
                                },
                                {
                                    id: 286,
                                    label: "インテリア"
                                },
                                {
                                    id: 287,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 288,
                            label: "教育その他",
                            children: [
                                {
                                    id: 289,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 290,
                                    label: "エクステリア"
                                },
                                {
                                    id: 291,
                                    label: "インテリア"
                                },
                                {
                                    id: 292,
                                    label: "その他"
                                }
                            ]
                        }
                    ]
                },
                {
                    id: 293,
                    label: "行政・地域",
                    children: [
                        {
                            id: 294,
                            label: "市役所",
                            children: [
                                {
                                    id: 295,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 296,
                                    label: "エクステリア"
                                },
                                {
                                    id: 297,
                                    label: "インテリア"
                                },
                                {
                                    id: 298,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 299,
                            label: "コミュニティーセンター",
                            children: [
                                {
                                    id: 300,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 301,
                                    label: "エクステリア"
                                },
                                {
                                    id: 302,
                                    label: "インテリア"
                                },
                                {
                                    id: 303,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 304,
                            label: "領事館/大使館",
                            children: [
                                {
                                    id: 305,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 306,
                                    label: "エクステリア"
                                },
                                {
                                    id: 307,
                                    label: "インテリア"
                                },
                                {
                                    id: 308,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 309,
                            label: "裁判所/郵便局",
                            children: [
                                {
                                    id: 310,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 311,
                                    label: "エクステリア"
                                },
                                {
                                    id: 312,
                                    label: "インテリア"
                                },
                                {
                                    id: 313,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 314,
                            label: "消防署/警察署",
                            children: [
                                {
                                    id: 315,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 316,
                                    label: "エクステリア"
                                },
                                {
                                    id: 317,
                                    label: "インテリア"
                                },
                                {
                                    id: 318,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 319,
                            label: "行政・地域その他",
                            children: [
                                {
                                    id: 320,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 321,
                                    label: "エクステリア"
                                },
                                {
                                    id: 322,
                                    label: "インテリア"
                                },
                                {
                                    id: 323,
                                    label: "その他"
                                }
                            ]
                        }
                    ]
                },
                {
                    id: 324,
                    label: "医療・健康",
                    children: [
                        {
                            id: 325,
                            label: "病院",
                            children: [
                                {
                                    id: 326,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 327,
                                    label: "エクステリア"
                                },
                                {
                                    id: 328,
                                    label: "インテリア"
                                },
                                {
                                    id: 329,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 330,
                            label: "医療施設",
                            children: [
                                {
                                    id: 331,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 332,
                                    label: "エクステリア"
                                },
                                {
                                    id: 333,
                                    label: "インテリア"
                                },
                                {
                                    id: 334,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 335,
                            label: "老人・介護施設",
                            children: [
                                {
                                    id: 336,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 337,
                                    label: "エクステリア"
                                },
                                {
                                    id: 338,
                                    label: "インテリア"
                                },
                                {
                                    id: 339,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 340,
                            label: "医療・健康その他",
                            children: [
                                {
                                    id: 341,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 342,
                                    label: "エクステリア"
                                },
                                {
                                    id: 343,
                                    label: "インテリア"
                                },
                                {
                                    id: 344,
                                    label: "その他"
                                }
                            ]
                        }
                    ]
                },
                {
                    id: 345,
                    label: "産業",
                    children: [
                        {
                            id: 346,
                            label: "工場",
                            children: [
                                {
                                    id: 347,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 348,
                                    label: "エクステリア"
                                },
                                {
                                    id: 349,
                                    label: "インテリア"
                                },
                                {
                                    id: 350,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 351,
                            label: "農場",
                            children: [
                                {
                                    id: 352,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 353,
                                    label: "エクステリア"
                                },
                                {
                                    id: 354,
                                    label: "インテリア"
                                },
                                {
                                    id: 355,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 356,
                            label: "研究所",
                            children: [
                                {
                                    id: 357,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 358,
                                    label: "エクステリア"
                                },
                                {
                                    id: 359,
                                    label: "インテリア"
                                },
                                {
                                    id: 360,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 361,
                            label: "発電所",
                            children: [
                                {
                                    id: 362,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 363,
                                    label: "エクステリア"
                                },
                                {
                                    id: 364,
                                    label: "インテリア"
                                },
                                {
                                    id: 365,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 366,
                            label: "研究施設",
                            children: [
                                {
                                    id: 367,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 368,
                                    label: "エクステリア"
                                },
                                {
                                    id: 369,
                                    label: "インテリア"
                                },
                                {
                                    id: 370,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 371,
                            label: "倉庫",
                            children: [
                                {
                                    id: 372,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 373,
                                    label: "エクステリア"
                                },
                                {
                                    id: 374,
                                    label: "インテリア"
                                },
                                {
                                    id: 375,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 376,
                            label: "港湾施設",
                            children: [
                                {
                                    id: 377,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 378,
                                    label: "エクステリア"
                                },
                                {
                                    id: 379,
                                    label: "インテリア"
                                },
                                {
                                    id: 380,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 381,
                            label: "ワイナリー",
                            children: [
                                {
                                    id: 382,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 383,
                                    label: "エクステリア"
                                },
                                {
                                    id: 384,
                                    label: "インテリア"
                                },
                                {
                                    id: 385,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 386,
                            label: "産業その他",
                            children: [
                                {
                                    id: 387,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 388,
                                    label: "エクステリア"
                                },
                                {
                                    id: 389,
                                    label: "インテリア"
                                },
                                {
                                    id: 390,
                                    label: "その他"
                                }
                            ]
                        }
                    ]
                },
                {
                    id: 391,
                    label: "宗教",
                    children: [
                        {
                            id: 392,
                            label: "教会",
                            children: [
                                {
                                    id: 393,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 394,
                                    label: "エクステリア"
                                },
                                {
                                    id: 395,
                                    label: "インテリア"
                                },
                                {
                                    id: 396,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 397,
                            label: "寺院",
                            children: [
                                {
                                    id: 398,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 399,
                                    label: "エクステリア"
                                },
                                {
                                    id: 400,
                                    label: "インテリア"
                                },
                                {
                                    id: 401,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 402,
                            label: "火葬場",
                            children: [
                                {
                                    id: 403,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 404,
                                    label: "エクステリア"
                                },
                                {
                                    id: 405,
                                    label: "インテリア"
                                },
                                {
                                    id: 406,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 407,
                            label: "結婚式場",
                            children: [
                                {
                                    id: 408,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 409,
                                    label: "エクステリア"
                                },
                                {
                                    id: 410,
                                    label: "インテリア"
                                },
                                {
                                    id: 411,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 412,
                            label: "墓地",
                            children: [
                                {
                                    id: 413,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 414,
                                    label: "エクステリア"
                                },
                                {
                                    id: 415,
                                    label: "インテリア"
                                },
                                {
                                    id: 416,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 417,
                            label: "宗教その他",
                            children: [
                                {
                                    id: 418,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 419,
                                    label: "エクステリア"
                                },
                                {
                                    id: 420,
                                    label: "インテリア"
                                },
                                {
                                    id: 421,
                                    label: "その他"
                                }
                            ]
                        }
                    ]
                },
                {
                    id: 422,
                    label: "インフラ",
                    children: [
                        {
                            id: 423,
                            label: "空港",
                            children: [
                                {
                                    id: 424,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 425,
                                    label: "エクステリア"
                                },
                                {
                                    id: 426,
                                    label: "インテリア"
                                },
                                {
                                    id: 427,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 428,
                            label: "駅",
                            children: [
                                {
                                    id: 429,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 430,
                                    label: "エクステリア"
                                },
                                {
                                    id: 431,
                                    label: "インテリア"
                                },
                                {
                                    id: 432,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 433,
                            label: "橋",
                            children: [
                                {
                                    id: 434,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 435,
                                    label: "エクステリア"
                                },
                                {
                                    id: 436,
                                    label: "インテリア"
                                },
                                {
                                    id: 437,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 438,
                            label: "港",
                            children: [
                                {
                                    id: 439,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 440,
                                    label: "エクステリア"
                                },
                                {
                                    id: 441,
                                    label: "インテリア"
                                },
                                {
                                    id: 442,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 443,
                            label: "インフラその他",
                            children: [
                                {
                                    id: 444,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 445,
                                    label: "エクステリア"
                                },
                                {
                                    id: 446,
                                    label: "インテリア"
                                },
                                {
                                    id: 447,
                                    label: "その他"
                                }
                            ]
                        }
                    ]
                },
                {
                    id: 448,
                    label: "ランドスケープ・その他",
                    children: [
                        {
                            id: 449,
                            label: "公園",
                            children: [
                                {
                                    id: 450,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 451,
                                    label: "エクステリア"
                                },
                                {
                                    id: 452,
                                    label: "インテリア"
                                },
                                {
                                    id: 453,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 454,
                            label: "広場",
                            children: [
                                {
                                    id: 455,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 456,
                                    label: "エクステリア"
                                },
                                {
                                    id: 457,
                                    label: "インテリア"
                                },
                                {
                                    id: 458,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 459,
                            label: "庭園",
                            children: [
                                {
                                    id: 460,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 461,
                                    label: "エクステリア"
                                },
                                {
                                    id: 462,
                                    label: "インテリア"
                                },
                                {
                                    id: 463,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 464,
                            label: "都市緑地",
                            children: [
                                {
                                    id: 465,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 466,
                                    label: "エクステリア"
                                },
                                {
                                    id: 467,
                                    label: "インテリア"
                                },
                                {
                                    id: 468,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 469,
                            label: "ランドスケープその他",
                            children: [
                                {
                                    id: 470,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 471,
                                    label: "エクステリア"
                                },
                                {
                                    id: 472,
                                    label: "インテリア"
                                },
                                {
                                    id: 473,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 474,
                            label: "モニュメント",
                            children: [
                                {
                                    id: 475,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 476,
                                    label: "エクステリア"
                                },
                                {
                                    id: 477,
                                    label: "インテリア"
                                },
                                {
                                    id: 478,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 479,
                            label: "マスタープラン",
                            children: [
                                {
                                    id: 480,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 481,
                                    label: "エクステリア"
                                },
                                {
                                    id: 482,
                                    label: "インテリア"
                                },
                                {
                                    id: 483,
                                    label: "その他"
                                }
                            ]
                        },
                        {
                            id: 484,
                            label: "その他",
                            children: [
                                {
                                    id: 485,
                                    label: "外観・ファサード"
                                },
                                {
                                    id: 486,
                                    label: "エクステリア"
                                },
                                {
                                    id: 487,
                                    label: "インテリア"
                                },
                                {
                                    id: 488,
                                    label: "その他"
                                }
                            ]
                        }
                    ]
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
                this.image_tags.push(
                    this.$refs.tree.getCheckedNodes()[i].tag_id
                );
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
            for (let i = 0; i < this.$refs.tree.getCheckedNodes().length; i++) {
                this.image_tags.push(
                    this.$refs.tree.getCheckedNodes()[i].tag_id
                );
            }

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