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
                            <a href>{{product.brands.name}}</a>
                        </strong>

                        <div class="col-me-4">
                            <button type="button" class="btn btn-primary">follow</button>
                        </div>
                    </div>
                    <h3 class="mb-0">
                        <a class="text-dark" href="#">{{product.title}}</a>
                    </h3>
                    <div class="mb-1 text-muted">Nov 12</div>

                    <div class="content container">
                        <p class="card-text mb-auto">{{product.explain}}</p>
                    </div>
                    <div class="btn-group d-block mx-auto">
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
            product: [],
            items: []
        };
    },
    methods: {
        // ホバーでサムネイル切り替え
        changeImage: function(e) {
            let getValue = e.target.getAttribute("value");
            this.num = getValue;
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
.thumbneil img {
    width: 350px;
    height: 350px;
}

.images img {
    cursor: pointer;
    width: 100px;
    height: 100px;
}

.card {
    border: none;
}
</style>