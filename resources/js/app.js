import './bootstrap'

import {createApp} from "vue/dist/vue.esm-bundler"

import router from './router'
import ProductIndex from './components/Products/Index.vue'
import ProductCreate from './components/Products/ProductCreate.vue'
import ProductUpdate from './components/Products/ProductEdit.vue'
createApp({
    components:{
        ProductIndex,
        ProductCreate,
        ProductUpdate
    }
}).use(router).mount('#app')


