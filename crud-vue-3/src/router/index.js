//import vue router
import { createRouter, createWebHistory } from 'vue-router'

//define a routes
const routes = [

    // Route Kamar
    {
        path: '/kamar',
        name: 'kamar.index-kamar',
        component: () => import( /* webpackChunkName: "kamar.index" */ '@/views/kamar/Index.vue')
    },
    {
        path: '/kamar/create',
        name: 'kamar.create-kamar',
        component: () => import( /* webpackChunkName: "kamar.create" */ '@/views/kamar/Create.vue')
    },
    {
        path: '/kamar/edit/:id',
        name: 'kamar.edit-kamar',
        component: () => import( /* webpackChunkName: "kamar.edit" */ '@/views/kamar/Edit.vue')
    },

    // Route Fasilitas Hotel
    {
        path: '/fasilitas',
        name: 'fasilitas.index-fasilitas',
        component: () => import( /* webpackChunkName: "fasilitas.index" */ '@/views/fasilitas/Index.vue')
    },
    {
        path: '/fasilitas/create',
        name: 'fasilitas.create-fasilitas',
        component: () => import( /* webpackChunkName: "fasilitas.create" */ '@/views/fasilitas/Create.vue')
    },
    {
        path: '/fasilitas/edit/:id',
        name: 'fasilitas.edit-fasilitas',
        component: () => import( /* webpackChunkName: "fasilitas.edit" */ '@/views/fasilitas/Edit.vue')
    },

    // Route Pemesanan
    {
        path: '/pemesanan',
        name: 'pemesanan.index-pemesanan',
        component: () => import( /* webpackChunkName: "pemesanan.index" */ '@/views/pemesanan/Index.vue')
    },
    {
        path: '/pemesanan/create',
        name: 'pemesanan.create-pemesanan',
        component: () => import( /* webpackChunkName: "pemesanan.create" */ '@/views/pemesanan/Create.vue')
    },
    {
        path: '/pemesanan/edit/:id',
        name: 'pemesanan.edit-pemesanan',
        component: () => import( /* webpackChunkName: "pemesanan.edit" */ '@/views/pemesanan/Edit.vue')
    }
]

//create router
const router = createRouter({
    history: createWebHistory(),
    routes  // config routes
})

export default router