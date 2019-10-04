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
                        class="card-img-left flex-auto d-none d-md-block"
                        :src="'/storage/'+items[num].image"
                    />
                    <br />
                    <div class="d-flex">
                        <span class="images" v-for="(item,key) in items" :key="key">
                            <img @click="changeImage" :src="'/storage/'+item.image" :value="key" />
                        </span>
                    </div>
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

                    <div class="tab-content">
                        <div class="tab-pane active fade show" id="product">
                            <table class="content container">
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
                            </table>
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
                v-if="items[num].products.length !== 0"
                id="bottom"
                class="products_info card flex-md-row mb-4 box-shadow h-md-250 border"
            >
                <div
                    class="card-body d-flex flex-column align-items-start"
                    :model="items[num].products"
                >
                    <img
                        :src="'/storage/'+items[num].products[product_num].product_images[0].image "
                    />
                </div>
                <div
                    class="card-body d-flex flex-column align-items-start"
                    :model="items[num].products"
                >
                    <p>{{ items[num].products[product_num].brands.name }}</p>
                    <p>{{ items[num].products[product_num].brands.url }}</p>
                    <p>{{ items[num].products[product_num].brands.mail_address }}</p>
                    <p>{{ items[num].products[product_num].brands.address }}</p>
                    <a
                        :href="'../product-detail?work='+items[num].products[product_num].id"
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
        changeImage: function(e) {
            let getValue = e.target.getAttribute("value");
            this.num = getValue;
        },

        // タブ切り替え
        changeTab: function(n) {
            this.tab = n;
        },

        // プロダクト切り替え
        changeProduct: function(e) {
            let getValue = e.target.getAttribute("value");
            this.product_num = getValue;
        }
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

.thumbneil .images img {
    cursor: pointer;
    width: 80px;
    height: 80px;
}

.card {
    border: none;
}

.products_info img {
    width: 250px;
    height: 250px;
}
</style>