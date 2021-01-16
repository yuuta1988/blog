import VueRouter from 'vue-router';
import HeaderComponent from "./components/HeaderComponent";
import HomeComponent from "./components/HomeComponent";
import CreateComponent from "./components/CreateComponent";
import EditComponent from "./components/EditComponent";
import ShowComponent from "./components/ShowComponent";

require('./bootstrap');

window.Vue = require('vue');

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: HomeComponent
        },
        {
            path: 'create',
            name: 'create',
            component: CreateComponent
        },
        {
            path: '/:id/edit',
            name: 'edit',
            component: EditComponent,
            props: true
        },
        {
            path: ':id',
            name: 'show',
            component: ShowComponent,
            props: true
        },
    ]
});

Vue.component('header-component', HeaderComponent);

const app = new Vue({
    el: '#app',
    router
});
