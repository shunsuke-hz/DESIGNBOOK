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
                                <a :href="'/project-detail?work='+value.id">
                                    <img
                                        class="img img-thumbnail"
                                        v-bind:src="'/storage/'+value.project_images[0].image"
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
            for (let i in this.projects) {
                let project = this.projects[i];
                this.images = project.project_images;
                for (let n in this.images) {
                    let image = this.images[n];
                    let tagArray = image.tags.map(obj => obj.name);
                    let checkArray = this.check;
                    if (checkArray.every(v => tagArray.includes(v)) == true) {
                        if (this.old_result == project) {
                        } else {
                            this.result.push(project);
                        }
                        this.old_result = project;
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