<template>
    <div class="container">
        <div v-if="display">
            <div class="row">
                <div class="mx-auto">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="#product" data-toggle="tab">使用製品</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#project" data-toggle="tab">プロジェクト</a>
                        </li>
                    </ul>
                </div>
            </div>
            <br />
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="thumbneil">
                    <img
                        v-if="items[num].image.indexOf('http') == -1"
                        class="card-img-left flex-auto d-none d-md-block"
                        :src="'/storage/'+items[num].image"
                    />
                    <img
                        v-if="items[num].image.indexOf('http') != -1"
                        class="card-img-left flex-auto d-none d-md-block"
                        :src="items[num].image"
                    />
                    <br />
                    <!-- <div class="d-flex">
                        <span class="images" v-for="(item,key) in items" :key="key">
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
                        </span>
                    </div>-->
                    <el-carousel :autoplay="false" type="card" height="150px" @change="changeImage">
                        <el-carousel-item v-for="(item,key) in items" :key="key">
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
                <div class="card-body d-flex flex-column align-items-start">
                    <div class="d-flex">
                        <strong class="text-primary">
                            <a href>{{project.brands.name}}</a>
                        </strong>
                        <button type="button" class="btn btn-primary">follow</button>
                    </div>

                    <h3 class="mb-0">
                        <a class="text-dark" href="#">{{project.title}}</a>
                    </h3>
                    <div class="mb-1 text-muted">Nov 12</div>

                    <div class="tab-content mx-auto" style="width:80%">
                        <div class="tab-pane active fade show" id="product">
                            <!-- <table class="content container">
                                <span>
                                    <tr>
                                        <th>製品名</th>
                                        <th>ブランド</th>
                                        <th>品番</th>
                                    </tr>

                                    <tr v-for="(product,key) in items[num].products" :key="key.id">
                                        <td>
                                            <a
                                                href="#"
                                                v-scroll-to="toBottom"
                                                class="text-primary"
                                                style="cursor: pointer"
                                                @click="changeProduct"
                                                :value="key"
                                            >{{ product.title }}</a>
                                        </td>
                                        <td>{{ product.brands.name }}</td>
                                        <td>{{ product.model_number }}</td>
                                    </tr>
                                </span>
                            </table>-->

                            <el-table :data="items[num].products" stripe="stripe">
                                <el-table-column prop="title" label="製品名" contenteditable="true"></el-table-column>
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
                        <div class="tab-pane fade" id="project">
                            <p class="card-text mb-auto">{{project.explain }}</p>
                        </div>
                    </div>
                    <br />
                </div>
            </div>

            <div class="row">
                <div class="btn-group d-block mx-auto">
                    <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary"
                        data-toggle="modal"
                        v-for="key in items[num].tags"
                        :key="key.id"
                    >
                        <i class="fas fa-tag"></i>
                        {{ key.name }}
                    </button>
                </div>
            </div>

            <br />

            <div
                v-for="product in items[num].products"
                :key="product.id"
                class="products_info card flex-md-row mb-4 box-shadow h-md-250 border"
            >
                <div class="card-body d-flex flex-column align-items-start">
                    <div v-if="product.product_images.length !== 0">
                        <img
                            v-if="product.product_images[0].image.indexOf('http') == -1"
                            :src="'/storage/'+product.product_images[0].image "
                        />
                        <img
                            v-if="product.product_images[0].image.indexOf('http') != -1"
                            :src="product.product_images[0].image "
                        />
                    </div>
                </div>
                <div class="card-body d-flex flex-column align-items-start">
                    <p>{{ product.brands.name }}</p>
                    <p>{{ product.brands.url }}</p>
                    <p>{{ product.brands.mail_address }}</p>
                    <p>{{ product.brands.address }}</p>
                    <a
                        v-if="product.product_images.length !== 0"
                        :href="'../product-detail?work='+product.id"
                    >この製品の詳細へ</a>
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
            product_num: "0",
            toBottom: "#bottom"
        };
    },

    methods: {
        // ホバーでサムネイル切り替え
        changeImage: function() {
            // let getValue = document
            //     .getElementsByClassName("el-carousel__item is-active")[0]
            //     .getElementsByTagName("img")[0]
            //     .getAttribute("value");
            // console.log(getValue);
            // console.log(this);

            setTimeout(
                function() {
                    let getValue = document
                        .getElementsByClassName(
                            "el-carousel__item is-active"
                        )[0]
                        .getElementsByTagName("img")[0]
                        .getAttribute("value");
                    this.num = getValue;
                }.bind(this),
                10
            );
        }

        // // プロダクト切り替え
        // changeProduct: function(e) {
        //     let getValue = e.target.getAttribute("value");
        //     this.product_num = getValue;
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
.thumbneil img {
    width: 320px;
    height: 320px;
}

/* .thumbneil .images img {
    cursor: pointer;
    width: 80px;
    height: 80px;
} */

.card {
    border: none;
}

.products_info img {
    width: 250px;
    height: 250px;
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