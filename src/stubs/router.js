import VueRouter   from 'vue-router';

import Home from './Views/Home';

const router = new VueRouter({
    mode  : 'history',
    routes: [
        {
            path     : '/',
            name     : 'home',
            component: Home
        },
    ],
});

export default router;