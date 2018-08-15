import Vue from 'vue';
import BootstrapVue from 'bootstrap-vue'
import axios from 'axios';
import App from './App.vue';
import VueAxios from 'vue-axios';
import VueRouter from 'vue-router';
import Home from './components/Home.vue';
import Dashboard from './components/Dashboard.vue';
import Blogs from './components/Blogs.vue';
import Collections from './components/Collections.vue';
import Customers from './components/Customers.vue';
import Draft_Orders from './components/Draft_Orders.vue';
import Orders from './components/Orders.vue';
import Page from './components/Page.vue';
import Products from './components/Products.vue';
import Shop from './components/Shop.vue';

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
        path: '/metafield/',
        component: Home
    },
    {
        name: 'Blogs',
        path: '/metafield/',
        component: Blogs
    },
    {
        name: 'Collections',
        path: '/metafield/',
        component: Collections
    },
    {
        name: 'Customers',
        path: '/metafield/',
        component: Customers
    },
    {
        name: 'Draft Orders',
        path: '/metafield/',
        component: Draft_Orders
    },
    {
        name: 'Orders',
        path: '/metafield/',
        component: Orders
    },
    {
        name: 'Page',
        path: '/metafield/',
        component: Page
    },
    {
        name: 'Products',
        path: '/metafield/',
        component: Products
    },
    {
        name: 'Shop',
        path: '/metafield/',
        component: Shop
    },

];
const router = new VueRouter({ mode: 'history', routes: routes});
new Vue(Vue.util.extend({ router }, App)).$mount('#app');
