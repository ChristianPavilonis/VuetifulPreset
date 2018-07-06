import Vue         from 'vue';
import VueRouter   from 'vue-router';

import App  from './Views/App';

import router from './router';

import './bootstrap';

Vue.use(VueRouter);

const app = new Vue({
    el        : '#app',
    components: { App },
    router,
});
