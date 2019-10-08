<template>
    <div class="row">
        <div class="sidebar col-sm-3 hidden-xs">
            <el-button @click="resetChecked">reset</el-button>
            <project-tag></project-tag>
        </div>
        <div class="col-sm-9 offset-sm-3">
            <div class="album py-5">
                <div class="row">
                    <div class="card m-2 shadow-sm" v-for="value in filter" :key="value.id">
                        <div class="image">
                            <a :href="'/project-detail?work='+value.id">
                                <img
                                    class="img img-thumbnail"
                                    :src="'/storage/'+value.project_images[0].image"
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
</template>

<script>
import ProjectTag from "./ProjectTag.vue";
export default {
    components: {
        ProjectTag
    },
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

                    // 検索窓 スペースで配列化
                    // if (this.keyword !== "") {
                    // let key = this.keyword.match(/[^\s]+/g);
                    // this.check = key;
                    // this.check.filter(z => z);
                    // }
                    // console.log(this.check);

                    if (this.check.every(v => tagArray.includes(v)) == true) {
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
    methods: {
        resetChecked() {
            this.$refs.tree.setCheckedKeys([]);
        }
    },
    mounted: function() {
        axios.get("/api/").then(response => (this.projects = response.data));
        axios.get("/api/tags").then(response => (this.tags = response.data));
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
    margin: 1rem;
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