<template>
    <div class="container">
        <div>
            <input type="text" v-model="keyword" />
        </div>
        <div id="tag">
            <label v-for="tag in tags" :key="tag.id">
                <input type="checkbox" :value="tag.name" v-model="check" />
                {{ tag.name }}
            </label>
        </div>

        <div class="row">
            <div class="photo lazy-wrap zoom-in">
                <a
                    class="col-md-4"
                    :href="'/project-detail?work='+value.project_id"
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
            keyword: "",
            projects: [],
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
            for (let x = 0; x < this.projects.length; x++) {
                this.images = this.projects[x].project_images;
                for (let i in this.images) {
                    let image = this.images[i];

                    for (let n = 0; n < image.tags.length; n++) {
                        if (
                            image.tags[n].name.indexOf(this.keyword) !== -1 &&
                            image.tags[n].name.indexOf(this.check) !== -1
                        ) {
                            if (this.old_result == this.images[0]) {
                            } else {
                                // this.result.push(image);
                                this.result.push(this.images[0]);
                            }
                            // this.old_result = image;
                            this.old_result = this.images[0];
                        }
                    }
                }
            }
            return this.result;
        }
    },

    mounted: function() {
        axios.get("/api/").then(response => (this.projects = response.data));
        axios.get("/api/tags").then(response => (this.tags = response.data));
    }
};
</script>

<style>
</style>