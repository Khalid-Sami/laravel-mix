import Vue from "vue";
import VueRouter from "vue-router";
import App from "./App.vue";
import {routes} from '../routes/basic-routes'
import '../assets/plugins/jquery-1.12.4.min.js'
import '../assets/plugins/owl-carousel/owl.carousel.min.js'
import '../assets/plugins/jquery.matchHeight-min.js'
import '../assets/plugins/slick/slick/slick.min.js'
import '../assets/plugins/jquery-bar-rating/dist/jquery.barrating.min.js'
import '../assets/plugins/slick-animation.min.js'
import '../assets/plugins/jquery-ui/jquery-ui.min.js'
import '../assets/plugins/jquery.slimscroll.min.js'
import '../assets/plugins/select2/dist/js/select2.full.min.js'

Vue.config.productionTip = false;

Vue.use(VueRouter)
////
// import VueFormGenerator from 'vue-form-generator'
// import 'vue-form-generator/dist/vfg.css'
// Vue.use(VueFormGenerator)
// import "vue-form-generator/dist/vfg-core.js";
// import "vue-form-generator/dist/vfg-core.css";
////
import VeeValidate from 'vee-validate';
Vue.use(VeeValidate, {
    errorBagName: 'vErrors'
})
////
import VueAxios from 'vue-axios';
import axios from 'axios';
Vue.prototype.$axios = axios
Vue.use(VueAxios);
////
const router = new VueRouter({
    routes,
    mode: 'history'
})
new Vue({
    router,
    render: h => h(App)
}).$mount("#app");
