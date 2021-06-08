// import {createRouter, createHistory } from 'vue-router'
import Vue from 'vue/dist/vue'

window.Vue = Vue;
import VueRouter from 'vue-router';
Vue.use(VueRouter)
import AddMerchant from '../Vue/addIndex.vue';

const routes = [
    { 
        path: '/addMerchant',
        component: AddMerchant,
        name: "AddMerchant",
    },
];

// const router = createRouter({routes})
const router = new VueRouter({ mode: 'history',
routes// short for `routes: routes`
      })
export default router