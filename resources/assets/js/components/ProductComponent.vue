<template>
    <div>
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-4" v-for="value in filter" :key="value.id">
                        <div class="card mb-4 shadow-sm">
                            <div class="image">
                                <a :href="'/product-detail?work='+value.product_id">
                                    <img
                                        class="img img-thumbnail"
                                        v-bind:src="'/storage/'+value.image"
                                    />
                                </a>
                            </div>
                            <div class="card-body">
                                <p class="card-text">{{ value.title }}</p>
                                <p class="card-text">{{ value.explain }}</p>
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
            products: [],
            images: []
        };
    },
    computed: {
        filter: function() {
            for (let i in this.products) {
                let product = this.products[i];
                this.images.push(product.product_images[0]);
            }
            return this.images;
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