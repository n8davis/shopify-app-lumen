import Vue from 'vue';
import BootstrapVue from 'bootstrap-vue'
import axios from 'axios';
import App from './App.vue';
import VueAxios from 'vue-axios';
import VueRouter from 'vue-router';
import Home from './components/Home.vue';

import { FormGroup , Card , Form , Image } from 'bootstrap-vue/es/components';

Vue.use(VueRouter);
Vue.use(VueAxios, axios);
Vue.use(BootstrapVue);
Vue.use(Form);
Vue.use(FormGroup);
Vue.use(Image );
Vue.use(Card);

const routes = [
    {
        name: 'Home',
        path: '/skeleton/',
        component: Home
    },

];

const router = new VueRouter({ mode: 'history', routes: routes});
new Vue(Vue.util.extend({ router }, App)).$mount('#app');
