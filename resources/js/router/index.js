import { createRouter, createWebHistory } from "vue-router";


import ProductIndex from '../components/Products/Index.vue'
import ProductCreate from '../components/Products/ProductCreate.vue'
import ProductUpdate from '../components/Products/ProductEdit.vue'

const routes = [
    {
        path: '/',
        name: 'product.index',
        component: ProductIndex
    },
    {
        path: '/product/create',
        name: 'product.create',
        component: ProductCreate
    },
    {
        path: '/product/update/:id',
        name: 'product.edit',
        component: ProductUpdate,
        props:true
    }

]

export default createRouter({
    history: createWebHistory(),
    routes
})
