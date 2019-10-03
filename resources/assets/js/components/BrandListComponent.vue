<template>
    <div>
        <div>
            <input type="text" v-model="keyword" />
        </div>
        <table class="table table-hover">
            <tbody>
                <tr v-for="value in filter" :key="value.id">
                    <td class="align-middle">
                        <img
                            :src="'/storage/'+value.logo_image"
                            class="rounded-circle d-block mx-auto brand-image"
                        />
                    </td>
                    <td class="align-middle m-auto">
                        <h5 class="font-weight-bold m-auto text-center">{{ value.name}}</h5>
                    </td>
                    <td class="d-flex align-items-center m-auto">
                        <p
                            class="m-auto text-center d-flex align-items-center"
                        >{{ value.prefecture_name }}</p>
                    </td>
                    <td class="align-middle">
                        <button type="button" class="btn btn-primary d-block mx-auto">follow</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    data: function() {
        return {
            brands: [],
            keyword: "",
            result: [],
            old_result: []
        };
    },

    computed: {
        filter: function() {
            this.result = [];
            this.old_result = [];
            for (let i in this.brands) {
                let brand = this.brands[i];
                if (brand.name.includes(this.keyword) == true) {
                    if (this.old_result == brand) {
                    } else {
                        this.result.push(brand);
                    }
                    this.old_result = brand;
                }
            }
            return this.result;
        }
    },
    mounted: async function() {
        await axios
            .get("/api/brands-list/")
            .then(response => (this.brands = response.data));
    }
};
</script>

<style>
.brand-image {
    width: 50px;
    height: 50px;
}
</style>