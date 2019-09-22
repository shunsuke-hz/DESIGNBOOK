<template>
    <div class="container">
        <div>
            <img :src="'/storage/'+thumbneil" style="width: 200px" />
        </div>
        <span v-for="photo in photos" :key="photo">
            <img @mouseover="changeImage" :src="'/storage/'+photo" style="width: 100px" />
        </span>
    </div>
</template>

<script>
export default {
    data: function() {
        return {
            url: "",
            id: "",
            project: [],
            items: [],
            photos: [],
            thumbneil: [],
            products: [],
            member: [],
            manufacture: []
        };
    },

    methods: {
        // ホバーでサムネイル切り替え
        changeImage: function(e) {
            let getUrl = e.target.getAttribute("src").replace("/storage/", "");
            this.thumbneil.shift();
            this.thumbneil.push(getUrl);

            // for (let x = 0; x < this.items.products.length; x++) {
            //   this.products.push(this.items.products[x]);
            //   this.member.push(this.items.products[x].manufacturer_member);
            //   this.manufacture.push(
            //     this.items.products[x].manufacturer_member.manufacturer
            //   );
            // }
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
        for (let i = 0; i < this.items.length; i++) {
            this.photos.push(this.items[i].image);
        }

        this.thumbneil.push(this.photos[0]);
    }
};
</script>

