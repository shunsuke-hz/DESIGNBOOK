<template>
    <div>
        <div class="row">
            <div class="photo lazy-wrap zoom-in">
                <a
                    class="col-md-4"
                    :href="'/product-detail?work='+value.product_id"
                    v-for="value in filter"
                    :key="value.id"
                >
                    <img class="lazy" v-bind:src="'/storage/'+value.image" style="width: 300px" />
                </a>
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