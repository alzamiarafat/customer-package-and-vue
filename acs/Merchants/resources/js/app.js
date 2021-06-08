// require('./bootstrap');

// import {createApp} from 'vue'
import Vue from 'vue/dist/vue'

window.Vue = Vue;
import App from './App.vue'
Vue.component('App', require('./Vue/addIndex.vue').default);
// import router from './Router'
const app = new Vue({
	el:'#app',
	component: {App},
})

// const app = new Vue({
// 	el:'#app',
// 	router,
// 	render: h=>h(App)
// })