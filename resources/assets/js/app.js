/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

window.Vue = require("vue");

import store from './store/index';
import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';

Vue.use(ElementUI);
Vue.use(require("vue-scrollto"));

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component("top-component", require("./components/TopComponent.vue"));
Vue.component(
  "project-detail-component",
  require("./components/ProjectDetailComponent.vue")
);
Vue.component(
  "product-component",
  require("./components/ProductComponent.vue")
);
Vue.component(
  "product-detail-component",
  require("./components/ProductDetailComponent.vue")
);
Vue.component(
  "brand-list-component",
  require("./components/BrandListComponent.vue")
);
Vue.component(
  "project-post-component",
  require("./components/ProjectPostComponent.vue").default
);

Vue.component(
  "create-post",
  require("./components/CreatePost.vue")
);

const app = new Vue({
  store,
  el: "#app"
});
