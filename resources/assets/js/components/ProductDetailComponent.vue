<template>
    <div class="container">
        <div>
            <img :src="'/storage/'+thumbneil" style="width: 200px" />
        </div>
        <span v-for="image in images" :key="image">
            <img @mouseover="changeImage" :src="'/storage/'+image" style="width: 100px" />
        </span>
    </div>
</template>

<script>
export default {
    data: function() {
        return {
            url: "",
            id: "",
            thumbneil: [],
            products: [],
            images: []
        };
    },
    methods: {
        // ホバーでサムネイル切り替え
        changeImage: function(e) {
            let getUrl = e.target.getAttribute("src").replace("/storage/", "");
            this.thumbneil.shift();
            this.thumbneil.push(getUrl);
        }
    },

    mounted: async function() {
        this.url = location.href;
        let index = this.url.indexOf("=");
        this.id = this.url.slice(index + 1);
        await axios
            .get("/api/product-detail/" + this.id)
            .then(response => (this.products = response.data));

        for (let i = 0; i < this.products.product_images.length; i++) {
            this.images.push(this.products.product_images[i].image);
        }

        this.thumbneil.push(this.images[0]);
    }
};
</script>

<style>
</style>