<template>
    <div class="container">
        <p>{{ project.title }}</p>
        <p>{{ project.explain }}</p>
        <div v-if="display">
            <div class="thumbneil">
                <img :src="'/storage/'+items[num].image" />
            </div>
            <p>{{ items[num].title }}</p>
            <p>{{ items[num].explain }}</p>
        </div>
        <span v-for="(item,key) in items" :key="key">
            <img
                @mouseover="changeImage"
                :src="'/storage/'+item.image"
                :value="key"
                style="width:100px"
            />
        </span>
        <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
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
</style>