<template>
    <div class="container">
        <div v-if="display">
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
                    <div class="row">
                        <strong class="d-inline-block text-primary">
                            <a href>{{project.brands.name}}</a>
                        </strong>

                        <div class="col-md-4">
                            <button type="button" class="btn btn-primary">follow</button>
                        </div>
                    </div>

                    <h3 class="mb-0">
                        <a class="text-dark" href="#">{{project.title}}</a>
                    </h3>
                    <div class="mb-1 text-muted">Nov 12</div>

                    <table class="content container" v-if="tab =='0'">
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
                    </table>

                    <div class="content container" v-if="tab == '1'">
                        <p class="card-text mb-auto">{{project.explain }}</p>
                    </div>

                    <br />
                    <button
                        type="button"
                        class="btn btn-secondary d-block mx-auto"
                        v-if="tab == '0'"
                        @click="changeTab(1)"
                    >プロジェクト詳細へ</button>
                    <button
                        type="button"
                        class="btn btn-secondary d-block mx-auto"
                        v-if="tab == '1'"
                        @click="changeTab(0)"
                    >製品詳細へ</button>

                    <br />
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
            </div>

            <div id="bottom" class="products_info card flex-md-row mb-4 box-shadow h-md-250 border">
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
    width: 350px;
    height: 350px;
}

.thumbneil .images img {
    cursor: pointer;
    width: 100px;
    height: 100px;
}

.card {
    border: none;
}

.products_info img {
    width: 250px;
    height: 250px;
}
</style>