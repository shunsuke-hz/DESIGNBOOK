<template>
    <div class="row">
        <div class="sidebar col-sm-3 hidden-xs">
            <product-tag></product-tag>
        </div>
        <div class="col-sm-9 offset-sm-3">
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
    </div>
</template>

<script>
import ProductTag from "./ProductTag.vue";
export default {
    components: {
        ProductTag
    },
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

            for (let i in this.products) {
                let product = this.products[i];
                let tagArray = product.tags.map(obj => obj.name);

                if (this.check.every(v => tagArray.includes(v)) == true) {
                    if (this.old_result == product) {
                    } else {
                        this.result.push(product);
                    }
                }
                this.old_result = product;
            }
            // for (let a in this.products) {
            //     let product = this.products[a];

            //     for (let n = 0; n < product.tags.length; n++) {
            //         if (
            //             product.tags[n].name.indexOf(this.keyword) !== -1 &&
            //             product.tags[n].name.indexOf(this.check) !== -1
            //         ) {
            //             if (this.old_result == product) {
            //             } else {
            //                 this.result.push(product);
            //             }
            //             this.old_result = product;
            //         }
            //     }
            // }
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
.sidebar {
    display: none;
    margin-top: 5rem;
}

@media screen and (min-width: 768px) {
    .sidebar {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        display: block;
        overflow-x: hidden;
        overflow-y: auto;
    }
}

.card {
    width: 264px;
    height: 264px;
    border: none;
    border-radius: 0;
}

.image {
    overflow: hidden;
    width: 264px;
    height: 210px;
}

.image img {
    display: block;
    transition-duration: 0.3s;
    height: 100%;
    border: none;
    margin: auto;
}

.image img:hover {
    transform: scale(1.1);
    transition-duration: 0.3s;
}

.img-thumbnail {
    padding: 0;
    border-radius: 0;
}

.card-body {
    width: 264px;
    height: 54px;
    padding: 0.5rem;
}
</style>