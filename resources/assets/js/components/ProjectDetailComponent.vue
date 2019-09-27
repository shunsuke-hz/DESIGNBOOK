<template>
    <div class="container">
        <div v-if="display">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="thumbneil">
                    <img
                        class="card-img-left flex-auto d-none d-md-block"
                        :src="'/storage/'+items[num].image"
                        alt="Card image cap"
                    />

                    <div class="d-flex">
                        <span class="images" v-for="(item,key) in items" :key="key">
                            <img @click="changeImage" :src="'/storage/'+item.image" :value="key" />
                        </span>
                    </div>
                    <!-- <div id="carousel-card" class="carousel slide">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-card" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-card" data-slide-to="1"></li>
                            <li data-target="#carousel-card" data-slide-to="2"></li>
                        </ol>
                    </div>-->
                </div>
                <div class="card-body d-flex flex-column align-items-start">
                    <div class="row">
                        <strong class="d-inline-block text-primary">
                            <a href>{{project.brands.name}}</a>
                        </strong>
                        <!-- <td class="align-middle"> -->
                        <div class="col-md-4">
                            <button type="button" class="btn btn-primary">follow</button>
                        </div>
                    </div>
                    <!-- </td> -->
                    <h3 class="mb-0">
                        <a class="text-dark" href="#">{{project.title}}</a>
                    </h3>
                    <div class="mb-1 text-muted">Nov 12</div>

                    <div class="content container" v-if="tab == '0'">
                        <p class="card-text mb-auto">{{project.explain }}</p>
                    </div>

                    <table class="content container" v-if="tab =='1'">
                        <tr>
                            <th>製品名</th>
                            <th>ブランド</th>
                            <th>品番</th>
                        </tr>
                        <tr v-for="(product,key) in items[num].products" :key="key.id">
                            <td>{{ product.title }}</td>
                            <td>{{ product.brands.name }}</td>
                            <td>{{ product.model_number }}</td>
                        </tr>
                    </table>

                    <br />
                    <button
                        type="button"
                        class="btn btn-secondary d-block mx-auto"
                        v-if="tab == '1'"
                        @click="changeTab(0)"
                    >製品詳細へ</button>
                    <button
                        type="button"
                        class="btn btn-secondary d-block mx-auto"
                        v-if="tab == '0'"
                        @click="changeTab(1)"
                    >プロジェクト詳細へ</button>

                    <!-- <a href="#">Continue reading</a> -->
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
        </div>
        <!-- <span class="images" v-for="(item,key) in items" :key="key">
            <img
                @click="changeImage"
                :src="'/storage/'+item.image"
                :value="key"
                style="width:100px"
            />
        </span>-->
        <div class="content">
            <!-- <div class="btn-group">
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
            </div>-->
        </div>
        <!-- <div v-if="display">{{ items[num]. }}</div> -->
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
            tab: "0"
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
</style>