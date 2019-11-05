<template>
  <div class="wrapper">
    <div class="row justify-content-center">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="ブランド名で検索" v-model="keyword" />
      </div>
    </div>

    <table class="table table-hover">
      <tbody>
        <tr v-for="value in filter" :key="value.id">
          <td class="align-middle">
            <img
              :src="'/storage/'+value.logo_image"
              class="rounded-circle d-block mx-auto brand-image border"
            />
          </td>
          <td class="align-middle m-auto">
            <a
              :href="'/brand-detail/'+value.id"
              style="text-decoration: none;color:black;display: block;width: 100%;height: 100%;"
            >{{ value.name}}</a>
          </td>
          <td class="align-middle m-auto">{{ value.prefecture_name }}</td>
          <td class="align-middle m-auto">
            <button type="button" class="btn btn-info btn-round">follow</button>
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