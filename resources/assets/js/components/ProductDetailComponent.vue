<template>
    <div class="container">
        <p>{{ product.title }}</p>
        <p>{{ product.explain }}</p>
        <div v-if="display">
            <div class="thumbneil">
                <img :src="'/storage/'+items[num].image" />
            </div>
            <p>{{ items[num].title }}</p>
            <p>{{ items[num].explain }}</p>
            <p>品番: {{ product.model_number }}</p>
        </div>
        <span class="images" v-for="(item,key) in items" :key="key">
            <img
                @click="changeImage"
                :src="'/storage/'+item.image"
                :value="key"
                style="width:100px"
            />
        </span>
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
}
</style>