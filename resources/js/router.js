import Vue from 'vue';
import VueRouter from 'vue-router';

import PlacesIndex from './components/places/Index';
import PlacesCreate from './components/places/Create';
import PlacesEdit from './components/places/Edit';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    linkExactActiveClass: 'active',
    routes: [
        {
            path: '/guide/place/index',
            name: 'index',
            component: PlacesIndex
        },
        {
            path: '/guide/place/create',
            name: 'create',
            component: PlacesCreate
        },
        {
            path: '/guide/place/:id',
            name: 'edit',
            component: PlacesEdit
        },
    ]
});

export default router;

