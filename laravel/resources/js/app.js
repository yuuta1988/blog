require('./bootstrap');

window.Vue = require('vue');

Vue.component('header-component', require('./components/HeaderComponent.vue').default);

const app = new Vue({
    el: '#app',
});
