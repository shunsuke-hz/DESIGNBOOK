<template>
    <div>
        <div>
            <input type="text" v-model="keyword" />
        </div>
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-4" v-for="value in filter" :key="value.id">
                        <div class="card mb-4 shadow-sm">
                            <div class="image">
                                <a :href="'/product-detail?work='+value.id">
                                    <img
                                        class="img img-thumbnail"
                                        v-bind:src="'/storage/'+value.product_images[0].image"
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
    </div>
</template>

<script>
export default {
    data: function() {
        return {
            keyword: "",
            products: [],
            tags: [],
            images: [],
            check: [],
            result: [],
            old_result: []
        };
    },
    computed: {
        // 検索機能
        filter: function() {
            this.result = [];
            this.old_result = [];

            for (let a in this.products) {
                let product = this.products[a];

                for (let n = 0; n < product.tags.length; n++) {
                    if (
                        product.tags[n].name.indexOf(this.keyword) !== -1 &&
                        product.tags[n].name.indexOf(this.check) !== -1
                    ) {
                        if (this.old_result == product) {
                        } else {
                            this.result.push(product);
                        }
                        this.old_result = product;
                    }
                }
            }
            return this.result;
        }
    },

    mounted: function() {
        axios
            .get("/api/product")
            .then(response => (this.products = response.data));
    }
};
</script>

<style>
</style>