

require('./bootstrap');

window.Vue = require('vue').default;
import Vue from "vue";
import VueRouter from "vue-router";
import { routes } from "./routes";

Vue.use(VueRouter);

 Vue.component(

    "birouris-index",
    require("./components/birouris/Index.vue").default,

    "salariatis-index",
    require("./components/salariatis/Index.vue").default,

    "departamentes-index",
    require("./components/departamentes/Index.vue").default
);

const router = new VueRouter({
    mode: "history",
    routes: routes
});

const app = new Vue({
    el: "#app",
    router: router
});