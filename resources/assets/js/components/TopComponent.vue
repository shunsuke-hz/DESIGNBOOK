<template>
    <div>
        <div>
            <input type="text" v-model="keyword" />
        </div>
        <div id="tag">
            <label v-for="tag in tags" :key="tag.id">
                <input type="checkbox" :value="tag.name" v-model="check" />
                {{ tag.name }}
            </label>
        </div>
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-4" v-for="value in filter" :key="value.id">
                        <div class="card mb-4 shadow-sm">
                            <div class="image">
                                <a :href="'/project-detail?work='+value.project_id">
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